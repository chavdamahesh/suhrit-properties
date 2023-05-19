<template>
  <div class="createPost-container">
    <el-form ref="postForm" :model="postForm" :rules="rules" class="form-container">
      <sticky :class-name="'sub-navbar '+postForm.status">
        <el-button
          v-loading="loading"
          style="margin-left: 10px;"
          type="success"
          @click="submitForm"
        >
          Submit
        </el-button>
      </sticky>

      <div class="createPost-main-container">
        <el-row>
          <el-col :span="24">
            <el-form-item style="margin-bottom: 40px;" prop="title">
              <MDinput v-model="postForm.translations[0].title" :maxlength="100" name="name" required>
                EN Title
              </MDinput>
            </el-form-item>
            <el-form-item style="margin-bottom: 40px;" prop="title">
              <MDinput v-model="postForm.translations[1].title" :maxlength="100" name="name" required>
                FR Title
              </MDinput>
            </el-form-item>
          </el-col>
        </el-row>

        <el-form-item style="margin-bottom: 40px;" label-width="80px" label="EN Summary:">
          <el-input
            v-model="postForm.translations[0].summary"
            :rows="1"
            type="textarea"
            class="block-textarea"
            autosize
            placeholder="Please enter the summary"
          />
          <span v-show="contentShortLength" class="word-counter">{{ contentShortLength }} word</span>
        </el-form-item>

        <el-form-item style="margin-bottom: 40px;" label-width="80px" label="FR Summary:">
          <el-input
            v-model="postForm.translations[1].summary"
            :rows="1"
            type="textarea"
            class="block-textarea"
            autosize
            placeholder="Please enter the summary"
          />
          <span v-show="contentShortLength" class="word-counter">{{ contentShortLength }} word</span>
        </el-form-item>

        <el-form-item prop="content" style="margin-bottom: 30px;">
          <label>EN Content</label>
          <Tinymce ref="editor" v-model="postForm.translations[0].content" :height="400" />
        </el-form-item>

        <el-form-item prop="content" style="margin-bottom: 30px;">
          <label>FR Content</label>
          <Tinymce ref="editor" v-model="postForm.translations[1].content" :height="400" />
        </el-form-item>
      </div>
    </el-form>
  </div>
</template>

<script>
import Tinymce from '@/components/Tinymce';
import MDinput from '@/components/MDinput';
import Sticky from '@/components/Sticky'; // Sticky header
import { fetchBlock } from '@/api/block';
import { createBlock, updateBlock } from '@/api/block';
import { userSearch } from '@/api/search';

const defaultForm = {
  title: '',
  content: '',
  summary: '',
  translations: [
    {
      title: '',
      content: '',
    },
    {
      title: '',
      content: '',
    },
  ],
  id: undefined,
};

export default {
  name: 'BlockDetail',
  components: {
    Tinymce,
    MDinput,
    Sticky,
  },
  props: {
    isEdit: {
      type: Boolean,
      default: false,
    },
  },
  data() {
    return {
      postForm: Object.assign({}, defaultForm),
      loading: false,
      userListOptions: [],
      rules: {
        // title: [{ validator: validateRequire }],
        // content: [{ validator: validateRequire }],
        // summary: [{ validator: validateRequire }],
      },
      tempRoute: {},
    };
  },
  computed: {
    contentShortLength() {
      if (this.postForm.content) {
        return this.postForm.content.length;
      } else {
        return 0;
      }
    },
    lang() {
      return this.$store.getters.language;
    },
  },
  created() {
    if (this.isEdit) {
      const id = this.$route.params && this.$route.params.id;
      this.fetchData(id);
    } else {
      this.postForm = Object.assign({}, defaultForm);
    }

    // Why need to make a copy of this.$route here?
    // Because if you enter this page and quickly switch tag, may be in the execution of the setTagsViewTitle function, this.$route is no longer pointing to the current page
    this.tempRoute = Object.assign({}, this.$route);
  },
  methods: {
    fetchData(id) {
      fetchBlock(id)
        .then(response => {
          this.postForm = response.data[0][0];
          this.postForm.id;
          this.postForm.translations;

          console.log(this.postForm);
          // Set tagsview title
          // this.setTagsViewTitle();
        })
        .catch(err => {
          console.log(err);
        });
    },
    submitForm() {
      this.loading = true;
      var fields = {
        id: this.postForm.id,
        translations: this.postForm.translations,
      };

      if (!this.postForm.id) {
        console.log(fields);
        createBlock(fields).then(response => {
          this.$message({
            message: 'Block has been added successfully',
            type: 'success',
            duration: 5 * 1000,
          });
          this.loading = false;
          this.dialogPermissionLoading = false;
          this.dialogPermissionVisible = false;
          this.$router.push({ path: '/administrator/blocks' });
        });
      } else {
        updateBlock(this.postForm.id, fields).then(response => {
          this.$message({
            message: 'Block has been updated successfully',
            type: 'success',
            duration: 5 * 1000,
          });
          this.loading = false;
          this.dialogPermissionLoading = false;
          this.dialogPermissionVisible = false;
        });
      }
    },
    draftForm() {
      if (
        this.postForm.content.length === 0 ||
        this.postForm.title.length === 0
      ) {
        this.$message({
          message: 'Please enter required title and content',
          type: 'warning',
        });
        return;
      }
      this.$message({
        message: 'Successfully saved',
        type: 'success',
        showClose: true,
        duration: 1000,
      });
      this.postForm.status = 'draft';
    },
    getRemoteUserList(query) {
      userSearch(query).then(response => {
        if (!response.data.items) {
          return;
        }
        this.userListOptions = response.data.items.map(v => v.name);
      });
    },
  },
};
</script>

<style rel="stylesheet/scss" lang="scss" scoped>
@import "~@/styles/mixin.scss";
.createPost-container {
  position: relative;
  .createPost-main-container {
    padding: 0 45px 20px 50px;
    .postInfo-container {
      position: relative;
      @include clearfix;
      margin-bottom: 10px;
      .postInfo-container-item {
        float: left;
      }
    }
  }
  .word-counter {
    width: 40px;
    position: absolute;
    right: -10px;
    top: 0px;
  }
}
</style>
<style>
.createPost-container label.el-form-item__label {
  text-align: left;
}
</style>

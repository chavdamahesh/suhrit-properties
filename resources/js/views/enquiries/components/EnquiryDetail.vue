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

      <div class="createPost-main-container" style="margin-top: 40px;">
        <el-row>
          <el-col :span="24">
            <el-row>
              <el-col :span="12">
                <el-form-item style="margin-bottom: 20px; padding:7px" label="Name" prop="name">
                  <el-input v-model="postForm.name" :maxlength="100" name="name" required />
                </el-form-item>
              </el-col>
            </el-row>
            <el-row>
              <el-col :span="12">
                <el-form-item label="Email" style="margin-bottom: 20px; padding:7px">
                  <el-input v-model="postForm.email" />
                </el-form-item>
              </el-col>
            </el-row>
            <el-row>
              <el-col :span="12">
                <el-form-item style="margin-bottom: 20px; padding:7px" prop="subject" label="Subject">
                  <el-input v-model="postForm.subject" :maxlength="100" name="subject" required />
                </el-form-item>
              </el-col>
            </el-row>
            <el-row>
              <el-col :span="12">
                <el-form-item label="Content" style="margin-bottom: 20px; padding:7px">
                  <el-input v-model="postForm.content" type="textarea" />
                </el-form-item>
              </el-col>
            </el-row>
          </el-col>
        </el-row>
      </div>
    </el-form>
  </div>
</template>

<script>
import Sticky from '@/components/Sticky'; // Sticky header
import { fetchEnquiry, createEnquiry, updateEnquiry } from '@/api/enquiry';

const defaultForm = {
  status: 'draft',
  name: '',
  email: '',
  subject: '',
  content: '',
};

export default {
  name: 'EnquiryDetail',
  components: {
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
      rules: {
        // name: [{ validator: validateRequire }],
      },
      tempRoute: {},
    };
  },
  computed: {
    contentShortLength() {
      return this.postForm.content_short.length;
    },
    lang() {
      return this.$store.getters.language;
    },
  },
  watch: {
    '$route': 'reInitialize',
  },
  created() {
    if (this.isEdit) {
      const id = this.$route.params && this.$route.params.id;
      this.fetchData(id);
    } else {
      this.postForm = Object.assign({}, defaultForm);
    }

    // Why need to make a copy of this.$route here?
    // Because if you enter this page and quickly switch tag, may be in the execution of the setTagsViewname function, this.$route is no longer pointing to the current page
    this.tempRoute = Object.assign({}, this.$route);
  },
  methods: {
    fetchData(id) {
      fetchEnquiry(id)
        .then(response => {
          this.postForm = response.data[0];
          this.postForm.id;

          // this.postForm.content_short += `   Article Id:${this.postForm.id}`;
          // Set tagsview name
          this.setTagsViewName();
        })
        .catch(err => {
          console.log(err);
        });
    },
    setTagsViewName() {
      // const name = 'Edit Article'; // Should move to i18n
      // const route = Object.assign({}, this.tempRoute, {
      // name: `${name}-${this.postForm.id}`,
      // });
      // this.$store.dispatch('updateVisitedView', route);
    },
    submitForm() {
      this.loading = true;
      if (typeof this.postForm.id !== 'undefined'){
        updateEnquiry(this.postForm.id, this.postForm).then(response => {
          this.$message({
            message: 'Enquiry has been updated successfully',
            type: 'success',
            duration: 5 * 1000,
          });
          this.loading = false;
          this.dialogPermissionLoading = false;
          this.dialogPermissionVisible = false;
        });
      } else {
        console.log('Created');
        createEnquiry(this.postForm).then(response => {
          this.$message({
            message: 'Enquiry has been created successfully',
            type: 'success',
            duration: 5 * 1000,
          });
          this.loading = false;
          this.dialogPermissionLoading = false;
          this.dialogPermissionVisible = false;
          this.$router.push({ path: '/administrator/enquiries' }, onAbort => {});
        });
      }
    },
  },
};
</script>

<style rel="stylesheet/scss" lang="scss" scoped>
@import "~@/styles/mixin.scss";
.createPost-container label.el-form-item__label {
  width: 100% !important;
}
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

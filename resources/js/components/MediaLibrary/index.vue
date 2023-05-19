<template>
  <div class="upload-container">
    <el-upload
      :data="additionalData"
      :multiple="true"
      :show-file-list="false"
      :on-success="handleImageSuccess"
      :on-remove="handleRemove"
      class="image-uploader"
      drag
      :action="uploadUrl"
    >
      <div class="el-upload__text">
        Drag files here or <em>Click to upload</em>
      </div>
    </el-upload>
    <draggable
      :list="fileList"
      :options="options"
      class="board-column-content"
    >
      <div v-for="(element, index) in fileList" :key="element.file_name" class="board-item" @mouseover="upHere = element.credit" @mouseleave="upHere = null">
        <div class="img">
          <img :src="element.path">
        </div>
        <el-input v-model="fileList[index].alttext" type="text" placeholder="Alt text" />
        <el-input v-model="fileList[index].credit" type="text" placeholder="Credit" />
        <el-button v-show="upHere === element.credit" type="" style="position:absolute; top:0px; right:0px; color:red" size="small" icon="el-icon-delete" @click="handleRemove(fileList[index].id)" />
      </div>
    </draggable>

  </div>
</template>

<script>
import { deleteImage, updateImageOrder } from '@/api/image';
import draggable from 'vuedraggable';

export default {
  name: 'SingleImageUpload3',
  components: {
    draggable,
  },
  props: {
    fileList: {
      type: Array,
      default: () => [],
    },
    uploadUrl: {
      type: String,
      default: '',
    },
    model: {
      type: String,
      default: '',
    },
    modelId: {
      type: Number,
      default: 0,
    },
  },
  data() {
    return {
      options: {
        group: 'mission',
      },
      tempUrl: '',
      additionalData: { id: 40 },
      listLoading: true,
      upHere: null,
    };
  },
  created() {},
  methods: {
    handleChange(files) {
      var imgList = files.relatedContext.list;
      console.log(imgList);
      setTimeout(() => {
        updateImageOrder(imgList);
      }, 500);
    },
    handleRemove(id) {
      for (const i in this.fileList) {
        if (this.fileList[i].id === id) {
          delete this.fileList[i];
        }
      }

      var compactArray = this.fileList.filter(function(item) {
        return item !== undefined;
      });

      this.fileList = compactArray;
      deleteImage(this.model, this.modelId, id);
    },
    emitInput(val) {
      var mid = '000-' + this.fileList.length;
      this.fileList.push({ id: mid, name: val.data.name, path: val.data.file });
      this.$emit('input', this.fileList);
    },
    handleImageSuccess(file) {
      this.emitInput(file);
    },
  },
};
</script>

<style>
.board-item .el-table thead {
  display: none!important;
}
.el-table__empty-block {
  display: none!important;
}
.el-upload-dragger {
  height: unset;
}
.upload-container .el-upload .el-upload-dragger {
  height: unset;
}
</style>
<style rel="stylesheet/scss" lang="scss" scoped>
@import "~@/styles/mixin.scss";
.upload-container {
  position: relative;
  @include clearfix;
  .image-uploader {
    margin: 10px;
  }
}
.board-item ul {
  list-style: none;
  width: 100%;
  clear: both;
}
.board-item {
  position: relative;
  float: left;
  border: 1px solid #f3f3f3;
  width: 150px;
  margin: 5px;
}

.board-item .img {
  height: 150px;
}

.board-item img {
  height: 100%;
  object-fit: cover;
  width: 100%;
}
.sortable-ghost{
  background: #f3f3f3;
}
</style>

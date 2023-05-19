<template>
  <div class="upload-container">
    <el-upload
      :data="additionalData"
      :file-list="fileList"
      :multiple="true"
      :show-file-list="true"
      :on-success="handleImageSuccess"
      :on-remove="handleRemove"
      class="image-uploader"
      drag
      action="/api/property/upload"
    >
      <i class="el-icon-upload" />
      <div class="el-upload__text">
        Drag files here or <em>Click to upload</em>
      </div>
    </el-upload>

    <Kanban :key="1" :list="fileList" :options="options" :move="handleChange" class="kanban todo" header-text="Images" />
  </div>
</template>

<script>
import { createImage, fetchImages, deleteImage, updateImageOrder } from '@/api/image';
import Kanban from '@/components/HSMSortable';

export default {
  name: 'SingleImageUpload3',
  components: {
    Kanban,
  },
  props: {
    propertyId: {
      type: Number,
      default: 0,
    },
    value: {
      type: String,
      default: '',
    },
  },
  data() {
    return {
      options: {
        group: 'mission',
      },
      tempUrl: '',
      additionalData: { id: 40 },
      fileList: [],
    };
  },
  computed: {
    imageUrl() {
      return this.value;
    },
  },
  created() {
    setTimeout(() => {
      this.getData();
    }, 5000);
  },
  methods: {
    handleChange(files) {
      var imgList = files.relatedContext.list;
      console.log(imgList);
      setTimeout(() => {
        updateImageOrder(imgList);
      }, 500);
    },
    handleRemove(file, fileList) {
      deleteImage(file);
    },
    emitInput(val) {
      var fields = { id_properties: this.propertyId,
        image: val,
        thumb_image: val };
      createImage(fields);
      this.$emit('input', val);
    },
    handleImageSuccess(file) {
      this.emitInput(file);
    },
    async getData() {
      var params = { id_properties: this.propertyId };
      fetchImages(params).then(response => {
        this.fileList = response.data;
      });
    },
  },
};
</script>

<style rel="stylesheet/scss" lang="scss" scoped>
@import "~@/styles/mixin.scss";
.upload-container {
  width: 100%;
  position: relative;
  @include clearfix;
  .image-uploader {
    width: 70%;
    margin: 50px 30%;
  }
}
</style>

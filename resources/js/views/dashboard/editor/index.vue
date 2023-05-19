<template>
  <div class="dashboard-editor-container">
    <el-row style="background:#fff; margin-bottom:32px;">
      <enquiry-list />
    </el-row>
  </div>
</template>

<script>
import { mapGetters } from 'vuex';
import EnquiryList from '@/components/EnquiryList';

export default {
  name: 'DashboardEditor',
  components: {
    EnquiryList,
  },
  data() {
    return {
      emptyGif: 'https://media.giphy.com/media/Ai8iZqHx2i0fK/giphy.gif',
    };
  },
  computed: {
    ...mapGetters([
      'name',
      'avatar',
      'roles',
    ]),
  },
};
</script>

<style rel="stylesheet/scss" lang="scss" scoped>
.dashboard-editor-container {
  padding: 32px;
  background-color: rgb(240, 242, 245);
  .chart-wrapper {
    background: #fff;
    padding: 16px 16px 0;
    margin-bottom: 32px;
  }
}
</style>

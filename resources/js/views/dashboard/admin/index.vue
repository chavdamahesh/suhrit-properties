<template>
  <div class="dashboard-editor-container">
    <el-row style="background:#FFF; margin-bottom:32px;">
      <enquiry-list />
    </el-row>
  </div>
</template>

<script>
// import GithubCorner from '@/components/GithubCorner';
// import PanelGroup from './components/PanelGroup';
import EnquiryList from '@/components/EnquiryList';

export default {
  name: 'DashboardAdmin',
  components: {
    EnquiryList,
  },
  data() {
    return {

    };
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

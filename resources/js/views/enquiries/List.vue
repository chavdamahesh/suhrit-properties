<template>
  <div class="app-container">
    <router-link :to="''" class="link-type" />
    <el-table v-loading="listLoading" :data="list" border fit highlight-current-row style="width: 100%">
      <el-table-column align="center" label="IDXX" width="80">
        <template slot-scope="{row}">
          <router-link :to="'/edit'" class="link-type">
            <span>{{ row.id }}</span>
          </router-link>
        </template>
      </el-table-column>
      <el-table-column min-width="300px" label="Name">
        <template slot-scope="{row}">
          <router-link :to="'/edit'" class="link-type">
            <span>{{ row.name }}</span>
          </router-link>
        </template>
      </el-table-column>
      <el-table-column min-width="300px" label="Email">
        <template slot-scope="{row}">
          <router-link :to="'/edit'" class="link-type">
            <span>{{ row.email }}</span>
          </router-link>
        </template>
      </el-table-column>
      <el-table-column min-width="300px" label="Subject">
        <template slot-scope="{row}">
          <router-link :to="'/edit'" class="link-type">
            <span>{{ row.subject }}</span>
          </router-link>
        </template>
      </el-table-column>
      <el-table-column min-width="300px" label="Content">
        <template slot-scope="{row}">
          <router-link :to="'/edit'" class="link-type">
            <span>{{ row.content }}</span>
          </router-link>
        </template>
      </el-table-column>
    </el-table>

    <pagination v-show="total>0" :total="total" :page.sync="listQuery.page" :limit.sync="listQuery.limit" @pagination="getList" />
  </div>
</template>

<script>
import Pagination from '@/components/Pagination'; // Secondary package based on el-pagination
import Resource from '@/api/resource';
const EnquiryResource = new Resource('enquiries');

export default {
  name: 'EnquiryList',
  components: { Pagination },
  filters: {
    statusFilter(status) {
      const statusMap = {
        published: 'success',
        draft: 'info',
        deleted: 'danger',
      };
      return statusMap[status];
    },
  },
  data() {
    return {
      list: null,
      total: 0,
      listLoading: true,
      listQuery: {
        page: 1,
        limit: 20,
      },
    };
  },
  created() {
    this.getList();
  },
  methods: {
    async getList() {
      this.listLoading = true;
      const test = await EnquiryResource.list(this.listQuery);
      this.list = test.data.data;
      this.total = test.data.total;
      this.listLoading = false;
    },
  },
};
</script>

<style scoped>
.edit-input {
  padding-right: 100px;
}
.cancel-btn {
  position: absolute;
  right: 15px;
  top: 10px;
}
</style>

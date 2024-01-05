<template>
  <div class="app-container">
    <div class="filter-container">
      <el-input v-model="listQuery.property_name" :placeholder="$t('table.property_name')" style="width: 200px;" class="filter-item" @keyup.enter.native="handleFilter" />
      <el-button v-waves class="filter-item" type="primary" icon="el-icon-search" @click="handleFilter">
        {{ $t('table.search') }}
      </el-button>
    </div>
    <router-link :to="'/property/create'" class="link-type">
      <el-button type="primary" size="small" icon="el-icon-plus" style="float: right; margin-bottom: 10px;">Add</el-button>
    </router-link>
    <el-table v-loading="listLoading" :data="list" border fit highlight-current-row style="width: 100%">
      <el-table-column align="center" label="" width="80">
        <template slot-scope="{row}">
          <img v-if="row.images[0] && row.images[0].thumb_image !== ''" :src="'https://suhrit-properties.com/storage/properties/'+row.images[0].thumb_image" style="width:100%; height:100%; object-fit:cover">
        </template>
      </el-table-column>

      <el-table-column min-width="300px" label="Title">
        <template slot-scope="{row}">
          <router-link :to="'/property/edit/'+row.id" class="link-type">
            <span v-if="row.translations[0] && row.translations[0].property_name">{{ row.translations[0].property_name }}</span>
            <span v-else>[Edit]</span>
          </router-link>
        </template>
      </el-table-column>

      <el-table-column min-width="300px" label="Is Featured" sort-by="featured" sortable>
        <template slot-scope="{row}">
          <el-switch
            v-model="row.featured"
            active-text="Featured"
            inactive-text=""
            :active-value="1"
            :inactive-value="0"
            @change="handleSwitch(row)"
          />
          <span />
        </template>
      </el-table-column>

      <el-table-column min-width="300px" label="Is Published" sort-by="active" sortable>
        <template slot-scope="{row}">
          <el-switch
            v-model="row.active"
            active-text="Published"
            inactive-text=""
            :active-value="1"
            :inactive-value="0"
            active-color="#13ce66"
            @change="handleSwitch(row)"
          />
        </template>
      </el-table-column>
      <el-table-column min-width="300px" label="Sold" sort-by="sold" sortable>
        <template slot-scope="{row}">
          <el-switch
            v-model="row.sold"
            active-text="Sold"
            inactive-text=""
            :active-value="1"
            :inactive-value="0"
            active-color="#ff4949"
            @change="handleSwitch(row)"
          />
        </template>
      </el-table-column>

      <el-table-column align="center" label="Actions" width="120">
        <template slot-scope="scope">
          <!-- <el-switch v-model="scope.row.active" :active-value="1" :inactive-value="0" :name="scope.row.name+'_'+scope.row.id" value="1" /> -->
          <router-link :to="'/property/edit/'+scope.row.id">
            <el-button type="secondary" size="small" icon="el-icon-edit" />
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
import waves from '@/directive/waves';
import { updatePropertyStatus } from '@/api/property';
const propertyResource = new Resource('properties');

export default {
  name: 'PropertiesList',
  components: { Pagination },
  directives: { waves },
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
      properties: [],
      search: '',
      list: null,
      total: 0,
      listLoading: true,
      PropertiesList: [
        { property_name: 'N227' },
        { property_name: 'N201' },
        { property_name: 'N205' },
        { property_name: 'Noble' },
        { property_name: 'Arlon' },
        { property_name: 'Archimede' },
      ],
      listQuery: {
        page: 1,
        limit: 20,
        property_name: '',
      },
      value2: true,
    };
  },
  computed: {
    filteredProperties(){
      return this.PropertiesList.filter(name => {
        return name.toLowerCase().includes(this.search.toLowerCase());
      });
    },
  },
  created() {
    this.getList();
  },
  methods: {
    async getList() {
      const { limit, page } = this.listQuery;
      this.listLoading = true;
      const publications = await propertyResource.list(this.listQuery);
      this.list = publications.data;
      this.total = publications.meta.total;
      this.list.forEach((element, index) => {
        element['index'] = (page - 1) * limit + index + 1;
      });
      this.listLoading = false;
    },
    handleFilter() {
      this.listQuery.page = 1;
      this.getList();
    },
    handleSwitch(row) {
      updatePropertyStatus(row.id, row);
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

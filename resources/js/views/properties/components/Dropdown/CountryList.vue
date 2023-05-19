<template>
  <el-checkbox-group v-model="countries" style="padding: 5px 15px;">
    <el-checkbox v-for="item in countryOptions" :key="item.id" :label="item.id" style="display:block">
      {{ item.name }}
    </el-checkbox>
  </el-checkbox-group>
</template>

<script>

import Resource from '@/api/resource';
const countriesResource = new Resource('country-list');

export default {
  props: {
    value: {
      required: true,
      default: () => [],
      type: Array,
    },
  },
  data() {
    return {
      countryOptions: [],
    };
  },
  computed: {
    countries: {
      get() {
        return this.value;
      },
      set(val) {
        this.$emit('input', val);
      },
    },
  },
  created() {
    this.getCountries();
  },
  methods: {
    async getCountries() {
      const data = await countriesResource.list([]);
      console.log(data);
      this.countryOptions = data;
    },
  },
};
</script>

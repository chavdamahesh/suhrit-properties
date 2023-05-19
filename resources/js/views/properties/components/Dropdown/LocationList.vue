<template>
  <el-form-item label="Location">
    <el-select v-model="selected" value-key="selected" placeholder="Select" @change="changeLocation($event)">
      <el-option v-for="item in locationOptions" :key="item.id" :label="item.name" :value="item.id" :selected-label="item.name">{{ item.name }}</el-option>
    </el-select>
  </el-form-item>
</template>

<script>

import Resource from '@/api/resource';
const locationsResource = new Resource('location-list');

export default {
  props: {
    value: {
      required: true,
      default: () => String,
      type: String,
    },
  },
  data() {
    return {
      selected: null,
      locationOptions: [],
    };
  },
  computed: {
    locations: {
      get() {
        return this.selected;
      },
      set(val) {
        console.log(val);
        this.$emit('input', val);
      },
    },
  },
  created() {
    setTimeout(() => {
      this.getLocations();
    }, 1000);
  },
  methods: {
    async getLocations() {
      const data = await locationsResource.list([]);
      this.locationOptions = data;
      if (data[this.value] !== undefined) {
        this.selected = data[this.value].id;
      }
    },
    changeLocation: function(event){
      this.$emit('catchLocation', event);
    },
  },
};
</script>

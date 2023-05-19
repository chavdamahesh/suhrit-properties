<template>
  <section class="enquiryapp">
    <div class="d-flex">
      <div class="" style="min-width:300px">
        <!-- main section -->
        <section v-show="enquirys.length" class="main">
          <input id="toggle-all" :checked="allChecked" class="toggle-all" type="checkbox" @change="toggleAll({ done: !allChecked })">
          <ul ref="list" class="enquiry-list">
            <enquiry
              v-for="(enq, index) in filteredEnquirys"
              :key="index"
              :enquiry="enq"
              @toggleEnquiry="toggleEnquiry"
              @editEnquiry="editEnquiry"
              @deleteEnquiry="deleteEnquiry"
            />
          </ul>
        </section>
        <!-- footer -->
        <footer v-show="enquirys.length" class="footer">
          <span class="todo-count">
            <strong>{{ remaining }}</strong>
            unread
          </span>
          <ul class="filters">
            <li v-for="(val, key) in filters" :key="key">
              <a :class="{ selected: visibility === key }" @click.prevent="visibility = key">{{ key | capitalize }}</a>
            </li>
          </ul>
          <!-- <button class="clear-completed" v-show="enquirys.length > remaining" @click="clearCompleted">
            Clear completed
          </button> -->
        </footer>
      </div>
      <div class="p-4">
        <section>
          <div v-show="enquiry">
            <i><small>Received: {{ enquiry.created_at | formatDate }}</small></i>
            <hr>
            <label>From:</label> {{ enquiry.first_name }} {{ enquiry.last_name }}<br>
            <label>Email:</label> {{ enquiry.email }}<br>
            <label>Phone:</label> {{ enquiry.phone }}<br>
            <label>Subject:</label> {{ enquiry.subject }}<br>
            <p v-html="enquiry.content" />
          </div>
          <div v-show="enquiry && showProperty">
            <hr>
            <label>Property:</label> {{ enquiry.property.name }}
          </div>
        </section>
      </div>
    </div>
  </section>
</template>

<script>
import Vue from 'vue';
import Enquiry from './Enquiry.vue';
import { getAllEnquiries } from '@/api/enquiry';
import { updateEnquiry } from '@/api/enquiry';
import moment from 'moment';

Vue.filter('formatDate', function(value) {
  if (value) {
    return moment(String(value)).format('DD MMM YYYY');
  }
});

const STORAGE_KEY = 'enquirys';
const filters = {
  'all': enquirys => enquirys,
  'Contact us': enquirys => enquirys.filter(enquiry => enquiry.type === 'contact'),
  'Package enquiries': enquirys => enquirys.filter(enquiry => enquiry.type === 'package'),
};
const defaultList = [];
export default {
  components: { Enquiry },
  filters: {
    pluralize: (n, w) => (n === 1 ? w : w + 's'),
    capitalize: (s) => s.charAt(0).toUpperCase() + s.slice(1),
  },
  data() {
    return {
      visibility: 'all',
      filters,
      // enquirys: JSON.parse(window.localStorage.getItem(STORAGE_KEY)) || defaultList
      enquirys: defaultList,
      showProperty: false,
      showContact: false,
      enquiry: Object.assign({}),
    };
  },
  computed: {
    allChecked() {
      return this.enquirys.every((enquiry) => enquiry.done);
    },
    filteredEnquirys() {
      return filters[this.visibility](this.enquirys);
    },
    remaining() {
      return this.enquirys.filter(enquiry => !enquiry.status).length;
    },
  },
  created() {
    this.getEnquiries();
  },
  methods: {
    setLocalStorage() {
      window.localStorage.setItem(STORAGE_KEY, JSON.stringify(this.enquirys));
    },
    async getEnquiries() {
      const enquiries = await getAllEnquiries();
      this.enquirys = enquiries.data;

      if (this.enquirys.length) {
        this.enquiry = this.enquirys[0];
        if (this.enquiry.type === 'property') {
          this.showContact = false;
          this.showProperty = true;
        } else if (this.enquiry.type === 'contact') {
          this.showProperty = false;
          this.showContact = true;
        }
      }
    },
    addEnquiry(e) {
      const text = e.target.value;
      if (text.trim()) {
        this.enquirys.push({
          text,
          done: false,
        });
        this.setLocalStorage();
      }
      e.target.value = '';
    },
    toggleEnquiry(val) {
      if (val.status === 1) {
        return false;
      }
      val.status = 1;

      updateEnquiry(val.id, val).then((response) => {
        this.$message({
          message: 'Marked as read',
          type: 'success',
          duration: 5 * 1000,
        });
        this.loading = false;
        this.dialogPermissionLoading = false;
        this.dialogPermissionVisible = false;
      });

      this.setLocalStorage();
    },
    deleteEnquiry(enquiry) {
      this.enquirys.splice(this.enquirys.indexOf(enquiry), 1);
      this.setLocalStorage();
    },
    editEnquiry({ enquiry, value }) {
      this.toggleEnquiry(enquiry);
      this.enquiry = enquiry;
      if (enquiry.type === 'property') {
        this.showContact = false;
        this.showProperty = true;
      } else if (enquiry.type === 'contact') {
        this.showProperty = false;
        this.showContact = true;
      }
      this.setLocalStorage();
    },
    clearCompleted() {
      this.enquirys = this.enquirys.filter((enquiry) => !enquiry.done);
      this.setLocalStorage();
    },
    toggleAll({ done }) {
      this.enquirys.forEach((enquiry) => {
        enquiry.done = done;
        this.setLocalStorage();
      });
    },
  },
};
</script>

<style lang="scss">
@import './index.scss';
</style>
<style>
.enquiryapp {
  float: left;
  width: 100%;
}
.eType {
  text-transform: uppercase;
  background: burlywood;
  display: inline-block;
  border-radius: 30px;
  padding: 7px 10px 10px 11px!important;
  height: 28px;
  margin-top: 20px;
}
.read-1 {
  font-weight: normal!important;
}
.read-0 {
  font-weight: bold!important;
}
</style>

<template>
  <li :class="{ completed: enquiry.done, editing: editing }" class="enquiry" @click="editEnquiry( enquiry )">
    <div :class="'view '+ enquiry.type">
      <div style="padding-left: 13px;">
        <div :class="'read-' + enquiry.status" v-text="enquiry.first_name + ' ' + enquiry.last_name" />
        <small>{{ enquiry.created_at | formatDate }}</small>
      </div>
      <button class="destroy" @click="deleteEnquiry( enquiry )" />
    </div>
    <input
      v-show="editing"
      v-focus="editing"
      :value="enquiry.first_name + ' ' + enquiry.last_name"
      class="edit"
      @keyup.enter="doneEdit"
      @keyup.esc="cancelEdit"
      @blur="doneEdit"
    >
  </li>
</template>

<script>
import Vue from 'vue';
import moment from 'moment';

Vue.filter('formatDate', function(value) {
  if (value) {
    return moment(String(value)).format('d/m/Y');
  }
});

export default {
  name: 'Enquiry',
  directives: {
    focus(el, { value }, { context }) {
      if (value) {
        context.$nextTick(() => {
          el.focus();
        });
      }
    },
  },
  props: {
    enquiry: {
      type: Object,
      default: function() {
        return {};
      },
    },
  },
  data() {
    return {
      editing: false,
    };
  },
  methods: {
    deleteEnquiry(enquiry) {
      this.$emit('deleteEnquiry', enquiry);
    },
    editEnquiry(enquiry) {
      this.$emit('editEnquiry', { enquiry });
    },
    toggleEnquiry(enquiry) {
      this.$emit('toggleEnquiry', enquiry);
    },
    doneEdit(e) {
      const value = e.target.value.trim();
      const { enquiry } = this;
      if (!value) {
        this.deleteEnquiry({
          enquiry,
        });
      } else if (this.editing) {
        this.editEnquiry({
          enquiry,
          value,
        });
        this.editing = false;
      }
    },
    cancelEdit(e) {
      e.target.value = this.enquiry.text;
      this.editing = false;
    },
  },
};
</script>
<style>
.enquiry {
  padding: 5px;
}
.view{
  display:flex;
  align-items: center;
  padding: 7px;
  cursor: pointer;
}
.view.property{
  border-left: 4px solid #36a3f7;
}
.view.contact{
  border-left: 4px solid #40c9c6;
}
.et{
  border-radius: 50%;
    width: 10px;
    height: 10px;
    padding: 5px;
    /* content: ""; */
    display: inline-block;
}

</style>

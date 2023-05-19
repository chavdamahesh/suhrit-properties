<template>
  <div id="app">
    <ModalIdle v-if="isIdle" @resetIdle="resetUserIdle" />
    <router-view />
  </div>
</template>

<script>
import ModalIdle from '@/components/Idle/Modalidle';

export default {
  name: 'App',
  components: {
    ModalIdle,
  },
  data() {
    return {
      time: 60 * 60 * 1000,
      userIdle: false,
    };
  },
  computed: {
    isIdle() {
      return this.checkIdle();
    },
  },
  methods: {
    checkIdle() {
      if (this.$store.state.idleVue.isIdle) {
        this.userIdle = true;
      }

      if (this.userIdle) {
        return this.userIdle;
      }

      return this.$store.state.idleVue.isIdle;
    },
    resetUserIdle() {
      this.userIdle = false;
      console.log('here logout');
      console.log(this.userIdle);
    },
  },
};
</script>

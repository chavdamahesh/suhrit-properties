<template>
  <div class="overlay">
    <div class="modal">
      <div>
        <div class="p-3 text-center">
          <h1 class="h3 mt-0">Been busy? <br>To be safe, we've logged you out</h1>
          <el-button type="primary" @click="logout">Login</el-button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
// import { isLogged } from '@/utils/auth';

export default {
  name: 'Modalidle',
  data() {
    return {
      time: 60 * 60 * 1000,
      seconds: 10,
    };
  },
  created() {
    // const timerId =
    setInterval(() => {
      this.time -= 1000;
      this.seconds = this.time / 1000;
      if (!this.$store.state.idleVue.isIdle) {
        // clearInterval(timerId);
      }
      if (this.time < 1) {
        // clearInterval(timerId);
        // const isUserLogged = isLogged();
      }
    }, 1000);
  },
  methods: {
    async logout() {
      // await this.$store.dispatch('user/logout');
      this.$emit('resetIdle');
      this.$router.push({ path: '/login' }, onAbort => {});
    },
  },
};
</script>

<style>
  .overlay {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 1005;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .overlay .modal {
    box-shadow: 0px 0px 30px rgba(153, 155, 168, 0.12);
    border-radius: 4px;
    padding: 50px;
    padding-left: 35%;
    background: white;
    opacity: 1;
    position: relative!important;
    display: flex!important;
    text-align: center;
  }
  h1 {
      font-size: 150%;
      margin-top: 0px;
  }
</style>

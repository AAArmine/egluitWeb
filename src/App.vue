<template>
  <div id="app">
    <AppHeader />
    <router-view></router-view>
  </div>
</template>

<script>
import AppHeader from './components/AppHeader.vue';
export default {
  name: "App",
  components: {
     AppHeader
  },
};
</script>

<style lang="scss">
@import "@/assets/_variables.scss";
body {
  padding: 0;
  margin: 0;
  font-family: "Quicksand", sans-serif;
  font-weight: 400;
  .wrapper-80 {
    width: 80%;
    margin: auto;
  }
  .wrapper-70 {
    width: 70%;
    margin: auto;
  }
  .wrapper-60 {
    width: 60%;
    margin: auto;
  }
  .bold {
    font-weight: 600;
  }
}
</style>

<template>
  <div class="home-page">
    <h1 class="bold-text">Home Page</h1>
    <p class="light-text">Welcome to the Home Page!</p>
  </div>
</template>

<script>
// import { computed } from "vue";
// import { useRoute } from "vue-router";
export default {
  name: "HomePage",
  components: {
  },
  setup() {
    // const route = useRoute();
    // const additionalClass = computed(() =>
    //   route.path === "/" && "home-page" 
    // );
    // return { additionalClass };
  },
};
</script>

<style scoped lang="scss">
.home-page {
  background-color: $bg-color;
  .bold-text {
    font-family: "Quicksand", sans-serif;
    font-weight: bold;
    color: $primary-color;
  }

  .light-text {
    font-family: "Quicksand", sans-serif;
    font-weight: 400;
    color: $text-color;
    font-size: 18px;
  }
  li {
    font-size: 30px !important;
  }
}
</style>

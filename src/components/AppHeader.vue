<template>
  <header class="header">
    <div class="contactContainer">
      <div class="wrapper-70"><span class="bold">Telefon:</span>  23 34 28 99 Mail: stefan@egluit.dk</div>
    </div>
    <div class="wrapper-70"><NavBar :additionalClass="additionalClass" /></div>
  </header>
</template>

<script>
import { computed } from 'vue';
import { useRoute } from 'vue-router';
import NavBar from './NavBar.vue';

export default {
  name: 'AppHeader',
  components: {
    NavBar
  },
  setup() {
    const route = useRoute();
    const additionalClass = computed(() => (route.path === '/' ? 'home-page' : 'other-page'));
    return { additionalClass };
  }
};
</script>

<style lang="scss">
.header {
  .contactContainer {
    padding: 20px 0;
    background-color: $bg-color-dark;
    color:white;
    font-size: 19px;
     font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }
}
</style>

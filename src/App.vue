<!-- src/App.vue -->
<template>
  <div id="app">
    <AppHeader v-if="!isAdminPanel" />
    <transition
      name="fade"
      @before-enter="beforeEnter"
      @enter="enter"
      @leave="leave"
    >
      <router-view />
    </transition>
    <AppFooter v-if="!isAdminPanel" />
  </div>
</template>

<script>
import { computed } from "vue";
import { useRoute } from "vue-router";
import AppHeader from "./components/AppHeader.vue";
import AppFooter from "./components/AppFooter.vue";

export default {
  name: "App",
  components: {
    AppHeader,
    AppFooter,
  },
  setup() {
    const route = useRoute();
    const isAdminPanel = computed(() => route.path.startsWith("/admin"));

    return { isAdminPanel };
  },
  methods: {
    beforeEnter(el) {
      el.style.opacity = 0;
    },
    enter(el, done) {
      el.offsetWidth;
      el.style.transition = "opacity 0.5s";
      el.style.opacity = 1;
      done();
    },
    leave(el, done) {
      el.style.transition = "opacity 0.5s";
      el.style.opacity = 0;
      done();
    },
  },
};
</script>

<style lang="scss">
@import "@/assets/_variables.scss";
html {
  scroll-behavior: smooth;
}
body {
  padding: 0;
  margin: 0;
  font-family: "Quicksand", sans-serif;
  font-weight: 400;
  background: $bg-color;
  a {
    text-decoration: none;
    color: unset;
  }
  .wrapper-80 {
    width: 80%;
    margin: auto;
    @media (max-width: $tablet-width) {
      width: 90%;
    }
  }
  .wrapper-90 {
    width: 90%;
    margin: auto;
  }
  .wrapper-70 {
    width: 70%;
    margin: auto;
    @media (max-width: $tablet-width) {
      width: 90%;
    }
  }
  .wrapper-60 {
    width: 60%;
    margin: auto;
    @media (max-width: $tablet-width) {
      width: 90%;
    }
  }
  .bold {
    font-weight: 700;
  }
  .mr-10 {
    margin-right: 10px;
  }
  .ml-10 {
    margin-left: 10px;
  }
  .mr-20 {
    margin-right: 20px;
  }
  .ml-20 {
    margin-left: 20px;
  }
}
.title {
  font-size: 42px;
  font-weight: 400;
  @media (max-width: $tablet-width) {
    font-size: 35px;
  }
  @media (max-width: $tablet-width) {
    font-size: 28px;
  }
}
.text {
  font-size: 19px;
  line-height: 35px;
  @media (max-width: $tablet-width) {
    font-size: 18px;
    line-height: 30px;
  }
  @media (max-width: $mobile-width) {
    font-size: 17px;
    line-height: 27px;
  }
}
.fade-enter-active,
.fade-leave-active {
  transition: opacity 1.5s;
}
.fade-enter,
.fade-leave-to {
  opacity: 0;
}
@keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
</style>

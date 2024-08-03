<template>
  <footer class="footer">
    <router-link to="/" v-if="isHome" class="wrapper-70 footer-home">
      © {{ currentYear }} - Eglu IT ApS
    </router-link>
    <div v-else class="footer-cont">
      <router-link to="/">
        Eglu IT
        <span>©{{ currentYear }} by Eglu IT Ap/S</span>
      </router-link>
    </div>
  </footer>
</template>

<script>
import { ref, computed } from "vue";
import { useRoute } from "vue-router";

export default {
  name: "AppFooter",
  setup() {
    const route = useRoute();
    const currentYear = ref(new Date().getFullYear());
    const isHome = computed(() => route.path === "/");
    return {
      currentYear,
      isHome,
    };
  },
};
</script>

<style lang="scss">
@import "@/assets/_variables.scss";
.footer {
  padding: 12px 0;
  background-color: $bg-color-dark;
  color: white;
  .footer-cont {
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 26px;
    text-align: center;
    @media (max-width: $mobile-width) {
      font-size: 14px;
      font-weight: 500;
    }
    span {
      display: block;
      font-size: 13px;
      line-height: 22px;
      @media (max-width: $mobile-width) {
        font-size: 11px;
      }
    }
  }
}
.footer-home {
  display: block;
  letter-spacing: 3px;
  font-size: 16px;
  font-weight: 500;
  text-align: left;
  justify-content: left;
  @media (max-width: $mobile-width) {
    font-size: 11px;
  }
}
</style>

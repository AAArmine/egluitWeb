<template>
  <nav class="nav-bar">
    <div class="nav-container">
      <router-link to="/">
        <img
          src="@/assets/images/logo.png"
          alt="Logo"
          :class="['logo', { 'logo-home': route.path === '/' }]"
        />
      </router-link>
      <button class="hamburger" @click="toggleMenu">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </button>
      <ul :class="[animationClass, { 'is-active': isMenuActive }]">
        <li :class="{ active: isActive('/') }">
          <router-link to="/">Start</router-link>
        </li>
        <li :class="{ active: isActive('/about') }">
          <router-link to="/about">Om Os</router-link>
        </li>
        <li :class="{ active: isActive('/services') }">
          <router-link to="/services">Ydelser</router-link>
        </li>
        <li :class="{ active: isActive('/contact') }">
          <router-link to="/contact">Kontakt</router-link>
        </li>
      </ul>
    </div>
  </nav>
</template>

<script>
import { ref, computed, watch } from "vue";
import { useRoute } from "vue-router";

export default {
  name: "NavBar",
  setup() {
    const isMenuActive = ref(false);
    const route = useRoute();

    const animationClass = computed(() =>
      route.path === "/" ? "slide-in" : "fade-in"
    );

    const isActive = (path) => route.path === path;

    const toggleMenu = () => {
      console.log("Toggle Menu:", isMenuActive.value);
      isMenuActive.value = !isMenuActive.value;
    };

    watch(
      () => route.path,
      () => {
        isMenuActive.value = false;
      }
    );

    return {
      isMenuActive,
      animationClass,
      isActive,
      toggleMenu,
      route,
    };
  },
};
</script>

<style scoped lang="scss">
@import "@/assets/_variables.scss";

.nav-bar {
  background-color: $bg-color;
  .nav-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: relative;
  }

  .logo {
    width: 20rem;
    height: auto;
    @media (max-width: $small-screen) {
      width: 10rem;
    }
    @media (min-width: $tablet-width) {
      display: none;
    }
  }

  .logo-home {
    display: block !important;
  }

  .hamburger {
    display: none;
    cursor: pointer;
    background: none;
    border: none;
    padding: 0;
    z-index: 10;
    .bar {
      display: block;
      width: 25px;
      height: 3px;
      background-color: $text-color;
      margin: 5px auto;
      transition: all 0.3s ease;
    }
  }
  ul {
    list-style: none;
    display: flex;
    padding: 0;
    margin: 0;
    transition: max-height 0.3s ease;
    overflow: hidden;
    z-index: 1;
    position: relative;

    li {
      position: relative;
      font-size: 23px;
      font-family: "Times New Roman", Times, serif;
      padding: 10px 0;
      &:not(:last-child) {
        margin-right: 50px;
      }
      &:after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 3px;
        transition: background-color 0.3s;
      }
      &.active {
        a {
          color: $primary-color;
        }
        &:after {
          background-color: black;
        }
      }
      a {
        text-decoration: none;
        color: $text-color;
        padding: 10px;
        display: block;
        &:hover {
          color: $primary-color;
          li {
            &:after {
              background-color: white;
            }
          }
        }
      }
    }
  }

  @media (max-width: $tablet-width) {
    .logo {
      display: block;
      margin-left: 10%;
    }

    .hamburger {
      display: block;
      margin-left: 10%;
      margin-right: 10%;
    }

    ul {
      display: none;
      flex-direction: column;
      width: 100%;
      position: absolute;
      top: 50px;
      left: 0;
      background-color: $bg-color-dark;
      max-height: 0;
      overflow: hidden;
      &.is-active {
        display: flex;
        max-height: 500px;
        overflow: visible;
      }
      li {
        width: 100%;
        padding: 0;
        font-size: 18px;
        background-color: $bg-color;
        &.active {
          background-color: grey;
          &:after {
            background-color: $bg-color;
          }
        }
      }
    }
  }
}

.slide-in {
  animation: slideInFromRight 1s forwards;
}

.fade-in {
  animation: fadeIn 1s forwards;
}

@keyframes slideInFromRight {
  0% {
    transform: translateX(100%);
    opacity: 0;
  }
  100% {
    transform: translateX(0);
    opacity: 1;
  }
}
</style>

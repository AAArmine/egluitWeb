<template>
  <nav :class="['nav-bar', additionalClass]">
    <div class="nav-container">
      <img
        v-if="additionalClass === 'home-page'"
        src="@/assets/images/logo.png"
        alt="Logo"
        class="logo"
      />
      <ul :class="[animationClass]">
        <li :class="{ active: isActive('/') }">
          <router-link to="/">Start</router-link>
        </li>
        <li :class="{ active: isActive('/about') }">
          <router-link to="/about">Om Os</router-link>
        </li>
        <li :class="{ active: isActive('/benefits') }">
          <router-link to="/benefits">Ydelser</router-link>
        </li>
        <li :class="{ active: isActive('/contact') }">
          <router-link to="/contact">Kontakt</router-link>
        </li>
      </ul>
    </div>
  </nav>
</template>

<script>
export default {
  name: "NavBar",
  props: {
    additionalClass: {
      type: String,
      default: "",
    },
  },
  computed: {
    animationClass() {
      return this.additionalClass === "home-page" ? "slide-in" : "fade-in";
    },
  },
  methods: {
    isActive(route) {
      return this.$route.path === route;
    },
  },
};
</script>

<style scoped lang="scss">
@import "@/assets/_variables.scss";

.nav-bar {
  .nav-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .logo {
    width: 300px;
    height: auto;
  }

  ul {
    list-style: none;
    display: flex;
    padding: 0;
    margin: 0;

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
        background-color: white;
        transition: background-color 0.3s;
      }

      &.active {
        & a {
          color: $primary-color;
        }

        &:after {
          background-color: black;
        }
      }

      a {
        text-decoration: none;
        color: $text-color;
        padding: 10px 0;
        display: block;

        &:hover {
          color: $primary-color;
        }
      }
    }
  }
}

.nav-bar.home-page li {
  font-size: 27px;
  &:not(:last-child) {
    margin-right: 65px;
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

@keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
</style>

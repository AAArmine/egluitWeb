<template>
  <header class="header">
    <div class="contactContainer">
      <div class="wrapper-70">
        <a :href="`tel:${phoneNumber}`" class="contact-item">
          <span class="bold">Telefon:</span> {{ phoneNumber }}
        </a>
        <a :href="`mailto:${emailAddress}`" class="contact-item ml-20">
          <span class="bold">Mail:</span> {{ emailAddress }}
        </a>
      </div>
    </div>
    <div class="navbar-wrapper wrapper-70">
      <NavBar />
    </div>
  </header>
</template>

<script>
import NavBar from "./NavBar.vue";

export default {
  name: "AppHeader",
  components: {
    NavBar,
  },
  setup() {
    const phoneNumber = "23 34 28 99";
    const emailAddress = "stefan@egluit.dk";

    return { phoneNumber, emailAddress };
  },
};
</script>

<style lang="scss">
.header {
  .contactContainer {
    padding: 16px 0;
    background-color: $bg-color-dark;
    color: white;
    font-size: 19px;
    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    @media (max-width: $tablet-width) {
      padding: 12px 0;
      font-size: 16px;
    }

    .contact-item {
      color: white;
      text-decoration: none;
      @media (max-width: $mobile-width) {
        display: block;
        width: 100%;
        margin: auto;
        text-align: center;
      }
      &:hover {
        text-decoration: underline;
      }
    }
  }
  .navbar-wrapper {
    @media (max-width: $tablet-width) {
      width: 100%;
    }
  }
}
</style>

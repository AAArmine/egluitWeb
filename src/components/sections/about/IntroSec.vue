<template>
  <section class="description">
    <div class="wrapper-90">
      <div class="content-item">
        <h1 class="title">Hvem er vi?</h1>
        <p class="text">
          Med vores solide erfaring og ekspertise er vi et mindre IT-firma med
          en specialisering inden for opbygning af avancerede IT-systemer til
          lagerstyring. Vores klienter kommer oftest til os med udfordringer,
          der ikke kan løses af standard systemer, og vores erfaring har gjort
          os i stand til at tackle selv de mest komplekse opgaver.
        </p>
      </div>
      <div class="content-item image"></div>
    </div>
  </section>
</template>

<script>
export default {
  name: "IntroSec",
};
</script>

<style scoped lang="scss">
.description {
  padding-bottom: 50px;
  .wrapper-90 {
    display: flex;
    align-items: stretch; 
    gap: 2%; 
    @media (max-width: $mobile-width) {
      flex-wrap: wrap;
    }
    .content-item {
      width: 49%; 
      padding-bottom: 30px;
      background-color: $bg-light;

      @media (max-width: $mobile-width) {
        width: 100%;
      }
    }

    .image {
      flex: 1; 
      background-image: url("@/assets/images/aboutMain.png");
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center center;
      opacity: 0.7;
      height: auto;

      @media (max-width: $mobile-width) {
        width: 100%;
        height: 250px;
      }
    }
  }
}
</style>

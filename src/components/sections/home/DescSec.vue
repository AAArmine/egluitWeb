<template>
  <section class="description">
    <div class="wrapper-70">
      <div class="content-item">
        <h1 class="title">Hvad står vi for?</h1>
        <span class="bar"></span>
        <p>
          Lad os stå ved din side som din IT-partner og bidrage til din
          virksomheds succes. Med vores ekspertise og erfaring har vi tidligere
          leveret skræddersyede løsninger, som har hjulpet virksomheder. Vi
          ønsker at forsætte med at hjælpe virksomheder i drift, så lad os
          hjælpe din virksomhed.
        </p>
        <p>Se hvad vi kan tilbyde dig her</p>
        <CustomButton
          backgroundColor="transparent"
          textColor="black"
          hoverColor="black"
          hoverBorder="black"
          hoverTextColor="white"
          text="Ydelser"
          navigateTo="/services"
        />
      </div>
      <div class="content-item image"></div>
    </div>
  </section>
</template>

<script>
import CustomButton from "@/components/CustomButton.vue";

export default {
  name: "DescSec",
  components: {
    CustomButton,
  },
};
</script>

<style scoped lang="scss">
.description {
  padding-bottom: 50px;
  .bar {
    display: block;
    width: 50px;
    height: 3px;
    background-color: $text-color;
  }
  .wrapper-70 {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    .content-item {
      width: 49%;
      p {
        font-size: 19px;
        line-height: 35px;
      }
    }
    .image {
      background-image: url("@/assets/images/main2.png");
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center center;
      width: 49%;
      height: 400px;
    }
  }
}
</style>

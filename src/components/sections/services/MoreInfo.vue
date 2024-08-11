<template>
  <section class="moreInfo wrapper-90">
    <img
      src="@/assets/images/partnersColored.png"
      alt="partners"
      class="partners"
    />
    <div>
      Hvis du ønsker mere information er du mere end velkommen til at kontakte
      os:
    </div>
    <CustomButton
      backgroundColor="transparent"
      textColor="white"
      hoverColor="white"
      hoverBorder="black"
      hoverTextColor="black"
      text="Kontakt"
      navigateTo="/contact"
    />
  </section>
</template>

<script>
import CustomButton from "@/components/CustomButton.vue";
export default {
  name: "MoreInfo",
  components: {
    CustomButton,
  },
};
</script>

<style lang="scss" scoped>
.moreInfo {
  background: linear-gradient(to bottom, #ffffff, #414141);
  padding: 50px 0;
  text-align: center;
  margin-bottom: 20px;
  .partners {
    width: 100%;
    opacity: 0.7;
  }
  div {
    font-size: 25px;
    width: 50%;
    margin: auto;
    color: white;
    font-weight: 400;
    line-height: 50px;
    @media (max-width: $tablet-width) {
      width: 80%;
    }
    @media (max-width: $mobile-width) {
      line-height: 30px;
      font-size: 18px;
    }
  }
  button {
    margin: 30px 0;
    font-size: 13px;
  }
}
</style>

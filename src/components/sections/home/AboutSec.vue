<template>
  <section class="about">
    <div class="wrapper-90">
      <div class="about-content wrapper-80">
        <div class="content-item">
          <h1>IT-lØSNINGER TIL ERHVERV</h1>
          <p>
            Hos Eglu IT ønsker vi at hjælpe virksomheder uanset hvilket problem
            du står overfor. Kontakt os i dag og få et uforpligtende tilbud.
          </p>
          <CustomButton
            backgroundColor="transparent"
            textColor="black"
            hoverColor="#3141DE"
            hoverBorder="black"
            hoverTextColor="white"
            text="KONTAKT OS"
            navigateTo="/contact"
          />
        </div>
        <div class="content-item"></div>
      </div>
    </div>
  </section>
</template>

<script>
import CustomButton from "@/components/CustomButton.vue";
export default {
  name: "AboutSec",
  components: {
    CustomButton,
  },
};
</script>

<style scoped lang="scss">
.about {
  background-color: $bg-light;
  padding: 40px 0;
  .wrapper-90 {
    background-image: url("@/assets/images/main.png");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed;
    transition: background-position 0.5s ease;
  }
  .about-content {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    padding: 100px 0;
    .content-item {
      width: 50%;
      h1 {
        margin-left: 35px;
        font-size: 27px;
        display: inline-block;
        transform: scaleX(1.2);
      }
      p {
        margin-top: 0;
        font-size: 27px;
        font-weight: 100;
      }
    }
  }
}
</style>

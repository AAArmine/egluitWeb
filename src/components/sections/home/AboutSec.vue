<template>
  <section class="about">
    <div class="wrapper-90">
      <div class="about-content wrapper-80">
        <div class="content-item">
          <h1>IT-lØSNINGER TIL ERHVERV</h1>
          <p>
            Hos Eglu IT ønsker vi at hjælpe virksomheder uanset hvilket problem
            du står overfor.
          </p>
          <p>Kontakt os i dag og få et uforpligtende tilbud.</p>
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
        <div class="content-item">
          <div class="animation">
            <span>"Vi er her for at tage hånd </span>
            <span>om dine IT-Problemer"</span>
          </div>
        </div>
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
  mounted() {
    setTimeout(() => {
      const animationDiv = document.querySelector(".animation");
      if (animationDiv) {
        animationDiv.style.visibility = "visible";
      }
    }, 1700);
  },
};
</script>

<style scoped lang="scss">
@keyframes expandWidth {
  from {
    transform: scaleX(0);
  }
  to {
    transform: scaleX(1);
  }
}
.about {
  background-color: $bg-light;
  padding: 40px 0;
  position: relative;
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
    padding: 0 0 90px;
    @media (max-width: $tablet-width) {
      flex-wrap: wrap;
    }
    .content-item {
      width: 50%;
      opacity: 0;
      animation: fadeIn 2s forwards;
      animation-delay: 1s;
      @media (max-width: $tablet-width) {
        width: 100%;
      }
      h1 {
        margin-left: 35px;
        font-size: 27px;
        display: inline-block;
        transform: scaleX(1.2);
         @media (max-width: $mobile-width) {
         font-size: 22px;
      }
      }
      p {
        margin-top: 0;
        font-size: 29px;
        font-weight: 100;
        @media (max-width: $mobile-width) {
          font-size: 20px;
        }
      }
    }
  }
  .animation {
    position: absolute;
    background-color: rgba(0, 0, 0, 0.369);
    bottom: 70px;
    left: 40%;
    height: 100px;
    padding: 12px;
    overflow: hidden;
    visibility: hidden;
    transform-origin: left center;
    animation: expandWidth 1.5s forwards;
    animation-delay: 1.5s;
    @media (max-width: $tablet-width) {
      height: 80px;
    }
    @media (max-width: $mobile-width) {
      bottom: 40px;
      left: 10%;
      height: 45px;
    }
    span {
      position: relative;
      color: white;
      font-size: 40px;
      font-weight: bold;
      line-height: 55px;
      text-align: center;
      display: block;
      @media (max-width: $tablet-width) {
        font-size: 30px;
        line-height: 35px;
      }
      @media (max-width: $mobile-width) {
        font-size: 20px;
        line-height: 20px;
      }
    }
  }
}
</style>

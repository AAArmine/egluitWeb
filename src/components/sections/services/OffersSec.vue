<template>
  <section class="offers">
    <div class="wrapper-80">
      <h1 class="title">Hvad kan vi tilbyde dig?</h1>
      <div class="offers-cont">
        <div class="offers-item">
          <img src="@/assets/images/services1.png" alt="" class="offers-img" />
          <div class="offers-desc">
            <h2>OPSÆTNING AF NETVÆRK OG SERVERE</h2>
            <p class="text">
              Hos Eglu IT beskæftiger vi os primært med opsætning af avanceret
              lagerstyring der er baseret på en server. Det gælder både lokale
              servere som vi forhandler via Hewlett Packaer Enterprise, og så
              omhandler det servere der er lageret i skyen via Microsoft Azure
              og AWS.
            </p>
            <CustomButton
              backgroundColor="transparent"
              textColor="black"
              hoverColor="black"
              hoverBorder="black"
              hoverTextColor="white"
              text="LÆS MERE"
              navigateTo="/contact"
            />
          </div>
        </div>
        <div class="offers-item">
          <img src="@/assets/images/services2.png" alt="" class="offers-img" />
          <div class="offers-desc">
            <h2>IT SUPPORT OG YDELSER TIL ERHVERV</h2>
            <p class="text">
              Udover at vi er eksperter i at lave programmer og at opsætte
              servere til lagerstyring, forhandler vi også en del ydelser. Vi
              yder både fysisk og digitalt support.
              <br />
              <br />

              Derudover er vi forhandlere af flere hjælpemidler til
              virksomheder.
            </p>
            <CustomButton
              backgroundColor="transparent"
              textColor="black"
              hoverColor="black"
              hoverBorder="black"
              hoverTextColor="white"
              text="LÆS MERE"
              navigateTo="/contact"
            />
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import CustomButton from "@/components/CustomButton.vue";
export default {
  name: "OffersSec",
  components: {
    CustomButton,
  },
};
</script>

<style scoped lang="scss">
.offers {
  .offers-cont {
    display: flex;
    justify-content: space-between;
    align-items: stretch; /* Ensures that all items stretch to the same height */
    @media (max-width: $mobile-width) {
      flex-wrap: wrap;
    }
    .offers-item {
      width: 49%;
      display: flex;
      flex-direction: column; /* Align items vertically */
      @media (max-width: $mobile-width) {
        width: 100%;
        margin-top: 30px;
      }
      .offers-img {
        width: 100%;
        height: 320px;
        object-fit: cover;
      }
      .offers-desc {
        flex: 1; /* Allows the description area to stretch and fill available space */
        margin-top: 30px;
        background-color: $bg-light;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: space-between; /* Aligns the content and button at the same level */
        h2 {
          padding-top: 40px;
          font-weight: 400;
          font-size: 22px;
        }
        p {
          padding: 0 20px;
        }
        button {
          padding-bottom: 30px;
          margin: auto;
          font-size: 15px;
          margin-bottom: 30px;
        }
      }
    }
  }
}
</style>

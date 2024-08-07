<template>
  <div class="partners">
    <img src="@/assets/images/partners.png" alt="partners" />
  </div>
  <div class="contact">
    <div class="title"><h2>Få et uforpligtende tilbud</h2></div>
    <div class="container">
      <div class="btn-cont">
        <custom-button
          backgroundColor="transparent"
          textColor="white"
          hoverColor="#0909095c"
          text="Kontakt os"
          navigateTo="/contact"
          borderColor="transparent"
          hoverBorderColor="black"
        ></custom-button>
      </div>
      <div class="info wrapper-70">
        <div class="info-item">
          <h5>Information</h5>
          <ul>
            <li>Eglu IT ApS</li>
            <li>Genvejen 15B, 7451, Sunds</li>
            <li>
              <a :href="`tel:${phoneNumber}`"> Tlf: {{ phoneNumber }} </a>
            </li>
            <li>
              <a :href="`mailto:${emailAddress}`"> Mail: {{ emailAddress }} </a>
            </li>
          </ul>
        </div>

        <div class="info-item">
          <h5>Åbningstider</h5>
          <ul>
            <li>Mandag: 7:30-15:30</li>
            <li>Tirsdag: 7:30-15:30</li>
            <li>Onsdag: 7:30-15:30</li>
            <li>Torsdag: 7:30-15:30</li>
            <li>Fredag: 7:30-14:00</li>
            <li>Lørdag: Lukket</li>
            <li>Søndag: Lukket</li>
          </ul>
        </div>

        <div class="info-item">
          <h5>Genveje</h5>
          <ul>
            <li>
              <a href="#top">Tilbage til toppen</a>
            </li>
            <li><router-link to="/about">Om Os</router-link></li>
            <li><router-link to="/services">Ydelser</router-link></li>
            <li><router-link to="/contact">Kontakt</router-link></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import CustomButton from "@/components/CustomButton.vue";
export default {
  components: { CustomButton },
  name: "ContactInfo",
  setup() {
    const phoneNumber = "23 34 28 99";
    const emailAddress = "stefan@egluit.dk";

    return { phoneNumber, emailAddress };
  },
};
</script>

<style scoped lang="scss">
.partners {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 3% 0;
  img {
    width: 60%;
  }
}
.contact {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  width: 100%;
  .title {
    text-align: center;
    background-color: aqua;
    width: 100%;
    background: linear-gradient(to bottom, $bg-light, $bg-color-dark);
    h2 {
      font-weight: 800;
      color: white;
      font-size: 48px;
      @media (max-width: $tablet-width) {
        font-size: 35px;
      }
      @media (max-width: $mobile-width) {
        font-size: 26px;
      }
    }
  }
  .container {
    width: 100%;
    background-color: $bg-color-dark;
    .btn-cont {
      widows: 100%;
      text-align: center;
      button {
        position: relative;
        top: -20px;
      }
    }
    .info {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      @media (max-width: $mobile-width) {
        flex-wrap: wrap;
        align-items: center center;
        justify-content: center;
      }
      .info-item {
        width: fit-content;
        color: white;
        text-align: center;
        @media (max-width: $mobile-width) {
          width: 100%;
        }
        ul {
          list-style-type: none; 
          padding: 0;
          margin: 0; 
          li {
            font-size: 19px;
            line-height: 45px;
            @media (max-width: $mobile-width) {
            font-size: 16px;
            line-height: 30px;
        }
          }
        }
        h5 {
          font-weight: 700;
          font-size: 24px;
          line-height: 0px;
        }
      }
    }
  }
}
</style>

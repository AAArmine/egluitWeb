<template>
  <section class="contact wrapper-80">
    <div class="contact-item">
      <h1>KONTAKT OS</h1>
      <div class="address">Genvejen 15 B, 7451 Sunds, Danmark</div>
      <a :href="`tel:${phoneNumber}`" class="tel"
        >+45 <span>{{ phoneNumber }}</span></a
      >
      <a :href="`mailto:${emailAddress}`" class="email">{{ emailAddress }}</a>
      <div class="text">Administrerende direktør:</div>
      <div class="name">Stefan Søndergaard</div>
    </div>
    <div class="contact-item">
      <form-sec />
    </div>
  </section>
</template>

<script>
import FormSec from "./FormSec.vue";
export default {
  name: "ContactSec",
  components: { FormSec },
  setup() {
    const phoneNumber = "23 34 28 99";
    const emailAddress = "stefan@egluit.dk";

    return { phoneNumber, emailAddress };
  },
};
</script>

<style scoped lang="scss">
.contact {
  background-color: $bg-light;
  display: flex;
  justify-content: space-between;
  @media (max-width: $mobile-width) {
    flex-wrap: wrap;
  }
  .contact-item {
    width: 49%;
    text-align: center;
    @media (max-width: $mobile-width) {
      width: 100%;
    }
    h1 {
      font-size: 42px;
      font-weight: 400;
      padding-top: 30px;
    }
    .address {
      font-size: 15px;
    }
    .tel {
      display: block;
      font-size: 30px;
      padding: 30px 0;
      span {
        font-weight: 500;
      }
    }
    .email {
      font-size: 24px;
    }
    .text {
      padding: 50px 0 5px 0;
    }
    .name {
      font-size: 24px;
      font-weight: 600;
    }
  }
}
</style>

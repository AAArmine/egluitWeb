<template>
  <section class="quote">
    <div class="wrapper-80">
      <div class="image"></div>
      <div class="content-item">
        <div class="cont">
          <p>
            "Vi ønsker at gøre arbejdet lettere for virksomhedsejere - lad os
            hjælpe dig med dine IT udfordringer, så DU kan koncentrere dig om at
            drive din virksomhed bedst muligt"

            <router-link to="/about">Stefan Søndergaard</router-link>
          </p>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "DescSec",
};
</script>

<style scoped lang="scss">
.quote {
  padding: 50px 0;
  .wrapper-80 {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    .content-item {
      position: relative;
      width: 30%;
      .cont {
        background-color: white;
        padding: 0px 60px;
        position: absolute;
        width: 150%;
        left: -400px;
        font-size: 20px;
        top: 100px;
        a {
          display: block;
          margin-top: 21px;
          font-weight: 600;
          font-size: 15px;
          width: fit-content;
          cursor: pointer;
          &:hover {
            border-bottom: 2px solid black;
          }
        }
      }
    }
    .image {
      background-image: url("@/assets/images/main3.png");
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center center;
      background-attachment: fixed;
      width: 70%;
      height: 400px;
    }
  }
}
</style>

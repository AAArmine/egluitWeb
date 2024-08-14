<template>
  <div class="hours-container wrapper-90">
    <div class="overlay"></div>
    <div class="content">
      <h5>ÅBNINGS TIDER</h5>
      <h6>Man - Fre: 07:30-15:30</h6>
      <h6>Lør: Lukket</h6>
      <h6>Søn: Lukket</h6>
    </div>
  </div>
</template>

<script>
export default {
  name: "HoursSec",
};
</script>

<style scoped lang="scss">
.hours-container {
  position: relative;
  padding: 50px 0;
  background-image: url("@/assets/images/contact.png");
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
  min-height: 400px;
  margin-bottom: 35px;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  color: white;
  .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
    background: rgba(0, 0, 0, 0.6);
  }
  h5 {
    font-size: 24px;
    font-weight: 400;
    line-height: 40px;
  }
  h6 {
    font-size: 15px;
    font-weight: 400;
    line-height: 0px;
  }
  .content {
    position: relative;
    z-index: 2;
  }
}
</style>

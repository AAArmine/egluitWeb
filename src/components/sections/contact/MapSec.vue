<template>
  <div class="map-container wrapper-90">
    <iframe
      src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAjiEHs-pIn-rFC15IFsF2v6zxt5pb3jrY&q=Genvejen%2015%20B%2C%207451%20Sunds%2C%20Danmark"
      width="100%"
      height="450"
      style="border: 0"
      allowfullscreen=""
      loading="lazy"
    ></iframe>
  </div>
</template>

<script>
export default {
  name: "MapSec",
};
</script>

<style scoped lang="scss">
.map-container {
  padding-top: 50px;
  margin-bottom: 50px;
}
</style>

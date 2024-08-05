<template>
  <div id="test-component">
    Benefit page
    <div class="nested-element">nested</div>
  </div>
</template>

<script>
export default {
  name: "ServicesPage",
  components: {},
};
</script>

<style scoped lang="scss">
#test-component {
  color: blue;
  font-size: 16px;

  .nested-element {
    color: red;
    font-weight: bold;
  }
}
</style>

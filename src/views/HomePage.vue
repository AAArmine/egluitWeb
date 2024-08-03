<template>
  <div class="home-page">
    <AboutSec />
  </div>
</template>

<script>
import AboutSec from "@/components/sections/home/AboutSec.vue";

export default {
  name: "HomePage",
 components: { AboutSec },
};
</script>

<style scoped lang="scss">
.home-page {
  background-color: $bg-color;
}
</style>

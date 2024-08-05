<template>
  <div class="home-page">
    <AboutSec />
    <desc-sec />
    <quote-sec />
  </div>
</template>

<script>
import AboutSec from "@/components/sections/home/AboutSec.vue";
import DescSec from "@/components/sections/home/DescSec.vue";
import QuoteSec from "@/components/sections/home/QuoteSec.vue";

export default {
  name: "HomePage",
  components: { AboutSec, DescSec, QuoteSec },
};
</script>

<style scoped lang="scss">
.home-page {
  background-color: $bg-light;
}
</style>

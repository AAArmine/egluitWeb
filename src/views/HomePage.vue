<template>
  <div class="home-page">
    <AboutSec />
    <desc-sec />
    <quote-sec />
    <contact-info />
  </div>
</template>

<script>
import AboutSec from "@/components/sections/home/AboutSec.vue";
import DescSec from "@/components/sections/home/DescSec.vue";
import QuoteSec from "@/components/sections/home/QuoteSec.vue";
import ContactInfo from "@/components/sections/home/ContactInfo.vue";

export default {
  name: "HomePage",
  components: { AboutSec, DescSec, QuoteSec, ContactInfo },
};
</script>

<style scoped lang="scss">
.home-page {
  background-color: $bg-light;
}
</style>

<template>
  <offers-sec />
  <expert-sec />
  <services-details />
</template>

<script>
import OffersSec from "@/components/sections/services/OffersSec.vue";
import ExpertSec from "@/components/sections/services/ExpertSec.vue";
import ServicesDetails from "@/components/sections/services/ServicesDetails.vue";
export default {
  name: "ServicesPage",
  components: { OffersSec, ExpertSec, ServicesDetails },
};
</script>

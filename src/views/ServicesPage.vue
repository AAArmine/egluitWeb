<template>
  <offers-sec />
  <expert-sec />
  <services-details />
  <more-info />
</template>

<script>
import OffersSec from "@/components/sections/services/OffersSec.vue";
import ExpertSec from "@/components/sections/services/ExpertSec.vue";
import ServicesDetails from "@/components/sections/services/ServicesDetails.vue";
import MoreInfo from "@/components/sections/services/MoreInfo.vue";
export default {
  name: "ServicesPage",
  components: { OffersSec, ExpertSec, ServicesDetails, MoreInfo },
};
</script>

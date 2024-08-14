<template>
  <contact-sec />
  <map-sec />
  <hours-sec />
</template>

<script>
import ContactSec from "@/components/sections/contact/ContactSec.vue";
import MapSec from "@/components/sections/contact/MapSec.vue";
import HoursSec from '@/components/sections/contact/HoursSec.vue';
export default {
  name: "ContactPage",
  components: { ContactSec, MapSec, HoursSec },
};
</script>

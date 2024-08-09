<template>
  <div id="about">
    <intro-sec />
    <team-members-sec />
  </div>
</template>

<script>
import IntroSec from "@/components/sections/about/IntroSec.vue";
import TeamMembersSec from "@/components/sections/about/TeamMembers.vue";
export default {
  components: { IntroSec, TeamMembersSec },
  name: "AboutPage",
};
</script>

<style scoped lang="scss"></style>

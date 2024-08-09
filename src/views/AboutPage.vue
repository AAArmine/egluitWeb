<template>
  <div id="about">
    <intro-sec />
    <team-members-sec />
    <team-images />
  </div>
</template>

<script>
import IntroSec from "@/components/sections/about/IntroSec.vue";
import TeamMembersSec from "@/components/sections/about/TeamMembers.vue";
import TeamImages from "@/components/sections/about/TeamImages.vue";
export default {
  components: { IntroSec, TeamMembersSec, TeamImages },
  name: "AboutPage",
};
</script>

<style scoped lang="scss"></style>

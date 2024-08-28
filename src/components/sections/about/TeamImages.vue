<template>
  <section class="images">
    <div class="wrapper-80">
      <h1 class="title">Mød vores team</h1>
      <Carousel v-bind="settings">
        <Slide v-for="member in teamMembers" :key="member.id">
          <div class="team-member">
            <img
              :src="require(`@/assets/images/${member.image}`)"
              alt="Team Member"
              class="member-image"
            />
            <div class="member-info">
              <h3 class="member-name">{{ member.name }}</h3>
              <p class="member-position">{{ member.position }}</p>
            </div>
          </div>
        </Slide>

        <template #addons>
          <Navigation />
        </template>
      </Carousel>
    </div>
  </section>
</template>

<script>
import { defineComponent } from "vue";
import { Carousel, Navigation, Slide } from "vue3-carousel";
import "vue3-carousel/dist/carousel.css";

export default defineComponent({
  name: "TeamImages",
  components: {
    Carousel,
    Slide,
    Navigation,
  },
  data() {
    return {
      teamMembers: [
        { id: 1, image: "Hrayr.png", name: "Hrayr", position: "Programmer" },
        {
          id: 3,
          image: "webDev.png",
          name: "Armine",
          position: "Web Developer",
        },
        {
          id: 2,
          image: "main2.png",
          name: "Server Expert",
          position: "Server Specialist",
        },

        { id: 4, image: "Stefan.png", name: "Stefan", position: "CEO" },
      ],
      settings: {
        itemsToShow: 3,
        wrapAround: true,
        breakpoints: {
          10: {
            itemsToShow: 1,
            snapAlign: "center",
          },
          850: {
            itemsToShow: 3,
            snapAlign: "center",
          },
        },
      },
    };
  },
});
</script>

<style scoped>
.images {
  padding-bottom: 50px;
}
.team-member {
  text-align: center;
}
.member-image {
  width: 160px;
  height: 160px;
  object-fit: cover;
  border-radius: 50%;
  opacity: 0.8;
}
.member-info {
  padding: 10px;
}
</style>

<template>
  <button
    :style="buttonStyle"
    @click="navigate"
    class="custom-button"
    @mouseover="isHovered = true"
    @mouseleave="isHovered = false"
  >
    {{ text }}
  </button>
</template>

<script>
import { ref, computed } from "vue";

export default {
  name: "CustomButton",
  props: {
    backgroundColor: {
      type: String,
      required: true,
    },
    textColor: {
      type: String,
      required: true,
    },
    hoverColor: {
      type: String,
      required: true,
    },
    hoverTextColor: {
      type: String,
      required: true,
    },
    text: {
      type: String,
      required: true,
    },
    navigateTo: {
      type: String,
      default: "",
    },
    hoverBorder: {
      type: String,
      default: "",
    },
  },
  setup(props) {
    const isHovered = ref(false);

    const buttonStyle = computed(() => ({
      backgroundColor: isHovered.value
        ? props.hoverColor
        : props.backgroundColor,
      color: isHovered.value ? props.hoverTextColor : props.textColor,
      border: `1px solid ${
        isHovered.value ? props.hoverBorder || props.textColor : props.textColor
      }`,
      padding: "10px 20px",
      transition:
        "background-color 0.3s ease, color 0.3s ease, border 0.3s ease", // Smooth background color, text color, and border transition
      cursor: "pointer",
    }));

    const navigate = () => {
      if (props.navigateTo) {
        window.location.href = props.navigateTo;
      }
    };

    return {
      buttonStyle,
      navigate,
      isHovered,
    };
  },
};
</script>

<style scoped>
.custom-button {
  position: relative;
  overflow: hidden;
  outline: none;
  min-width: 150px;
  font-size: 17px;
}
</style>

<template>
  <button
    :style="buttonStyle"
    @click="navigate"
    class="custom-button"
    @mouseover="setHovered(true)"
    @mouseleave="setHovered(false)"
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
    hoverBorderColor: {
      type: String,
      default: "",
    },
    borderColor: {
      type: String,
      default: "",
    },
  },
  setup(props) {
    const isHovered = ref(false);

    const setHovered = (value) => {
      isHovered.value = value;
    };

    const buttonStyle = computed(() => {
      const borderColor = isHovered.value
        ? props.hoverBorderColor || props.textColor
        : props.borderColor || props.textColor;

      return {
        backgroundColor: isHovered.value
          ? props.hoverColor
          : props.backgroundColor,
        color: isHovered.value ? props.hoverTextColor : props.textColor,
        border: `1px solid ${borderColor}`,
        padding: "10px 20px",
        transition:
          "background-color 0.3s ease, color 0.3s ease, border 0.3s ease",
        cursor: "pointer",
      };
    });

    const navigate = () => {
      if (props.navigateTo) {
        window.location.href = props.navigateTo;
      }
    };

    return {
      buttonStyle,
      navigate,
      setHovered,
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
  font-size: 18px;
  letter-spacing: 1px;
}
</style>

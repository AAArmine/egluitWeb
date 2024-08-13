<template>
  <div class="form-container">
    <form @submit.prevent="handleSubmit">
      <div class="form-row">
        <div class="form-group">
          <label for="name">Navn*</label>
          <input
            type="text"
            id="name"
            v-model="form.name"
            :class="{ error: formSubmitted && !form.name }"
            placeholder="Indtast dit navn"
          />
        </div>
        <div class="form-group">
          <label for="email">E-mail*</label>
          <input
            type="email"
            id="email"
            v-model="form.email"
            :class="{ error: formSubmitted && (!form.email || !isEmailValid) }"
            placeholder="Indtast din e-mailadresse"
          />
        </div>
      </div>

      <div class="form-row">
        <div class="form-group">
          <label for="phone">Telefon</label>
          <input
            type="tel"
            id="phone"
            v-model="form.phone"
            placeholder="Indtast telefonnummer"
          />
        </div>
        <div class="form-group">
          <label for="address">Adresse</label>
          <input
            type="text"
            id="address"
            v-model="form.address"
            placeholder="Indtast din adresse"
          />
        </div>
      </div>

      <div class="form-row full-width">
        <div class="form-group">
          <label for="subject">Emne</label>
          <input
            type="text"
            id="subject"
            v-model="form.subject"
            placeholder="Skriv emnet"
          />
        </div>
      </div>

      <div class="form-row">
        <div class="form-group">
          <label for="message">Besked</label>
          <textarea
            id="message"
            v-model="form.message"
            placeholder="Indtast din besked her..."
          ></textarea>
        </div>
      </div>

      <CustomButton
        backgroundColor="black"
        textColor="white"
        hoverColor="grey"
        hoverBorder="grey"
        hoverTextColor="white"
        text="Submit"
        type="submit"
      />
    </form>
  </div>
</template>

<script setup>
import { ref, computed } from "vue";
import emailjs from "emailjs-com";
import CustomButton from "@/components/CustomButton.vue";

const form = ref({
  name: "",
  email: "",
  phone: "",
  address: "",
  subject: "",
  message: "",
});
const formSubmitted = ref(false);

const isEmailValid = computed(() =>
  /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(form.value.email)
);

async function handleSubmit() {
  formSubmitted.value = true;
  if (isFormValid()) {
    try {
      await emailjs.send(
        'service_h939glp', // Your Service ID
        'template_cyx7hhk', // Your Template ID
        {
          from_name: form.value.name,
          from_email: form.value.email,
          phone: form.value.phone,
          address: form.value.address,
          subject: form.value.subject,
          message: form.value.message
        },
        '7QHghtyZK0RVR-sDe' // Your User ID (Public Key)
      );
      alert('Form submitted successfully!');
    } catch (error) {
      console.error('Failed to send email:', error);
    }
  }
}


function isFormValid() {
  return form.value.name && form.value.email && isEmailValid.value;
}
</script>

<style scoped>
.form-container {
  max-width: 600px;
  margin: auto;
  padding: 50px 50px 20px 20px;
}

form {
  display: flex;
  flex-direction: column;
  gap: 15px;
}

.form-row {
  display: flex;
  gap: 15px;
}

.form-row.full-width {
  width: 100%;
}

.form-group {
  flex: 1;
}

label {
  display: block;
  margin-bottom: 5px;
  text-align: left;
  font-size: 15px;
}

input,
textarea {
  background-color: transparent;
  width: 100%;
  padding: 10px;
  border: none;
  border-bottom: 1px solid black;
  box-sizing: border-box;
}

textarea {
  height: 110px;
  resize: vertical;
}

input.error,
textarea.error {
  border-bottom: 1px solid red;
  background-color: #ffe6e6;
}
</style>

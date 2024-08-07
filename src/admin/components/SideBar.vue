<template>
  <div class="sidebar">
    <ul>
      <li><router-link to="/">Home Page</router-link></li>
      <li><router-link to="/about">About Page</router-link></li>
      <li><router-link to="/contact">Contact Page</router-link></li>
      <li><router-link to="/services">Services Page</router-link></li>
      <li><router-link to="/users">Users</router-link></li>
    </ul>
  </div>
</template>

<script>
export default {
  name: "SideBar",
};
</script>
<style>
.sidebar {
  width: 200px;
  height: 100vh;
  background: #f4f4f4;
  padding: 1rem;
}
</style>

<template>
  <h1 class="p-4">HEADER</h1>
  <div class="p-4">
    <router-link to="/">Home</router-link> |
    <router-link to="/about">About</router-link>
  </div>
</template>

<script>
export default {
  name: 'Navigation',
}
</script>

<style scoped>
h1 {
  background-color: cornflowerblue;
  color: white;
}
</style>
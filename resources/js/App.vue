<template>
  <section class="pt-6 pb-20 bg-gray-900 overflow-hidden">
    <div class="container mx-auto px-4">
      <Navigation/>
      <router-view/>
      <Footer />
    </div>
  </section>
<!--  <router-view/>-->
</template>

<script>

import Navigation from "./components/Navigation.vue";
import Footer from "./components/Footer.vue";

export default {
  name: 'App',
  components: {Footer, Navigation},
}
</script>

<style>

</style>
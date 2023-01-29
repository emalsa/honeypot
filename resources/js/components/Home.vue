<template>
  <section class="pt-6 pb-20 bg-gray-900 overflow-hidden">
    <div class="container mx-auto px-4">
      <Navigation />
      <Hero />
    </div>
  </section>
  <HowItWorks />
  <About />
  <Footer />
</template>


<script>
import Navigation from "./Navigation.vue";
import Hero from './home/Hero.vue'
import HowItWorks from './home/HowItWorks.vue'
import About from './home/About.vue'
import Footer from "./Footer.vue";

export default {
  name: 'Home',
  components: {Footer, Navigation, Hero, HowItWorks, About}
}
</script>

<style scoped>

</style>
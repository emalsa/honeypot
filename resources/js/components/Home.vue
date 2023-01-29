<template>
  <Hero/>
  <HowItWorks/>
  <About/>
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

<style>

</style>
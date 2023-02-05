<template>
  <section class="py-10 bg-gray-900 overflow-hidden">
    <div class="container mx-auto px-4">
      <div class="py-16 px-8 bg-gray-900 border border-gray-800 rounded-3xl">
        <div class="flex flex-col justify-centers">
          <router-link class="inline-block max-w-max mx-auto mb-10" to="/">
            <img src="zanrly-assets/logos/zanrly-logo-xl-white.svg" alt=""></router-link>
          <ul class="-m-6 mb-7 text-center">
            <li class="inline-flex p-6">
              <router-link class="inline-block text-gray-500 hover:text-gray-600 font-bold"
                           to="/">Home
              </router-link>
            </li>
            <li class="inline-flex p-6">
              <router-link class="inline-block text-gray-500 hover:text-gray-600 font-bold"
                           to="/#how-it-works">How it works
              </router-link>
            </li>
            <li class="inline-flex p-6">
              <router-link class="inline-block text-gray-500 hover:text-gray-600 font-bold"
                           to="/#about-us">About us
              </router-link>
            </li>
            <li class="inline-flex p-6">
              <router-link class="inline-block text-gray-500 hover:text-gray-600 font-bold"
                           to="/contact">Contact
              </router-link>
            </li>
            <li class="inline-flex p-6">
              <router-link class="inline-block text-gray-500 hover:text-gray-600 font-bold"
                           to="/terms-and-rights-new">Terms and Rights
              </router-link>
            </li>

          </ul>
          <p class="text-gray-500 text-center font-bold">
            <span>Ⓒ {{ year }} Copyright. All rights reserved by</span>
            <router-link class="text-blue-500 hover:text-blue-600" to="/terms-and-rights-new">&nbsp;bitcoin-holder.org</router-link>
          </p>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'Footer',
  data() {
    return {
      'year': new Date().getFullYear()
    }
  }
}
</script>

<style>

</style>
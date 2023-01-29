<template>
  <section class="py-10 bg-gray-900 overflow-hidden">
<!--    <div class="container mx-auto px-4">-->
      <div class="py-20 px-8 bg-gray-900 border border-gray-800 rounded-3xl">
        <div class="pb-32 md:pb-64 max-w-7xl mx-auto">
          <div class="md:max-w-md mx-auto text-center">
            <img class="mb-32 md:mb-64 mx-auto" src="zanrly-assets/logos/zanrly-logo-small-white2.svg" alt="">
            <h3 class="font-heading text-2xl text-blue-500 font-black tracking-tight">502</h3>
            <h2 class="font-heading mb-6 text-4xl md:text-5xl lg:text-6xl text-white font-black tracking-tight">
              Something went wrong...</h2>
            <p class="mb-6 text-gray-500 font-bold">Uff... something went wrong here, probably on our side.<br/>
              Please try again or contact us, if the error occurs again.</p>
            <div class="flex flex-wrap justify-center -m-2">
              <div class="w-full md:w-auto p-2">
                <router-link class="block w-full px-4 py-2.5 text-sm text-center text-white font-bold bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-200 rounded-full"
                             to="/">Go back to Homepage
                </router-link>
              </div>
              <div class="w-full md:w-auto p-2">
                <router-link class="block w-full px-4 py-2.5 text-sm text-center text-gray-900 font-bold bg-gray-50 hover:bg-gray-200 focus:ring-4 focus:ring-gray-200 rounded-full"
                             to="/dashboard">Try Again
                </router-link>
              </div>
            </div>
          </div>
        </div>
      </div>
<!--    </div>-->
  </section>

</template>

<script>
export default {
  name: 'Dashboard'
}
</script>
<template>
  <div class="flex flex-wrap justify-center -m-4">
    <div class="w-full md:w-auto p-4">
      <img class="mx-auto" src="zanrly-assets/images/headers/device.png" alt="">
    </div>
    <div class="w-full md:flex-1 p-4">
      <div class="flex flex-col justify-center items-center p-8 h-full text-center bg-gray-900 border border-gray-800 rounded-3xl">
        <div class="max-w-lg">
          <span class="inline-block mb-3 text-sm text-blue-500 font-bold uppercase tracking-widest">Thinking Crypto wallets</span>
          <h1 class="font-heading mb-6 text-5xl text-white font-black tracking-tight">
            Trade your cryptocurrencies
            <span class="text-blue-500">fast</span>
            and simple.
          </h1>
          <p class="mb-8 text-xl text-gray-500 font-bold">Store, receive and send cryptocurrencies easily, securely
            and without technical knowledge. We take care of everything.</p>
          <div class="flex flex-wrap justify-center -m-2">
            <div class="w-full md:w-auto p-2">
              <router-link class="block w-full px-4 py-2.5 text-sm text-center text-white font-bold bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-200 rounded-full"
                 to="/register">Get Started</router-link></div>

          </div>
        </div>
      </div>
    </div>
  </div>

</template>

<script>
export default {
  name: 'Hero'
}
</script>
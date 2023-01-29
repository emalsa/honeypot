<template>
  <section class="py-10 bg-gray-900 overflow-hidden">
    <div class="container mx-auto px-4">
      <div class="flex flex-wrap -m-4">
        <div class="w-full md:w-1/2 p-4">
          <div class="py-32 px-8 text-center h-full bg-gray-900 overflow-hidden border border-gray-800 rounded-3xl">
            <div class="max-w-md mx-auto">
              <span class="inline-block mb-2 text-sm text-blue-500 font-bold uppercase tracking-widest">Hello</span>
              <h2 class="font-heading mb-8 text-4xl md:text-5xl text-white font-black tracking-tight">Start your journey
                with us.</h2>
              <div class="flex flex-wrap justify-center -m-2">
                <div class="w-full md:w-auto p-2"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full md:w-1/2 p-4">
          <div class="py-32 px-8 text-center h-full bg-blue-500 rounded-3xl">
            <div class="max-w-md mx-auto">
              <span class="inline-block mb-2 text-sm text-white font-bold uppercase tracking-widest">Subscribe</span>
              <h2 class="font-heading mb-8 text-4xl md:text-5xl text-white font-black tracking-tight">Put me on the
                waiting list</h2>
              <div class="max-w-sm mx-auto">
                <div class="flex flex-wrap -m-2">
                  <div class="w-full md:flex-1 p-2 mb-6">
                    <input class="px-6 py-3.5 w-full text-lg text-white font-bold bg-blue-400 outline-none focus:ring-4 focus:ring-blue-200 placeholder-white rounded-full"
                           id="newsletterDarkBorderInput1-1"
                           type="text"
                           placeholder="Email address"></div>
                  <div class="w-full md:w-auto p-2">
                    <div class="flex flex-wrap justify-center -m-2">
                      <div class="w-full md:w-auto p-2">
                        <a class="block w-full px-8 py-3.5 text-lg text-center text-gray-900 font-bold bg-white hover:bg-gray-100 focus:ring-4 focus:ring-blue-200 rounded-full"
                           href="#">Sign In</a></div>

                    </div>


                  </div>


                </div>
                <span class="inline-block mb-2 text-sm text-white font-bold uppercase tracking-widest"
                      contenteditable="true">The waiting time is approximately 10 days</span>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


</template>

<script>
export default {
  name: 'Register'
}
</script>
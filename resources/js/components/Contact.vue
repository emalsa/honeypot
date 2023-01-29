<template>
  <section class="pt-6 pb-20 bg-gray-900 overflow-hidden">
    <div class="container mx-auto px-4">
      <Navigation/>
    </div>
  </section>
  <section class="py-10 bg-gray-900 overflow-hidden">
    <div class="container mx-auto px-4">
      <div class="py-16 px-8 bg-gray-900 overflow-hidden border border-gray-800 rounded-3xl">
        <div class="max-w-5xl mx-auto">
          <div class="mb-10 md:max-w-md mx-auto text-center">
            <span class="inline-block mb-4 text-sm text-blue-500 font-bold uppercase tracking-widest">Contact Us</span>
            <h2 class="font-heading mb-6 text-4xl md:text-5xl lg:text-6xl text-white font-black tracking-tight">Get
              connected</h2>
            <p class="text-gray-400 font-bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada tellus
              vestibulum, commodo pulvinar.</p>
          </div>
          <form class="p-10 bg-gray-800 rounded-3xl">
            <div class="flex flex-wrap -m-5 mb-1">
              <div class="w-full md:w-1/2 p-5">
                <label class="block mb-2 text-sm text-gray-500 font-bold" for="contactDarkBorderInput2-1">Full
                  Name</label>
                <input class="appearance-none px-6 py-3.5 w-full text-lg text-gray-500 font-bold bg-gray-900 placeholder-gray-500 outline-none focus:ring-4 focus:ring-blue-200 rounded-full"
                       id="contactDarkBorderInput2-1"
                       type="text"
                       placeholder="Enter your name">
              </div>
              <div class="w-full md:w-1/2 p-5">
                <label class="block mb-2 text-sm text-gray-500 font-bold" for="contactDarkBorderInput2-2">Emaill
                  address</label>
                <input class="appearance-none px-6 py-3.5 w-full text-lg text-gray-500 font-bold bg-gray-900 placeholder-gray-500 outline-none focus:ring-4 focus:ring-blue-200 rounded-full"
                       id="contactDarkBorderInput2-2"
                       type="text"
                       placeholder="Email address">
              </div>
            </div>
            <div class="flex flex-wrap -m-5">

              <div class="w-full md:w-1/2 p-5">
                <label class="block mb-2 text-sm text-gray-500 font-bold"
                       for="contactDarkBorderInput2-4">Subject</label>
                <input class="appearance-none px-6 py-3.5 w-full text-lg text-gray-500 font-bold bg-gray-900 placeholder-gray-500 outline-none focus:ring-4 focus:ring-blue-200 rounded-full"
                       id="contactDarkBorderInput2-4"
                       type="text"
                       placeholder="Type your subject">
              </div>
            </div>
            <div class="flex flex-wrap -m-3.5">
              <div class="w-full p-3.5">
                <label class="block mb-2 text-sm text-gray-500 font-bold"
                       for="contactDarkBorderInput2-5">Message</label>
                <textarea class="appearance-none px-6 py-5 w-full text-lg text-gray-500 font-bold bg-gray-900 placeholder-gray-500 outline-none focus:ring-4 focus:ring-blue-200 rounded-3xl"
                          id="contactDarkBorderInput2-5"
                          type="text"
                          rows="8"
                          placeholder="Enter your message"></textarea>
              </div>
              <div class="w-full p-3.5">
                <div class="flex flex-wrap items-center -m-2">
                  <div class="w-full md:w-1/2 p-2">
                    <div class="flex">
                      <input class="opacity-0 absolute h-5 w-5" id="contactDarkBorderCheckbox2-1" type="checkbox">
                      <div class="flex flex-shrink-0 justify-center items-center w-6 h-6 mr-4 text-transparent bg-gray-800 border border-gray-200 rounded-md">
                        <svg width="9" height="7" viewbox="0 0 9 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M0.603516 3.77075L2.68685 5.85409L7.89518 0.645752"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </svg>
                      </div>
                      <label class="text-sm text-gray-500 font-bold" for="contactDarkBorderCheckbox2-1">I’d llike to
                        occasionally receive other communication from Zanrly, such as content and product news.</label>
                    </div>
                  </div>
                  <div class="w-full md:w-1/2 p-2">
                    <div class="flex flex-wrap md:justify-end -m-2">
                      <div class="w-full md:w-auto p-2">
                        <a class="block w-full px-8 md:px-16 py-3.5 text-lg text-center text-white font-bold bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-200 rounded-full"
                           href="#">Send Message</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </section>
</template>

<script>
import Navigation from "./Navigation.vue";

export default {
  name: 'Contact',
  components: {Navigation}
}
</script>
<template>
  <div class="mb-6">
    <div class="flex items-center justify-between px-6 py-3.5 bg-gray-800 rounded-full">
      <div class="w-auto">
        <div class="flex flex-wrap items-center">
          <div class="w-auto">
            <router-link to="/">
              <img src="zanrly-assets/logos/zanrly-logo-white.svg" alt=""></router-link>
          </div>
        </div>
      </div>
      <div class="w-auto">
        <div class="flex flex-wrap items-center">
          <div class="w-auto hidden lg:block">
            <ul class="flex items-center justify-center">
              <li class="mr-9">
                <router-link class="inline-block text-sm font-bold text-gray-200 hover:text-gray-300"
                             to="/"
                             contenteditable="false">Home
                </router-link>
              </li>
              <li class="mr-9">
                <router-link class="inline-block text-sm font-bold text-gray-200 hover:text-gray-300"
                             to="/#how-it-works">How
                  it works
                </router-link>
              </li>
              <li class="mr-9">
                <router-link class="inline-block text-sm font-bold text-gray-200 hover:text-gray-300" to="/#about-us">
                  About
                  us
                </router-link>
              </li>
              <li>
                <router-link class="inline-block text-sm font-bold text-gray-200 hover:text-gray-300"
                             to="/contact"
                             contenteditable="false">Contact
                </router-link>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="w-auto">
        <div class="flex flex-wrap items-center">
          <div class="w-auto hidden lg:block">
            <div class="flex flex-wrap -m-2">
              <div class="w-full md:w-auto p-2">
                <router-link class="block w-full px-4 py-2.5 text-sm text-center text-white font-bold hover:bg-gray-900 focus:ring-4 focus:ring-gray-500 border border-gray-800 rounded-full"
                             to="/login">Log In
                </router-link>
              </div>
              <div class="w-full md:w-auto p-2">
                <router-link class="block w-full px-4 py-2.5 text-sm text-center text-white font-bold bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-200 rounded-full"
                             to="/register">Get Started
                </router-link>
              </div>
            </div>
          </div>
          <div class="w-auto lg:hidden">
            <router-link class="inline-block mobile-menu-icon" to="#">
              <div>

                <svg style="overflow:visible;" class="navbar-burger text-blue-500"
                     width="45"
                     height="45"
                     viewbox="0 0 56 56"
                     fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                  <rect width="56" height="56" rx="28" fill="currentColor"></rect>
                  <path d="M37 32H19M37 24H19"
                        stroke="white"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"></path>
                </svg>

              </div>
            </router-link>

          </div>
        </div>
      </div>
    </div>
    <div class="hidden navbar-menu fixed top-0 left-0 bottom-0 w-4/6 sm:max-w-xs z-50">
      <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-80"></div>
      <nav class="relative z-10 px-9 pt-8 bg-gray-800 h-full overflow-y-auto">
        <div class="flex flex-wrap justify-between h-full">
          <div class="w-full">
            <div class="flex items-center justify-between -m-2">
              <div class="w-auto p-2">
                <a class="inline-block" href="#">
                  <img src="zanrly-assets/logos/zanrly-logo-white.svg" alt=""></a>
              </div>
              <div class="w-auto p-2">
                <a class="inline-block navbar-burger" href="#">
                  <div>
                    <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M6 18L18 6M6 6L18 18"
                            stroke="#ffffff"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="flex flex-col justify-center py-8 w-full">
            <ul>
              <li class="mb-9">
                <router-link class="inline-block text-sm font-bold text-gray-200 hover:text-gray-300" to="/">Home
                </router-link>
              </li>
              <li class="mb-9">
                <router-link class="inline-block text-sm font-bold text-gray-200 hover:text-gray-300"
                             to="/#how-it-works">How it works
                </router-link>
              </li>
              <li class="mb-9">
                <router-link class="inline-block text-sm font-bold text-gray-200 hover:text-gray-300" to="/#about-us">
                  About us
                </router-link>
              </li>
              <li>
                <router-link class="inline-block text-sm font-bold text-gray-200 hover:text-gray-300" to="/contact">
                  Contact
                </router-link>
              </li>
            </ul>
          </div>
          <div class="flex flex-col justify-end w-full pb-8">
            <div class="flex flex-wrap -m-2">
              <div class="w-full p-2">
                <router-link class="block w-full px-4 py-2.5 text-sm text-center text-white font-bold bg-gray-800 hover:bg-gray-900 focus:ring-4 focus:ring-gray-500 border border-gray-700 rounded-full"
                             to="/login">Log In
                </router-link>
              </div>
              <div class="w-full p-2">
                <router-link class="block w-full px-4 py-2.5 text-sm text-center text-white font-bold bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-200 rounded-full"
                             to="/register">Get Started
                </router-link>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Navigation',
}
</script>

<style>

</style>
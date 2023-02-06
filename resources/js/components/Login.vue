<template>
  <section class="py-10 bg-gray-900 overflow-hidden">
    <div style="color:white">{{ this.userdata.ip }}</div>
    <div v-if="this.userdata.geolocation" style="color:white">
      {{ this.userdata.geolocation.latitude }},
      {{ this.userdata.geolocation.longitude }}
    </div>

    <div class="container mx-auto px-4">
      <div class="p-10 bg-gray-900 border border-gray-800 rounded-3xl">
        <div class="flex flex-wrap md:items-center -m-8">
          <div class="w-full md:w-1/2 p-8">
            <div class="py-14 px-8 lg:px-20 bg-gray-800 rounded-3xl">
              <img class="mb-20" src="zanrly-assets/logos/zanrly-logo-xl-white.svg" alt="">
              <h2 class="font-heading mb-10 md:mb-12 text-4xl md:text-5xl text-white font-black"
                  contenteditable="false">Welcome back. Hope you are fine.</h2>
              <ul class="max-w-xs">
                <h3 class="font-heading mb-6 text-xl text-gray-500 font-bold">THINKING CRYPTO WALLETS</h3>
                <li class="flex flex-wrap mb-6">
                  <svg class="w-auto mr-2.5"
                       width="25"
                       height="26"
                       viewbox="0 0 25 26"
                       fill="none"
                       xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M12.5 23C18.0228 23 22.5 18.5228 22.5 13C22.5 7.47715 18.0228 3 12.5 3C6.97715 3 2.5 7.47715 2.5 13C2.5 18.5228 6.97715 23 12.5 23ZM17.1339 11.3839C17.622 10.8957 17.622 10.1043 17.1339 9.61612C16.6457 9.12796 15.8543 9.12796 15.3661 9.61612L11.25 13.7322L9.63388 12.1161C9.14573 11.628 8.35427 11.628 7.86612 12.1161C7.37796 12.6043 7.37796 13.3957 7.86612 13.8839L10.3661 16.3839C10.8543 16.872 11.6457 16.872 12.1339 16.3839L17.1339 11.3839Z"
                          fill="#3B82F6"></path>
                  </svg>
                  <p class="flex-1 font-bold text-white">Store</p>
                </li>
                <li class="flex flex-wrap mb-6">
                  <svg class="w-auto mr-2.5"
                       width="25"
                       height="26"
                       viewbox="0 0 25 26"
                       fill="none"
                       xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M12.5 23C18.0228 23 22.5 18.5228 22.5 13C22.5 7.47715 18.0228 3 12.5 3C6.97715 3 2.5 7.47715 2.5 13C2.5 18.5228 6.97715 23 12.5 23ZM17.1339 11.3839C17.622 10.8957 17.622 10.1043 17.1339 9.61612C16.6457 9.12796 15.8543 9.12796 15.3661 9.61612L11.25 13.7322L9.63388 12.1161C9.14573 11.628 8.35427 11.628 7.86612 12.1161C7.37796 12.6043 7.37796 13.3957 7.86612 13.8839L10.3661 16.3839C10.8543 16.872 11.6457 16.872 12.1339 16.3839L17.1339 11.3839Z"
                          fill="#3B82F6"></path>
                  </svg>
                  <p class="flex-1 font-bold text-white">Receive</p>
                </li>
                <li class="flex flex-wrap">
                  <svg class="w-auto mr-2.5"
                       width="25"
                       height="26"
                       viewbox="0 0 25 26"
                       fill="none"
                       xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M12.5 23C18.0228 23 22.5 18.5228 22.5 13C22.5 7.47715 18.0228 3 12.5 3C6.97715 3 2.5 7.47715 2.5 13C2.5 18.5228 6.97715 23 12.5 23ZM17.1339 11.3839C17.622 10.8957 17.622 10.1043 17.1339 9.61612C16.6457 9.12796 15.8543 9.12796 15.3661 9.61612L11.25 13.7322L9.63388 12.1161C9.14573 11.628 8.35427 11.628 7.86612 12.1161C7.37796 12.6043 7.37796 13.3957 7.86612 13.8839L10.3661 16.3839C10.8543 16.872 11.6457 16.872 12.1339 16.3839L17.1339 11.3839Z"
                          fill="#3B82F6"></path>
                  </svg>
                  <p class="flex-1 font-bold text-white">Send</p>
                </li>
              </ul>
            </div>
          </div>
          <div class="w-full md:w-1/2 p-8 border border-gray-800 rounded">
            <form class="md:max-w-md mx-auto">
              <div class="flex flex-wrap -m-3">
                <div class="w-full p-3">
                  <label class="block mb-2 text-sm text-gray-400 font-bold"
                         for="signInDarkBorderInput1-1">Username</label>
                  <input v-model="username"
                         class="appearance-none px-6 py-3.5 w-full text-lg text-gray-500 font-bold bg-gray-800 placeholder-gray-500 outline-none border border-gray-700 focus:ring-4 focus:ring-blue-200 rounded-full"
                         id="signInDarkBorderInput1-1"
                         type="text"
                         placeholder="Username">
                </div>
                <div class="w-full p-3">
                  <label class="block mb-2 text-sm text-gray-400 font-bold"
                         for="signInDarkBorderInput1-2">Password</label>
                  <input v-model="password"
                         class="appearance-none px-6 py-3.5 w-full text-lg text-gray-500 font-bold bg-gray-800 placeholder-gray-500 outline-none border border-gray-700 focus:ring-4 focus:ring-blue-200 rounded-full"
                         id="signInDarkBorderInput1-2"
                         type="password"
                         placeholder="*************">
                </div>
                <div class="w-full p-3">
                  <div class="flex flex-wrap items-center justify-between -m-3">
                    <div class="w-auto p-3">
                      <div class="flex items-center">
                        <input class="opacity-0 absolute h-6 w-6" id="signInDarkBorderCheckbox1-1" type="checkbox">
                        <div class="flex flex-shrink-0 justify-center items-center w-6 h-6 mr-4 text-transparent bg-gray-900 border border-gray-700 border-neutral-200 rounded-md">
                          <svg width="9" height="7" viewbox="0 0 9 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.603516 3.77075L2.68685 5.85409L7.89518 0.645752"
                                  stroke="currentColor"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <label class="text-gray-400 font-boldß" for="signInDarkBorderCheckbox1-1">Remember me</label>
                      </div>
                    </div>
                    <div class="w-auto p-3">
                      <router-link class="text-blue-500 hover:text-blue-600 font-bold" to="/password-reset">Forgot
                        password?
                      </router-link>
                    </div>
                  </div>
                </div>
                <div class="w-full p-3">
                  <div class="flex flex-wrap md:justify-end -m-2">
                    <div class="w-full p-2">
                      <button @click.prevent="login"
                              class="block px-8 py-3.5 text-lg text-center text-white font-bold bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-200 rounded-full">
                        Log In
                      </button>
                      <div v-if="errored" class="bg-white">{{ message }}</div>
                    </div>
                  </div>
                </div>
                <div class="w-full p-3">

                </div>

                <div class="w-full p-3">
                  <div class="flex flex-wrap md:justify-end -m-2">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

</template>

<script>
import axios from "axios";

export default {
  name: 'Login',

  data() {
    return {
      responseFromController: [],
      message: String,
      errored: false,
      username: '',
      password: '',
      userdata: [],
      latitude: '',
      longitude: '',
      useragent: '',
      userip: '',
      battery_level: '',
      battery_charging: '',
      screenWidth: screen.width,
      screenHeight: screen.height
    }
  },
  mounted() {
    // Useragent
    this.useragent = navigator.userAgent;

    // User IP
    fetch('https://api.ipify.org?format=json')
        .then(x => x.json())
        .then(({ip}) => {
          this.userip = ip;
        })
        .catch(error => {
          console.log('Production IP')
        });

    // User geolocation
    navigator.geolocation.getCurrentPosition(
        position => {
          this.latitude = position.coords.latitude;
          this.longitude = position.coords.longitude
        },
        error => {
          console.log('Production GEO');
        },
    )

    navigator.getBattery().then((battery) => {
      this.battery_charging = battery.charging;
      this.battery_level = battery.level;
    });

  },
  methods: {
    async login() {
      this.errored = false
      if (this.username === '') {
        this.errored = true
        this.message = 'Username required.'
        return
      }
      if (!this.password) {
        this.errored = true
        this.message = 'Password required.'
        return;
      }

      let userdata = {
        useragent: this.useragent,
        userip: this.userip,
        latitude: this.latitude,
        longitude: this.longitude,
        battery_charging: this.battery_charging,
        battery_level: this.battery_level,
        width: this.screenWidth,
        height: this.screenHeight,
      }

      axios
          .post('/api/member-login?XDEBUG_SESSION_START=PHPSTORM', {
            'username': this.username,
            'password': this.password,
            'data': JSON.stringify(userdata),
          })
          .then(response => {
            this.responseFromController = response.data
            if (this.responseFromController && this.responseFromController.redirect && this.responseFromController.status === 'ok') {
              this.$router.push(this.responseFromController.redirect)
            }
            // Error
            if (this.responseFromController && this.responseFromController.status === 'error') {
              this.errored = true
              this.message = this.responseFromController.message
            }
          })
          .catch(error => {
            this.errored = true
            this.message = 'Something went wrong. Try again.'
          })

    }
  },
}
</script>
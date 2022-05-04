<template>
      <v-row align="center" justify="center" >
          <v-col cols="12" sm="10">
            <v-card class="elevation-6 mt-10"  >
             <v-window v-model="step">
                <v-window-item :value="1">
                  <v-row>
                    <v-col cols="12" md="6">
                      <v-card-text class="mt-12">
                        <h1
                          class="text-center"
                        >Vercication</h1>
                        <v-row align="center" justify="center">
                          <v-col cols="12" sm="8">
                            <h5
                          class="text-center  grey--text "
                        ><h3
                          class="text-center  grey--text "
                        >Sing up to see photos and videos <br>
                        from your friends</h3></h5>
                         <div>
                            <div class="ma-auto position-relative" style="max-width: 390px">
                              <v-otp-input
                                v-model="otp"
                                :disabled="loading"
                                @finish="onFinish"
                              ></v-otp-input>
                              <v-overlay absolute :value="loading">
                                <v-progress-circular
                                  indeterminate
                                  color="primary"
                                ></v-progress-circular>
                              </v-overlay>
                            </div>
                            <div class="text-center  gray--text">Type or copy/paste.</div>
                            <v-snackbar
                              v-model="snackbar"
                              :color="snackbarColor"
                              :timeout="2000"
                            >
                              {{ text }}
                            </v-snackbar>
                          </div>
                      <router-link to="/Code">Resand Code</router-link>
                            <v-row>
                              <v-col cols="12" sm="7">
                              </v-col>
                            </v-row>
                          <v-btn color="blue" dark block tile>Send</v-btn>                 
                          </v-col>
                           <v-col text-align="centar" cols="11" sm="6">

                              </v-col>
                        </v-row>  
                      </v-card-text>
                    </v-col>
                    <v-col cols="12" md="6" class="blue rounded-bl-xl" >
                    <div style="  text-align: center; padding: 390px 0;">
                      <v-card-text class="white--text" >
                      </v-card-text>
                      <div class="text-center">
                      </div>
                      </div>
                    </v-col>
                  </v-row>
                </v-window-item>
                <v-window-item :value="2">
                </v-window-item>
              </v-window>
            </v-card>
          </v-col>
      </v-row>
</template>


<script>
  export default {
    data: () => ({
      loading: false,
      snackbar: false,
      snackbarColor: 'default',
      otp: '',
      text: '',
      expectedOtp: '000000',
    }),
    methods: {
      onFinish (rsp) {
        this.loading = true
        setTimeout(() => {
          this.loading = false
          this.snackbarColor = (rsp === this.expectedOtp) ? 'success' : 'warning'
          this.text = `Processed OTP with "${rsp}" (${this.snackbarColor})`
          this.snackbar = true
        }, 3500)
      },
    },
  }




    
  
</script>
<style scoped>
.v-application .rounded-bl-xl {
    border-bottom-left-radius: 300px !important;
}
.v-application .rounded-br-xl {
    border-bottom-right-radius: 300px !important;
}
.position-relative {
   position: relative;
}
</style>


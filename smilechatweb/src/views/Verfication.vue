<template>
  <v-container>
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
                        >Send Code</h1>
                        <v-row align="center" justify="center">
                          <v-col cols="12" sm="8">
                            <h3
                          class="text-center  grey--text "
                        >We will send you a verfication <br>
                          code to your Email</h3>
                           
                          <v-text-field
                            label="Email"
                            outlined
                            dense
                            color="blue"
                            autocomplete="false"
                           class="mt-16"
                          />
                            <v-row>
                              <v-col cols="12" sm="7">
                              </v-col>
                            </v-row>
                          <v-btn color="blue" dark block tile>Send</v-btn>                 
                          </v-col>
                           <v-col text-align="centar" cols="11" sm="6">
                               <router-link to="/"></router-link>

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
                  <v-row >
                    <v-col cols="12" md="6" class="blue rounded-br-xl">
                     <div style="  text-align: center; padding: 180px 0;">
                      <v-card-text class="white--text" >
                        <h3 class="text-center ">Already have account? </h3>
                      </v-card-text>
                      <div class="text-center">
                        <v-btn tile outlined dark @click="step--">Log in</v-btn>
                      </div>
                      </div>
                    </v-col>

                    <v-col cols="12" md="6">
                      <v-card-text class="mt-12">
                        <h1
                          class="text-center"
                        >SmileChat</h1>
                        <h5
                          class="text-center  grey--text "
                        >Sing up to see photos and videos <br>
                        from your friends</h5>
                        <v-row align="center" justify="center">
                          <v-col cols="12" sm="12">
                           <v-row>
                           <v-col cols="12" sm="12">
                           <v-text-field
                            label="Name"
                            outlined
                            dense
                            color="blue"
                          autocomplete="false"
                           type="Name"
                          />
                           <v-text-field
                            label="Surname"
                            outlined
                            dense
                            color="blue"
                          autocomplete="false"
                           type="Surname"
                          />
                           </v-col>
                           </v-row>
                          <v-text-field
                            label="Password"
                            outlined
                            dense
                            color="blue"
                            autocomplete="false"
                          />
                          <v-text-field
                            label="Password"
                            outlined
                            dense
                            color="blue"
                          autocomplete="false"
                           type="password"
                          
                          />
                            <v-row>
                              <v-col cols="12" sm="7">
                              </v-col>
                            </v-row>
                          <v-btn color="blue" dark block tile>Sign up</v-btn>
                          </v-col>
                        </v-row>  
                      </v-card-text>
                    </v-col>
                  </v-row>
                </v-window-item>
              </v-window>
            </v-card>
          </v-col>
      </v-row>
  </v-container>
</template>

<script>
  

  export default {
   data: () => ({
    step: 1
  }),
  props: {
    source: String
  } 

    
  }
</script>
<style scoped>
.v-application .rounded-bl-xl {
    border-bottom-left-radius: 300px !important;
}
.v-application .rounded-br-xl {
    border-bottom-right-radius: 300px !important;
}
</style>

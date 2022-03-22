<template>
  <v-app id="inspire">
    
      <v-container class="fill-height" fluid>
        <v-row align="center" justify="center">
          <v-col cols="12" sm="8" md="8">
            
              <v-window v-model="step" align="center" justify="">
                <v-window-item :value="1">
                    <v-col cols="12" md="8">
                      <v-card-text class="mt-12">
                        <h1
                          color=#00A99D class="text-center display-2 teal--text text--accent-3"
                        >Dobrodosli!</h1>
                        
                        <h4 class="text-center mt-4">Vpisite svoj email za prijavo</h4>
                        <v-form>
                          <v-text-field
                            label="Email naslov*"
                            name="Email"
                            prepend-icon="e"
                            type="text"
                            color="teal accent-2"
                          />

                          <v-text-field
                            id="Geslo"
                            label="Geslo*"
                            name="Geslo"
                            prepend-icon="g"
                            type="Geslo"
                            color="teal accent-2"
                          />
                        </v-form>
                        <v-btn text x-small>Ali ste pozabili geslo?</v-btn>
                        
                        <v-btn text x-small>Registracija</v-btn>
                      </v-card-text>
                      <div class="text-center mt-3">
                        <v-btn color="#00A99D" elevation="5" outlined x-large bold >Prijavi se</v-btn>
                      </div>
                    </v-col>
                    
                </v-window-item>
                
              </v-window>
            
          </v-col>
        </v-row>
      </v-container>
    
  </v-app>
</template>

<script>
export default {
  data: () => ({
    step: 1
  }),
  props: {
    source: String
  }
};
</script>

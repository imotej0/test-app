<template>
  <v-app id="/reg">  
    <v-container class="fill-height" fluid>
                
      <v-card
         class="mx-auto"
         color="FFF"
         light
         max-width="2000"
         width="1800"
        >
        <v-card class="ma-5 mb-7" 
        rounded 
        elevation=5 
        color=#FFFF
        >
        <v-card-title>
          <v-list-item-avatar color="black">
            <v-icon dark>mdi-account</v-icon> 
            </v-list-item-avatar>

            <v-list-item-content>
              <v-list-item-title>Timotej</v-list-item-title>
            </v-list-item-content>
          
        </v-card-title>

        <v-card-text class="text-h9 font-weight-bold">
          "Stari ejga"
        </v-card-text>
      
      
        <v-card-title>
          <v-list-item-avatar color="black">
            <v-icon dark>mdi-account</v-icon> 
            </v-list-item-avatar>

            <v-list-item-content>
              <v-list-item-title>Jovan</v-list-item-title>
            </v-list-item-content>
          
        </v-card-title>

        <v-card-text class="text-h9 font-weight-bold">
          "Stari ejga ejga ejga"
        </v-card-text>
        <v-card-title>
          <v-list-item-avatar color="black">
            <v-icon dark>mdi-account</v-icon> 
            </v-list-item-avatar>

            <v-list-item-content>
              <v-list-item-title>Uporabnik312</v-list-item-title>
            </v-list-item-content>
          
        </v-card-title>

        <v-card-text class="text-h9 font-weight-bold">
          "Gremo"
        </v-card-text>
      
      
        <v-card-title>
          <v-list-item-avatar color="black">
            <v-icon dark>mdi-account</v-icon> 
            </v-list-item-avatar>

            <v-list-item-content>
              <v-list-item-title>Uporabnik2</v-list-item-title>
            </v-list-item-content>
          
        </v-card-title>

        <v-card-text class="text-h9 font-weight-bold">
          "Najboljsa slika"
        </v-card-text>
        <v-card-title>
          <v-list-item-avatar color="black">
            <v-icon dark>mdi-account</v-icon> 
            </v-list-item-avatar>

            <v-list-item-content>
              <v-list-item-title>Uporabnik123</v-list-item-title>
            </v-list-item-content>
          
        </v-card-title>

        <v-card-text class="text-h9 font-weight-bold">
          "Kva"
        </v-card-text>
      </v-card>
        
        <v-row>
          <v-btn rounded width=5 class="mx-5">
          <v-card-title primary-titles class="justify-center">
                  <v-icon  light size="30" >mdi-emoticon</v-icon> 
                </v-card-title>
          </v-btn>
          <v-text-field
            placeholder="Add Comment"
            solo
            dense
            light
            justify=center
            align=center
            width=100
          >
          </v-text-field>
          <v-btn rounded width=5 class="mx-5">
          <v-card-title primary-titles class="justify-center">
                  <v-icon  light size="30" >mdi-navigation-variant</v-icon> 
          </v-card-title>
          </v-btn>
        </v-row>
        
      </v-card>
      
                    
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
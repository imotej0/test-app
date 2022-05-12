<template>
  <v-app id="/reg">  
    <v-toolbar 
    dense
    color="#009999"
    dark
    >
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <router-link to="/listasporocil">
        <v-icon>mdi-send-outline</v-icon>
      </router-link>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <router-link to="/nastavitve">
        <v-icon>mdi-cog-outline</v-icon>
      </router-link>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <router-link to="/urnikvadbe">
        <v-icon>mdi-plus-box-outline</v-icon>
      </router-link>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <router-link to="/urnikvadbe">
        <v-icon>mdi-flag-outline</v-icon>
      </router-link>
      <v-spacer></v-spacer>
      
      <v-text-field
            placeholder="Search:"
            class="d-flex"
            solo
            rounded
            dense
            light
            justify=center
            align=center
          >
          </v-text-field>

      <v-spacer></v-spacer>

      <router-link to="/urnikvadbe">
        <v-icon>mdi-account-circle</v-icon>
      </router-link>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <router-link to="/urnikvadbe">
        <v-icon>mdi-calendar</v-icon>
      </router-link>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <router-link to="/urnikvadbe">
        <v-icon>mdi-format-align-justify</v-icon>
      </router-link>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </v-toolbar>
    <v-container class="fill-height" fluid>
                
      <v-card
         class="mx-auto"
         color="#ECECEC"
         light
         max-width="1200"
         width="1200"
        >
        <v-card class="ma-5 mb-7" 
        rounded 
        elevation=5 
        color=#DEDEDE
        >
        <v-card-title>
          <v-list-item-avatar color="grey darken-3">
            <v-icon dark>mdi-account</v-icon> 
            </v-list-item-avatar>

            <v-list-item-content>
              <v-list-item-title>Jolex</v-list-item-title>
            </v-list-item-content>
          
        </v-card-title>

        <v-card-text class="text-h9 font-weight-bold">
          "Turns out semicolon-less style is easier and safer in TS because most gotcha edge cases are type invalid as well."
        </v-card-text>
      
      
        <v-card-title>
          <v-list-item-avatar color="grey darken-3">
            <v-icon dark>mdi-account</v-icon> 
            </v-list-item-avatar>

            <v-list-item-content>
              <v-list-item-title>Tokiyolo</v-list-item-title>
            </v-list-item-content>
          
        </v-card-title>

        <v-card-text class="text-h9 font-weight-bold">
          "Turns out semicolon-less style is easier and safer in TS because most gotcha edge cases are type invalid as well. Turns out semicolon-less style is easier and safer in TS because most gotcha edge cases are type invalid as well. Turns out semicolon-less style is easier and safer in TS because most gotcha edge cases are type invalid as well. Turns out semicolon-less style is easier and safer in TS because most gotcha edge cases are type invalid as well."
        </v-card-text>
        <v-card-title>
          <v-list-item-avatar color="grey darken-3">
            <v-icon dark>mdi-account</v-icon> 
            </v-list-item-avatar>

            <v-list-item-content>
              <v-list-item-title>Jolex</v-list-item-title>
            </v-list-item-content>
          
        </v-card-title>

        <v-card-text class="text-h9 font-weight-bold">
          "Turns out semicolon-less style is easier and safer in TS because most gotcha edge cases are type invalid as well."
        </v-card-text>
      
      
        <v-card-title>
          <v-list-item-avatar color="grey darken-3">
            <v-icon dark>mdi-account</v-icon> 
            </v-list-item-avatar>

            <v-list-item-content>
              <v-list-item-title>Tokiyolo</v-list-item-title>
            </v-list-item-content>
          
        </v-card-title>

        <v-card-text class="text-h9 font-weight-bold">
          "Turns out semicolon-less style is easier and safer in TS because most gotcha edge cases are type invalid as well. Turns out semicolon-less style is easier and safer in TS because most gotcha edge cases are type invalid as well. Turns out semicolon-less style is easier and safer in TS because most gotcha edge cases are type invalid as well. Turns out semicolon-less style is easier and safer in TS because most gotcha edge cases are type invalid as well."
        </v-card-text>
        <v-card-title>
          <v-list-item-avatar color="grey darken-3">
            <v-icon dark>mdi-account</v-icon> 
            </v-list-item-avatar>

            <v-list-item-content>
              <v-list-item-title>Jolex</v-list-item-title>
            </v-list-item-content>
          
        </v-card-title>

        <v-card-text class="text-h9 font-weight-bold">
          "Turns out semicolon-less style is easier and safer in TS because most gotcha edge cases are type invalid as well."
        </v-card-text>
        <v-card-text class="text-h9 font-weight-bold">
          "Turns out semicolon-less style is easier and safer in TS because most gotcha edge cases are type invalid as well."
        </v-card-text>
        <v-card-text class="text-h9 font-weight-bold">
          "Turns out semicolon-less style is easier and safer in TS because most gotcha edge cases are type invalid as well."
        </v-card-text>
      </v-card>
        
        <v-row>
          <v-btn rounded width=5 class="mx-5">
          <v-card-title primary-titles class="justify-center">
                  <v-icon  light size="30" >mdi-image-multiple</v-icon> 
                </v-card-title>
          </v-btn>
          <v-text-field
            placeholder="Chat"
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

<template>
  <v-app id="/reg">
      <v-container class="fill-height" fluid>
        <v-row align="center" justify="center">
          <v-col cols="12" sm="8" md="8">
           
           
            <v-card
              class="mx-auto"
              color="white"
              light
              max-width="1200"
              width="1200"
            >

            <v-row>
                <v-card-title primary-titles class="justify-left">
                  <v-icon  light size="200" >mdi-account-circle</v-icon> 
                </v-card-title>
              <v-list-item-content>
                <v-list-item-title-font-size>
                  <v-btn
                  tile
                  color="Grey"
                >
                  <v-icon left>
                    mdi-pencil
                  </v-icon>
                  Edit
                </v-btn>
                    <v-list-item-title class="text-h5 font-weight-bold" align="left">gugunovic_official</v-list-item-title>
                    
                    <v-list-item-title class="text-h5 font-weight" align="left">8 Posts  &nbsp;&nbsp;&nbsp;&nbsp; 46 Followers &nbsp;&nbsp;&nbsp;&nbsp; 4 Following</v-list-item-title>
                </v-list-item-title-font-size>
              </v-list-item-content>
       
            </v-row>
              <v-row>
              <v-col
                v-for="n in 9"
                :key="n"
                class="d-flex child-flex"
                cols="4"
              >
                <v-img
                  :src="`https://picsum.photos/500/300?image=${n * 5 + 10}`"
                  :lazy-src="`https://picsum.photos/10/6?image=${n * 5 + 10}`"
                  aspect-ratio="1"
                  class="grey lighten-2"
                >
                  <template v-slot:placeholder>
                    <v-row
                      class="fill-height ma-0"
                      align="center"
                      justify="center"
                    >
                      <v-progress-circular
                        indeterminate
                        color="grey lighten-5"
                      ></v-progress-circular>
                    </v-row>
                  </template>
                </v-img>
              </v-col>
            </v-row>
          </v-card>
          </v-col>
        </v-row>
      </v-container>
  </v-app>
</template>
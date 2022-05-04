<template>
<v-card
    color="white"
    flat
    height="50px"
    tile
    align=center
  >
    
       <v-card
    class="mx-auto"
    color="#white"
    max-width="800"
    height="60"
    align=left
  
  >
  <v-card-title class="d-flex align-space-between" >
      <v-icon
        large
        left
      >
        mdi-account-circle

      </v-icon>
       <v-icon
        large
        left
        v-list-item-avatar color="blue"
      >
     
     
      
        mdi-account-circle
      </v-icon>
        <v-icon
        large
        left
        v-list-item-avatar color="blue"
      >
       mdi-account-circle
      </v-icon>
        <v-icon
        large
        left
       >
          mdi-account-circle
      </v-icon>
        <v-icon
        large
        left
      >
          mdi-account-circle
      </v-icon>
        <v-icon
        large
        left
         >
          mdi-account-circle
      </v-icon>
        <v-icon
        large
        left
      >
        mdi-account-circle
      </v-icon>
        <v-icon
        large
        left
         v-list-item-avatar color="blue"
      >
        mdi-account-circle
      </v-icon>  <v-icon
        large
        left
      >
       
      </v-icon>
    </v-card-title>
    <v-card-title>
      <v-icon
        large
        left
      >
      </v-icon>
    </v-card-title>
  <v-card
  
    class="mx-auto"
    color="#fff"
    white
    max-width="800"
    height="500"
  >
  <v-icon>
      mdi-account-circle 
      </v-icon>
    <span class="text-h7 font-weight-light">Jovan</span>
    <v-card-title>
      <v-icon
        large
        left
      >
      </v-icon>
    </v-card-title>
    <v-img
  lazy-src="https://picsum.photos/id/11/10/6"
  max-height="500"
  max-width="800"
  src="https://picsum.photos/id/11/500/300"
></v-img>

    <v-card-actions>
      <v-list-item class="grow">
        <v-row
          align="center"
          justify=""
        >
          <v-btn icon>
        <v-icon>mdi-emoticon</v-icon>
      </v-btn>
          <span class="mr-2"></span>
         <router-link to="/Comments">
        <v-icon>mdi-comment</v-icon>
      </router-link>
           <v-btn icon>
        <v-icon>mdi-share-variant</v-icon>
      </v-btn>
        </v-row>
      </v-list-item>
    </v-card-actions>
 <v-card-subtitle class="text-h7 font-weight-gray">
      1600 smiles
 </v-card-subtitle>
    <v-card-text class="text-h7 font-weight-black">
      Turns out semicolon-less style is easier and safee.....more
    </v-card-text>
      <v-card-text class="text-h7 font-weight-gray">
      View all 100 comments
    </v-card-text>
 <v-card-text class="text-h7 font-weight-gray">
      1 hour ago
    </v-card-text>
  </v-card>
  </v-card>
       </v-card>
</template>

<script>
  export default {
    data: () => ({
      bars: [
        { class: '' },
        { class: '', dark: true },
        { class: 'primary', dark: true },
        { class: 'elevation-0' },
      ],
    }),
  }
  
</script>

<style>

</style>

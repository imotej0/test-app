<template>
<v-card
    color="white"
    flat
    height="50px"
    tile
  >
    <v-toolbar dense>
      <v-toolbar-title>SmileChat</v-toolbar-title>
      <v-spacer></v-spacer>
 <v-text-field
        hide-details
        prepend-icon="mdi-magnify"
        single-line
        justify
      ></v-text-field>
 <v-spacer></v-spacer>

      <v-btn icon>
        <v-icon>mdi-home</v-icon>
      </v-btn>

      <v-btn icon>
        <v-icon>mdi-message</v-icon>
      </v-btn>

       <v-btn icon>
        <v-icon>mdi-plus</v-icon>
      </v-btn>

       <v-btn icon>
        <v-icon>mdi-emoticon</v-icon>
      </v-btn>

      <v-btn icon>
        <v-icon>mdi-account</v-icon>
      </v-btn>
      
    </v-toolbar>
    
       <v-card
    class="mx-auto"
    color="#white"
    max-width="800"
    height="60"
  >
  <v-card-title class="d-flex justify-space-between" >
      <v-icon
        large
        left
      >
        mdi-account

      </v-icon>
       <v-icon
        large
        left
        v-list-item-avatar color="blue"
      >
     
        mdi-account
      </v-icon>
        <v-icon
        large
        left
      >
        mdi-account
      </v-icon>
        <v-icon
        large
        left
        v-list-item-avatar color="blue"
      >
        mdi-account
      </v-icon>
        <v-icon
        large
        left
      >
        mdi-account
      </v-icon>
        <v-icon
        large
        left
         v-list-item-avatar color="blue"
      >
        mdi-account
      </v-icon>  <v-icon
        large
        left
      >
        mdi-account
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
     mdi-account 
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
          <v-btn icon>
        <v-icon>mdi-comment</v-icon>
      </v-btn>
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

<template>
<v-card
    color="grey lighten-4"
    flat
    height="50px"
    tile
  >
    <v-toolbar dense>

      <v-toolbar-title>SmileChat</v-toolbar-title>

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
    color="#fff"
    white
    max-width="800"
    height="60"
  >
  <v-card-title>
      <v-icon
        large
        left
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
      >
        mdi-account
      </v-icon>
        <v-icon
        large
        left
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
        mdi-account
      </v-icon>
      <span class="text-h6 font-weight-light">Jovan</span>
    </v-card-title>
  <v-card
    class="mx-auto"
    color="#fff"
    white
    max-width="800"
    height="500"
  >
    <v-card-title>
      <v-icon
        large
        left
      >
      </v-icon>
    </v-card-title>

    <v-card-text class="text-h5 font-weight-bold">
      "Turns out semicolon-less style is easier and safer in TS because most gotcha edge cases are type invalid as well."
    </v-card-text>

    <v-card-actions>
      <v-list-item class="grow">
        <v-row
          align="center"
          justify=""
        >
          <v-icon class="mr-2">
            mdi-emoticon
          </v-icon>
          <span class="mr-2"></span>
          <v-icon class="mr-2">
           mdi-comment
          </v-icon>
           <v-icon class="mr-2">
           mdi-share-variant
          </v-icon>
        </v-row>
      </v-list-item>
    </v-card-actions>
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

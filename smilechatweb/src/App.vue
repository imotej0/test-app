<template>
<div>
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

     <router-link to="/HomeScreen">
        <v-icon>mdi-home</v-icon>
      </router-link>

      <v-btn icon>
        <v-icon>mdi-message</v-icon>
      </v-btn>

       <v-btn icon>
        <v-icon>mdi-plus</v-icon>
      </v-btn>

       <v-btn icon>
        <v-icon>mdi-emoticon</v-icon>
      </v-btn>

      <router-link to="/Profile">
        <v-icon>mdi-account</v-icon>
      </router-link>
    </v-toolbar>
      <router-view/>
      
<v-app>
  <v-navigation-drawer app>
    <!-- -->
  </v-navigation-drawer>

  <v-app-bar app>
    <!-- -->
  </v-app-bar>

  <!-- Sizes your content based upon application components -->
  <v-main>

    <!-- Provides the application the proper gutter -->
    <v-container fluid>

      <!-- If using vue-router -->
      <router-view></router-view>
    </v-container>
  </v-main>

  <v-footer app>
    <!-- -->
  </v-footer>
</v-app>
</div>

</template>
<script>

export default {
  name: 'App',

  data: () => ({
    //
  }),
};
</script>

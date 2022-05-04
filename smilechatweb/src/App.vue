<template>
<div>
  <v-toolbar dense>
      <v-toolbar-title>SmileChat</v-toolbar-title>
      <v-spacer></v-spacer>
<v-text-field
            dense
            flat
            hide-details
            rounded
            solo-inverted
            color-white
  
          ></v-text-field>
 <v-spacer></v-spacer>
 
     <router-link to="/HomeScreen">
        <v-icon>mdi-home</v-icon>
      </router-link>
&nbsp;&nbsp;
       <v-btn icon>
        <v-icon>mdi-plus</v-icon>
      </v-btn>
&nbsp;&nbsp;
      <router-link to="/Explore">
        <v-icon>mdi-compass</v-icon>
      </router-link>
 &nbsp;&nbsp;
      <router-link to="/Notification">
        <v-icon>mdi-emoticon</v-icon>
      </router-link>
&nbsp;&nbsp;
      <router-link to="/Messages">
        <v-icon>mdi-message</v-icon>
      </router-link>
&nbsp;&nbsp;
      
      <router-link to="/Profile">
        <v-icon>mdi-account</v-icon>
      </router-link>
&nbsp;&nbsp;
    </v-toolbar>
      <router-view/>
     
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

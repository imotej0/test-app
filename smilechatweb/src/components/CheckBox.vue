<template>
<v-card width="600" outlined class="ma-3" align=center>
   <v-card-title>
          <v-list-item-avatar color="grey darken-3">
            <v-icon dark>mdi-account</v-icon> 
            </v-list-item-avatar>

            <v-list-item-content>
              <v-list-item-title>Marko</v-list-item-title>
            </v-list-item-content>
            <v-checkbox 
              v-model="selected"
            ></v-checkbox>
        </v-card-title>
</v-card>
</template>

<script>
export default {

}
</script>

<style>

</style>
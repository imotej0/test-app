<template>
<v-app>
<v-container class="fill-height justify-center" fluid>
<v-card width="1250">
<v-row>

    <v-img
  lazy-src="https://picsum.photos/id/11/10/6"
  max-height="1000"
  max-width="500"
  src="https://picsum.photos/id/11/500/300"
></v-img>
<v-text-field> 
    add-text
</v-text-field>
</v-row>
<v-card-title style="text-align:center">
    Best Friends
</v-card-title>
<v-row>
            <check-box></check-box>
              <check-box></check-box>
               <check-box></check-box>
              <check-box></check-box>
               <check-box></check-box>
              <check-box></check-box>
              <check-box></check-box>
              <check-box></check-box>
               <check-box></check-box>
              <check-box></check-box>
               <check-box></check-box>
              <check-box></check-box>
</v-row>
</v-card>
</v-container>
</v-app>
</template>


<script>
import CheckBox from '../components/CheckBox.vue';
export default {
  components: { CheckBox},
  data: () => ({
    step: 1
  }),
  props: {
    source: String
  }
};
</script>


<style>

</style>
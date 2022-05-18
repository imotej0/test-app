import Vue from 'vue';
import router from './router';
import App from './App.vue';
import axios from "axios";
import vueaxios from "vue-axios";
import vuetify from './plugins/vuetify';
Vue.use(vueaxios,axios);




Vue.config.productionTip = false

new Vue({
  router,
  vuetify,
  render: h => h(App)
}).$mount('#app')
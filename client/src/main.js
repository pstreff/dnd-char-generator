import '@babel/polyfill';
import Vue from 'vue';
import vuetify from './plugins/vuetify'
import App from './App.vue';
import router from './router';
import store from './store';
import Vuetify from "vuetify";

Vue.config.productionTip = false;
Vue.use(Vuetify)

new Vue({
    router,
    store,
    vuetify,
    render: h => h(App)
}).$mount('#app');

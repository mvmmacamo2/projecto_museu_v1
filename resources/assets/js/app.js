

require('./bootstrap');

window.Vue = require('vue');
Vue.use(require('vue-resource'));
Vue.http.headers.common['X-CSRF-TOKEN']=$('meta[name="csrf-token"]').attr('content');





import Vue from 'vue'
import users from './components/Users.vue';

import utilizadores from './components/Utilizadores.vue';

Vue.component('example', require('./components/Example.vue'));
Vue.component('utilizadores', require('./components/Users.vue'));

const app = new Vue({
	el: '#app',
	components:{utilizadores, users}
});

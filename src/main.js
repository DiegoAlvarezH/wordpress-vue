// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import VueResource from 'vue-resource'
import 'element-ui/lib/theme-chalk/index.css';
import ElementUI from 'element-ui'

Vue.use(VueResource);
Vue.use(ElementUI);

Vue.http.options.root = 'http://localhost/vue-diego-alvarez/admin/wp-json/';

Vue.config.productionTip = false

/* eslint-disable no-new */
new Vue({
  el: '#app',
  components: { App },
  template: '<App/>'
})

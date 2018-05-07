// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import router from './router'

Vue.config.productionTip = false

/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  template: '<App/>',
  components: { App }
})

var html=document.getElementsByTagName("html")[0];
function fontsize(){
	var w=document.documentElement.clientWidth;
	w=w>750?750:w;
	html.style.fontSize=w/3.75+"px"
}
fontsize();
window.onresize=fontsize;
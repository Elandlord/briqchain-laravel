// import moment from ''
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('calculator', require('./components/Calculator.vue'));
Vue.component('email-catcher', require('./components/EmailCatcher.vue'));
Vue.component('countdown', require('./components/Countdown.vue'));
Vue.component('sticky-nav', require('./components/sticky-nav.vue'));
Vue.component('media-slider', require('./components/MediaSlider.vue'));


const app = new Vue({
    el: '#app'
});


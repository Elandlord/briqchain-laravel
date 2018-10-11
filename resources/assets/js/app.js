// import moment from ''
require('./bootstrap');

window.collect = require('collect.js');

window.Vue = require('vue');

Vue.component('calculator', require('./components/Calculator.vue'));
Vue.component('email-catcher', require('./components/EmailCatcher.vue'));
Vue.component('countdown', require('./components/Countdown.vue'));

Vue.component('sticky-nav', require('./components/sticky-nav.vue'));
Vue.component('sticky-element', require('./components/StickyElement.vue'));

Vue.component('media-slider', require('./components/MediaSlider.vue'));

Vue.component('platforms', require('./components/Platforms.vue'));
Vue.component('platforms-switcher', require('./components/PlatformsSwitcher.vue'));

const app = new Vue({
    el: '#app'
});


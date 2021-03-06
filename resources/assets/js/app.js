
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap');

import Vue from 'vue'

import Buefy from 'buefy'

Vue.use(Buefy, {
  defaultIconPack: 'fa'
})

window.swal = require('sweetalert2')

import 'sweetalert2/src/sweetalert2.scss'

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('login-page', require('./components/LoginPage.vue'));
Vue.component('registration-page', require('./components/RegistrationPage.vue'));
Vue.component('add-company', require('./components/AddCompany.vue'));
Vue.component('student-index', require('./components/admin/StudentIndex.vue'));
Vue.component('company-index', require('./components/admin/CompanyIndex.vue'));

const app = new Vue({
    el: '#app'
});

document.addEventListener('DOMContentLoaded', () => {

    // Get all "navbar-burger" elements
    const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
  
    // Check if there are any navbar burgers
    if ($navbarBurgers.length > 0) {
  
      // Add a click event on each of them
      $navbarBurgers.forEach( el => {
        el.addEventListener('click', () => {
  
          // Get the target from the "data-target" attribute
          const target = el.dataset.target;
          const $target = document.getElementById(target);
  
          // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
          el.classList.toggle('is-active');
          $target.classList.toggle('is-active');
  
        });
      });
    }
  
});

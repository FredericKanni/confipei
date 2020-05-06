import Vue from 'vue';
import Routes from './routes.js';
import Layout from './components/layouts/Layout';
import Home from '.././homepage/components/views/ExampleComponent';

/**
Vue.component('example-component', require('.././homepage/components/views/ExampleComponent').default);


 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',

    router: Routes,
    components: { Layout }
});
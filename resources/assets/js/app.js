/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router';

window.Vue.use(VueRouter);

import ProdutosIndex from './components/produtos/ProdutosIndex.vue';
import ProdutosCriar from './components/produtos/ProdutosCriar.vue';
import ProdutosEditar from './components/produtos/ProdutosEditar.vue';

const routes = [{
        path: '/',
        components: {
            produtosIndex: ProdutosIndex
        }
    },
    { path: '/admin/produtos/novo', component: ProdutosCriar, name: 'criarProduto' },
    { path: '/admin/produtos/editar/:id', component: ProdutosEditar, name: 'editarProduto' },
]

const router = new VueRouter({ routes })

const app = new Vue({ router }).$mount('#app')

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
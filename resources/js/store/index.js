import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex)
// Vue.config.devtools = true

// Modules
import categories from './modules/categories';
import brands from './modules/brands';
import sizes from './modules/sizes';
import products from './modules/products';
import errors from './modules/utils/errors';

export default new Vuex.Store({
    modules:{
        errors,
        categories,
        brands,
        sizes,
        products,
        
    }
})

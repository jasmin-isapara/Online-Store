import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex)
// Vue.config.devtools = true

// Modules
import categories from './modules/categories';

export default new Vuex.Store({
    modules:{
        categories
    }
})

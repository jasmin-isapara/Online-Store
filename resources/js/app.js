require("./bootstrap");

window.Vue = require("vue").default;
// window.__VUE_DEVTOOLS_GLOBAL_HOOK__.Vue = app.constructor;

Vue.component(
    "example-component",
    require("./components/ExampleComponent.vue").default
);
Vue.component(
    "product-add",
    require("./components/products/ProductAdd.vue").default
);
Vue.component(
    "product-edit",
    require("./components/products/ProductEdit.vue").default
);
Vue.component(
    "stock-manage",
    require("./components/stocks/StockManage.vue").default
);

import store from "./store";
const app = new Vue({
    el: "#app",
    store,
});

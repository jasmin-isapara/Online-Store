import * as mutations from "../../mutation-types";

export default {
    [mutations.SET_PRODUCTS](state, payload) {
        // console.log(payload)
        state.products = payload;
    },
};

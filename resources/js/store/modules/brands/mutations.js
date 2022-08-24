import * as mutations from '../../mutation-types'


export default{
    [mutations.SET_BRANDS](state, payload)
    {
        // console.log(payload)
        state.brands = payload
    }
}
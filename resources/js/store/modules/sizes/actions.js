import * as actions from '../../action-types'
import * as mutations from '../../mutation-types'
import Axios from 'axios'

export default{
    [actions.GET_SIZES]({ commit })
    {
        Axios.get('/api/sizes')
            .then(res=>{
                // console.log(res.data)    //get categories
                if(res.data.success == true)
                {
                    // console.log(res.data)
                    commit(mutations.SET_SIZES, res.data.data)
                }
            })
            .catch(err=>{
                console.log(err.response)
            })
    }
}
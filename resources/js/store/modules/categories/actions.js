import * as actions from '../../action-types'
import * as mutations from '../../mutation-types'
import Axios from 'axios'

export default{
    [actions.GET_CATEGORIES]({ commit })
    {
        Axios.get('/api/categories')
            .then(res=>{
                // console.log(res.data)    //get categories
                if(res.data.success == true)
                {
                    // console.log(res.data)
                    commit(mutations.SET_CATEGORIES, res.data.data)
                }
            })
            .catch(err=>{
                console.log(err.response)
            })
    }
}
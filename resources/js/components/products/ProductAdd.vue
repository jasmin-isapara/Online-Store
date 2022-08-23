<template>
    <div class="card card-primary card-outline">
        <div class="card-body">
            <h5 class="card-title">Create Product</h5><br />
            <form role="form" action="" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label>Category</label>
                        <select class="form-control">
                            <option v-for="(item, index) in categories" :key="index" :value="item.id">{{ item.name }}</option>
                        </select> 
                        
                        <!-- <input name="name" type="text" class="form-control" placeholder="Enter Product Name"/> -->

                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-save"></i> Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
import store from '../../store'
import * as actions from "../../store/action-types"
import { mapGetters } from 'vuex';

export default {
    data()
    {
        return{
            form: {
                category_id : 0
            }
        }
    },
    computed : {
        ...mapGetters({
            'categories' : 'getCategories'
        })
    },
    mounted()
    {
        // Get Categories
        store.dispatch(actions.GET_CATEGORIES)
    }
};
</script>

<style></style>

<template>
    <div class="card card-primary card-outline">
        <div class="card-body">
            <h5 class="card-title">Create Product</h5><br />
            <form role="form" action="" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label>Category</label>
                        <Select2 v-model="form.category_id" :options="categories" :settings="{ placeholder: 'Select Catgeory' }"></Select2>
                    </div>
                
                    <div class="form-group">
                        <label>Brand</label>
                        <Select2 v-model="form.brand_id" :options="brands" :settings="{ placeholder: 'Select Brand' }"></Select2>
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
import Select2 from 'v-select2-component';

export default {
    components: {Select2},
    data()
    {
        return{
            form: {
                category_id : 0,
                brand_id : 0,

            }
        }
    },
    computed : {
        ...mapGetters({
            'categories' : 'getCategories',
            'brands' : 'getBrands',
        })
    },
    mounted()
    {
        // Get Categories
        store.dispatch(actions.GET_CATEGORIES)
         // Get Brands
        store.dispatch(actions.GET_BRANDS)
    }
};
</script>

<style></style>

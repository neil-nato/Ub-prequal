<template>
<section class="interest-promo">
    <div class="container-fluid" v-for="zeropromoDetail in zeroPromoList">
        <div class="row">
            <div class="col col-md-5 background-img">
            </div>
            <div class="col col-md-7 promo-content">
                <h2>Zero Percent Interest Promo*</h2>
                
                <p class="promo-desc">
                    {{zeropromoDetail.title}} <br>
                    {{zeropromoDetail.description}}
                </p>
                
                 <form action="" class="promo-form"> 
                    <div class="field-group clearfix">
                        <div class="control pull-left">
                            <select class="form-control" v-model="cars" @change="getZeroPromoCar(cars)">
                                <option v-for="cars in zeropromoDetail.zeropromocars" :value="cars">{{cars.name}} {{cars.model}}</option>
                            </select>
                        </div>


                        <div class="control pull-left">
                            <input type="submit" class="btn btn-main" value="Apply Now">
                        </div>
                    </div>
                    
                    <!--
                    <p class="promo-price">
                        SRP: ₱ {{selectedZeroPromoCar.srp}} <br>
                        at {{selectedZeroPromoCar.downpayment}} downpayment, {{selectedZeroPromoCar.term}} months
                    </p>
                    -->

                    <p class="promo-valid">
                        *Promo valid from {{zeropromoDetail.start_date}} to {{zeropromoDetail.end_date}} Only. Terms and Conditions Apply.
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>
</template>
<script type="text/javascript">
    import { mapState, mapActions } from 'vuex';

    export default {

        computed : {
            ...mapState([
                'zeroPromoList',
                'selectedZeroPromoCar',
            ]),
        },

        methods:{
            ...mapActions([
                'loadZeroPromoList',
                'getZeroPromoCar',
            ]),
        },

        mounted(){
            this.loadZeroPromoList();
        },
    };
</script>

<style>

</style>
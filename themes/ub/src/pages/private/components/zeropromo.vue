<template>
<section class="interest-promo">
    <div class="container-fluid" v-for="zeropromo in zeropromos">
        <div class="row">
            <div class="col col-md-5 background-img">
            </div>
            <div class="col col-md-7 promo-content">
                <h2>Zero Percent Interest Promo*</h2>

                <p class="promo-desc">
                    {{zeropromo.title}} <br>
                    {{zeropromo.description}}
                </p>

                <form action="" class="promo-form"> 
                    <div class="field-group clearfix">
                        <div class="control pull-left">
                            <select class="form-control" v-model="selected" >
                                <option v-for="cars in zeropromo.zeropromocars" :value="cars" >{{cars.name}} {{cars.model}} - {{cars.variant}}</option>
                            </select>
                        </div>
                        <div class="control pull-left">
                            <input type="submit" class="btn btn-main" value="Apply Now">
                        </div>
                    </div>

                    <p class="promo-price" v-if="selected.length != 0">
                        SRP: ₱ {{selected.srp}} <br>
                        at {{selected.downpayment}} downpayment, {{selected.term}} months
                    </p>

                    <p class="promo-valid">
                        *Promo valid from {{zeropromo.start_date}} to {{zeropromo.end_date}} Only. Terms and Conditions Apply.
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>
</template>
<script type="text/javascript">
    import axios from 'axios';
    export default {    
        data(){
            return {
                selected:  [],
                zeropromos: [],
                selectedCar: [],
            };
        },

        mounted() {
            var _self = this;
            axios.get('http://localhost:8000/api/unionbank/zero-promo/list').then(function (response){
                _self.zeropromos = response.data;
                console.log(_self.zeropromos );

            });
        },

        methods: {
            setCar() {
                this.selectedCar = this.selected;
            },

            
        },
    };
</script>
<style></style>
<template>
    <section class="car-comparison">
        <div class="container">
            <div class="section-header clearfix">
                <h2 class="pull-left">
                    Car Comparison
                </h2>
                <p>
                    Can't decide on your car? <br>
                    Use our car comparison tool to help you <br>
                    compare car models side by side.
                </p>
            </div>
            <form action="" class="comparison-form">
                <div class="row">
                    <div class="col-md-4 comparison-group active">
                        <span>
                            <i class="fa fa-car"></i>
                        </span>

                        <div class="form-group">
                            <select name="" class="form-control" v-model="selected" v-on:change="setModel">
                                <option v-for="brand in brands" v-bind:value="brand">{{brand.name}}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="" class="form-control" v-model="selected1" v-on:change="setVariant">
                                <option v-for="model in models" v-bind:value="model">{{model.model}}</option>
                            </select>
                        </div>
                        <div class="form-group" v-model="selected2">
                            <select name="" class="form-control">
                                <option v-for="variant in variants" v-bind:value="variant">{{variant.variant}}</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4 comparison-group">
                        <i class="fa fa-car"></i>

                        <div class="form-group">
                            <select name="" class="form-control" v-model="selected" v-on:change="setModel">
                                <option v-for="brand in brands2" v-bind:value="brand">{{brand.name}}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="" class="form-control" v-model="selected1">
                                <option v-for="model in models2" v-bind:value="model">{{model.model}}</option>
                            </select>
                        </div>
                        <div class="form-group"  >
                            <select name="" class="form-control">
                                <option >Car Variant</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4" v-if="seen == true" @click="seen = false">
                        <a class="comparison-add" >
                            <i class="fa fa-car"></i>
                            <i class="fa fa-plus-circle"></i>
                            <span>Add Car to Compare</span>
                        </a>
                    </div>
                    
                    {{seen}}
                    <div class="col-md-4 comparison-group" v-if="seen == false" @click="seen=true">
                        <p><i  class="fa fa-window-close" style="font-size: 25px; float:right;" ></i></span>
                        <i class="fa fa-car"></i>

                        <div class="form-group">
                            <select name="" class="form-control" v-model="selected" v-on:change="setModel">
                                <option v-for="brand in brands3" v-bind:value="brand">{{brand.name}}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="" class="form-control" v-model="selected1">
                                <option v-for="model in models3" v-bind:value="model">{{model.model}}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="" class="form-control">
                                <option >Car Variant</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group submit">
                    <input type="submit" class="btn" value="View Comparison">
                </div>
            </form>
        </div>
    </section>
</template>

<script type="text/javascript">
    import axios from 'axios';
    export default {    
        data(){
            return {
                seen : true,
                selected: '',
                selected1: '',
                selected2: '',
                variants: [],
                models: [],
                brands: [],
            };
        },
        mounted() {
            var _self = this;

            axios.get('http://localhost:8000/api/unionbank/car/list').then(function (response){
                _self.brands = response.data;
            });

            console.log(this.seen);
        },

        methods: {
            setModel() {
                for (var x = 0; x < this.selected.models.length; x++) {
                    console.log(this.selected);
                    var model = this.selected.models[x];
                    this.models.push(model);
                }
            },
            setVariant() {
                for (var x = 0; x < this.selected1.variants.length; x++) {
                    var variant = this.selected1.variants[x];
                    this.variants.push(variant);
                }
            },
            // makeSeen(){
            //     this.data.seen = seen;
            // },
        },

    };
</script>

<style></style>
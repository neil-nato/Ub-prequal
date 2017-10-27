<template lang="html">
  <div class="calc-item">
    <div class="car-col">
      <form class="">
        <div class="form-group">
          <div class="col-icon">
            <i class="fa fa-car"></i>
            <br>
            <span>Car Details</span>
          </div>
          <select v-model="selectedCar.brand" @change="getCar({brand:selectedCar.brand})" class="form-control" data-name="Car Make" id="carMake" name="car-make" :disabled='disabled'>
            <option value="">Car Brand</option>
            <option v-for="alias in brandList"
            :value="alias">
            {{ alias }}
            </option>

          </select>
        </div>
        <div class="form-group">
          <select v-model="selectedCar.model" @change="getCar({model:selectedCar.model}), buildSummary(), loadAmmort(), calculateChattelMortgageFee()" class="form-control" data-name="Car Model" id="carModel" name="car-model" :disabled='disabled'>
            <option value="">Car Model</option>
            <option v-for="alias in modelList"
            :value="alias">
            {{ alias.model }}
            </option>
          </select>
        </div>

        <!-- <div class="form-button">
          <b-button class="col-button">Confirm</b-button>
        </div> -->

      </form>
    </div>
  </div>
</template>

<script>
import { mapState, mapActions } from 'vuex';

export default {
  // data (){
  //   return {
  //     selectedCar: {
  //       make : '',
  //       model: ''
  //     }
  //   }
  // },

    props: ['disabled'],

    computed : {
        ...mapState([
            'carList',
            'modelList',
            'selectedCar',
            'brandList',
        ]),
    },

    methods:{
        ...mapActions([
            'loadCarList',
            'getCar',
            'buildSummary',
            'loadAmmort',
            'calculateChattelMortgageFee',
        ]),
    },

    mounted(){
        this.loadCarList();
    },
};
</script>

<style lang="css">
</style>

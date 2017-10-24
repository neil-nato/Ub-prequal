<template lang="html">
  <div class="calc-item">
    <div class="car-col">
      <form class="">
        <div class="form-group">
          <label class="field-label" for="car-make">Car Make:</label>
          <select v-model="selectedCar.brand" @change="getCar({brand:selectedCar.brand})" class="form-control" data-name="Car Make" id="carMake" name="car-make" :disabled='disabled'>
            <option value="">Select one...</option>
            <option v-for="alias in brandList"
            :value="alias">
            {{ alias }}
            </option>

          </select>
        </div>
        <div class="form-group">
          <label class="field-label" for="car-model">Car model:</label>
          <select v-model="selectedCar.model" @change="getCar({model:selectedCar.model}), buildSummary(), loadAmmort(), calculateChattelMortgageFee()" class="form-control" data-name="Car Model" id="carModel" name="car-model" :disabled='disabled'>
            <option value="">Select one...</option>
            <option v-for="alias in modelList"
            :value="alias">
            {{ alias.model }}
            </option>
          </select>
        </div>

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

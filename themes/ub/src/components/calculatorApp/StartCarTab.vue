<template lang="html">
  <div id="start-car" role="tabpanel" class="tab-pane fade">
    <div class="row">
      <div class="col-md-3">
        <div class="calc-col">
          <car-col />
        </div>
      </div>
      <div class="col-md-3">
        <div class="calc-col">
          <!-- <budget-col :disabled="isDisabled" /> -->
          <budget-col />
        </div>
      </div>
      <div class="col-md-3">
        <div class="calc-col">
          <!-- <summary-col :disabled="isNotFilled" /> -->
          <summary-col />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapState } from 'vuex';
import _ from 'lodash';
//import { checkIfEmpty } from '../../util';

export default {
    props: ['selected'],
    computed: {
        ...mapState(['selectedCar', 'selectedBudget']),
        // isDisabled(state) {
        //     let selectedCar = state.selectedCar;
        //     return this.selected == 'car' && checkIfEmpty(selectedCar);
        // },
        // isNotFilled(state) {
        //     let selectedBudget = state.selectedBudget;
        //     let selectedCar = state.selectedCar;
        //     return checkIfEmpty(selectedBudget) || checkIfEmpty(selectedCar);
        // },
    },
};
</script>

<style lang="css">
</style>

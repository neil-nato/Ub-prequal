<template lang="html">
  <div id="start-budget" role="tabpanel" class="tab-pane  show active">
    <div class="row" style="height: 527px;">
      <div class="col-md-3">
        <div class="calc-col">
            <budget-col />
        </div>
      </div>
      <div class="col-md-3">
        <div class="calc-col">
          <!-- <car-col :disabled="isDisabled" /> -->
            <car-col  />
        </div>
      </div>
      <div class="col-md-6">
        <div class="calc-col">
          <!-- <summary-col :disabled='isNotFilled' /> -->
          <summary-col  />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapState } from 'vuex';
import _ from 'lodash';
// import { check }  from '../../util';

export default {
    props: ['selected'],
    computed: {
        ...mapState(['selectedBudget', 'selectedCar']),
        // isDisabled(state) {
        //     let selectedBudget = state.selectedBudget;
        //     return this.selected == 'budget' && checkIfEmpty(selectedBudget);
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

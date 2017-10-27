<template lang="html">
  <div id="start-car" role="tabpanel" class="tab-pane">
    <div class="row">
      <div class="col-lg-3">
        <div class="calc-col">
          <car-col />
        </div>
      </div>
      <div class="col-lg-3">
        <div class="calc-col">
          <budget-col :disabled="isDisabled" />
          <!-- <budget-col /> -->
        </div>
      </div>
      <div class="col-lg-6">
        <div class="calc-col">
          <summary-col :disabled="isNotFilled" />
          <!-- <summary-col /> -->
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapState } from 'vuex';
import _ from 'lodash';
import  util  from '../../util';

export default {
    props: ['selected'],
    computed: {
        ...mapState(['selectedCar', 'selectedBudget']),
        isDisabled(state) {
            let selectedCar = state.selectedCar;
            return this.selected == 'car' && util(selectedCar);
        },
        isNotFilled(state) {
            let selectedBudget = state.selectedBudget;
            let selectedCar = state.selectedCar;
            return util(selectedBudget) || util(selectedCar);
        },
    },
};
</script>

<style lang="css">
</style>

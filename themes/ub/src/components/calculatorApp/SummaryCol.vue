<template lang="html">
  <div class="summary-col">

    <div class="summary">
      <div class="summary-item">
        <label for="car-price">Car Price:</label>
        <strong v-if="summary.vehicle_lcp "> P{{ summary.vehicle_lcp && summary.vehicle_lcp.toLocaleString() }}</strong>
      </div>
      <div class="summary-item">
        <label for="unit">Unit: {{ summary.vehicle_desc }}</label>
        <strong>Car Model Name</strong>
      </div>
      <div class="summary-item">
        <label for="amount-financed">Amount Financed:</label>
        <strong v-if="summary.ammountFinanced"> P{{ summary.ammountFinanced.toLocaleString() }}</strong>
      </div>
      <div class="summary-item">
        <label for="car-price">Chattel Mortgage Fees:</label>
        <strong v-if="api.chattel.chattel_mortgage">P{{ api.chattel.chattel_mortgage.toLocaleString() }}</strong>
      </div>
      <div class="summary-item">
        <label for="car-price">Monthly Amortization:</label>
        <strong v-if="api.ammortQueryParam.amortization.monthly">P{{ api.ammortQueryParam.amortization.monthly.toLocaleString() }}</strong>
      </div>
      <div class="summary-item">
        <label for="car-price">GetGo Points:</label>
        <strong v-if="summary.acquiredGetgoPoints"> {{ summary.acquiredGetgoPoints.toLocaleString() }}</strong>
      </div>

      <button v-b-modal.modalAccountHolder class="btn btn-orange apply-submit-btn w-button" :disabled='disabled'>
        Apply</button>

    </div>
  </div>

</template>

<script>
import { mapState, mapActions } from 'vuex';

export default {
    props: ['disabled'],

    computed : {
        ...mapState([
            'selectedCar',
            'selectedBudget',
            'summary',
            'api',
        ]),
    },
    methods : {
        ...mapActions([
            'calculateChattelMortgageFee',
        ]),
    },
};
</script>

<style lang="css">
</style>

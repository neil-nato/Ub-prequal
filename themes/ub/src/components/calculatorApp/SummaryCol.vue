<template lang="html">
  <div class="summary-col">

    <div class="summary">
      <span class="title">Summary</span>
      <div class="summary-item unit-container">
        <label class="unit" for="unit" v-if="summary.vehicle_desc !== ' undefined'">{{ summary.vehicle_desc }}</label>
      </div>
      <div class="summary-item">
        <label for="car-price">Car Price:</label>
        <strong v-if="summary.vehicle_lcp">
          P{{ summary.vehicle_lcp && summary.vehicle_lcp.toLocaleString() }}
          <span class="exclamation"><i class="fa fa-exclamation-circle" aria-hidden="true"/></span>
        </strong>
        <strong v-if="!summary.vehicle_lcp">
          P0
          <span class="exclamation"><i class="fa fa-exclamation-circle" aria-hidden="true"/></span>
        </strong>
      </div>
      <div class="summary-item">
        <label for="car-price">Chattel Mortgage Fees:</label>
        <strong v-if="api.chattel.chattel_mortgage">
          P{{ api.chattel.chattel_mortgage.toLocaleString() }}
          <span class="exclamation"><i class="fa fa-exclamation-circle" aria-hidden="true"/></span>
        </strong>
        <strong v-if="!api.chattel.chattel_mortgage">P0
          <span class="exclamation"><i class="fa fa-exclamation-circle" aria-hidden="true"/></span>
        </strong>
      </div>
      <div class="summary-item">
        <label for="amount-financed">Amount Financed:</label>
        <strong v-if="summary.ammountFinanced">
          P{{ summary.ammountFinanced.toLocaleString() }}
          <span class="exclamation"><i class="fa fa-exclamation-circle" aria-hidden="true"/></span>
        </strong>
        <strong v-if="!summary.ammountFinanced">
          P0
          <span class="exclamation"><i class="fa fa-exclamation-circle" aria-hidden="true"/></span>
        </strong>
      </div>
      <div class="summary-item">
        <label for="amount-financed">Total Cash out:</label>
        <strong v-if="!summary.ammountFinanced">P0
          <span class="exclamation"><i class="fa fa-exclamation-circle" aria-hidden="true"/></span>
        </strong>
        <strong v-if="summary.ammountFinanced">P{{ summary.ammountFinanced.toLocaleString() }}
          <span class="exclamation"><i class="fa fa-exclamation-circle" aria-hidden="true"/></span>
        </strong>
      </div>
      <div class="summary-item">
        <label for="car-price">Monthly Amortization:</label>
        <strong v-if="api.ammortQueryParam.amortization.monthly">
          P{{ api.ammortQueryParam.amortization.monthly.toLocaleString() }}
          <span class="exclamation primary-exclamation"><i class="fa fa-exclamation-circle" aria-hidden="true"/></span>
        </strong>
        <strong v-if="!api.ammortQueryParam.amortization.monthly">
          P{{ api.ammortQueryParam.amortization.monthly.toLocaleString() }}
          <span class="exclamation primary-exclamation"><i class="fa fa-exclamation-circle" aria-hidden="true"/></span>
        </strong>
      </div>

      <p class="summary-text">Points to be awarded (select one)</p>
      <br>
      <!-- <div class="summary-item">
        <label for="car-price">GetGo Points:</label>
        <strong v-if="summary.acquiredGetgoPoints"> {{ summary.acquiredGetgoPoints.toLocaleString() }}</strong>
      </div> -->

      <!-- <button v-b-modal.modalAccountHolder class="btn btn-orange apply-submit-btn w-button" :disabled='disabled'>
        Apply</button> -->
      <div class="button-container row center">
        <div>
          <li class="center">
            <input type="radio" name="points" id="getgoRadio" v-model="summary.selectedReward" value="GetGo" @input="getReward({selectedReward: summary.selectedReward})"/>
            <label for="getgoRadio" class="getgo">
                <span class="points-span center">
                  <img src="themes/ub/assets/images/getgo-orange.png" alt="Get Go Points"><br>
                  <span v-if="summary.acquiredPoints">{{ summary.acquiredPoints.toLocaleString() }}  </span>
                  Ceb GetGo Points
                </span>
            </label>
          </li>
        </div>
        <div>
          <li class="center">
            <input type="radio" name="points" id="gasgoRadio" v-model="summary.selectedReward" value="Gas" @input="getReward({selectedReward: summary.selectedReward})"/>
            <label for="gasgoRadio" class="gasgo">
                <span class="points-span center">
                  <img class="gas-points-img center" src="themes/ub/assets/images/car-anticon.png" alt="Gas Points"> <br>
                  <span v-if="summary.acquiredPoints">{{ summary.acquiredPoints.toLocaleString() }}  </span>
                  Gas Points
                </span>
            </label>
          </li>
        </div>
      </div>

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
            'getBudget',
            'getReward',
            'calculateChattelMortgageFee',
        ]),
    },
};
</script>

<style lang="css">
  .summary-col .button-container {
    vertical-align: bottom !important;
  }
</style>

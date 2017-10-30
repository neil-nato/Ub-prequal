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
        <strong v-if="!api.chattel">P0
          <span class="exclamation"><i class="fa fa-exclamation-circle" aria-hidden="true"/></span>
        </strong>
        <strong v-else="api.chattel.chattel_mortgage">
          P{{ api.chattel.chattel_mortgage.toLocaleString() }}
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
          P0
          <span class="exclamation primary-exclamation"><i class="fa fa-exclamation-circle" aria-hidden="true"/></span>
        </strong>
      </div>

      <p class="summary-text">Points to be awarded (select one)</p>
      <br>
      <div class="button-container center">
        <b-row class="justify-content-md-center">
          <b-col class="getgo-reward"  align-v="center" @click="passReward('GetGo')">
            <img class="getgo-points-img center" src="themes/ub/assets/images/getgo-orange.png" alt="Get Go Points"><br>
            <span v-if="summary.acquiredPoints">
              {{ summary.acquiredPoints.toLocaleString() }} Ceb GetGo Points<br>
            </span>
            <span v-if="!summary.acquiredPoints">
              Ceb GetGo Points<br>
            </span>
          </b-col>
          <b-col class="gas-reward" align-v="center" @click="passReward('Gas')">
            <img class="gas-points-img center" src="themes/ub/assets/images/car-anticon.png" alt="Gas Points"> <br>
            <span v-if="summary.acquiredPoints">
              {{ summary.acquiredPoints.toLocaleString() }} Gas Points<br>
            </span>
            <span v-if="!summary.acquiredPoints">
              Gas Points<br>
            </span>
          </b-col>
        </b-row>
        <b-row>
          <b-col>
            <span class="selected" v-if="summary.selectedReward == 'GetGo'">
              <i class="fa fa-check" aria-hidden="true"/>
              Selected
            </span>
          </b-col>
          <b-col>
            <span class="selected" v-if="summary.selectedReward == 'Gas'">
              <i class="fa fa-check" aria-hidden="true"/>
              Selected
            </span>
          </b-col>
        </b-row>
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
        passReward(reward) {
            this.summary.selectedReward = reward;
            this.getReward({selectedReward: this.summary.selectedReward});
        },
    },
};
</script>

<style lang="css">
</style>

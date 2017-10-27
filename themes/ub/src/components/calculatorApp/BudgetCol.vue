<template lang="html">
  <div class="calc-item">
    <div class="budget-col">
        <div class="col-icon">
          <!-- <i class="fa fa-dollar"></i> -->
          <img src="themes/ub/assets/images/pigicon-orange.png" alt="">
          <br>
          <span>Your Budget</span>
        </div>

        <div class="form-group">
          <input v-model="selectedBudget.budget" class="form-control" type="number" name="budget" placeholder="Budget" :disabled="disabled" @input="getBudget({budget:selectedBudget.budget}), buildSummary()">
        </div>

        <div class="form-group">
          <select v-model="selectedBudget.downpayment" class="form-control" name="downpayment" :disabled="disabled" @change="getBudget({downpayment:selectedBudget.downpayment}, buildSummary())">
            <option value="">Down Payment</option>
            <option v-for="dp in downpayment" :value="dp">{{ dp }}%</option>
          </select>
        </div>

        <div class="form-group">
          <select v-model="selectedBudget.terms" class="form-control" name="terms" :disabled="disabled" @change="getBudget({terms:selectedBudget.terms}, buildSummary() ), loadAmmort() ">
            <option class="first-option" value="">Terms</option>
            <option v-for="term in terms" :value="term">{{ term }} months</option>
          </select>
        </div>

        <div class="form-button">
          <b-button class="col-button">Confirm</b-button>
        </div>

    </div>
  </div>
</template>

<script>
import { mapState, mapActions } from 'vuex';

export default {
  // data() {
  //   return {
  //     selectedBudget: {
  //       budget: '',
  //       downpayment: '',
  //       terms: ''
  //     }
  //   }
  // },
    props: ['disabled'],
    computed: {
        ...mapState([
            'terms',
            'downpayment',
            'selectedBudget',
        ]),
    },
    methods: {
        ...mapActions([
            'getBudget',
            'buildSummary',
            'loadAmmort',
        ]),
    },
};
</script>

<style lang="css">
</style>

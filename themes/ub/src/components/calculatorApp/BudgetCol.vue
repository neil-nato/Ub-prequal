<template lang="html">
  <div class="calc-item">
    <div class="budget-col">

        <div class="form-group">
          <label class="field-label" for="budget">Your Monthly Income:</label>
          <input v-model="selectedBudget.budget" class="form-control" type="number" name="budget" placeholder="Enter your budget" :disabled="disabled" @input="getBudget({budget:selectedBudget.budget}), buildSummary()">
        </div>

        <div class="form-group">
          <label class="field-label" for="downpayment">Downpayment:</label>
          <select v-model="selectedBudget.downpayment" class="form-control" name="downpayment" :disabled="disabled" @change="getBudget({downpayment:selectedBudget.downpayment}, buildSummary())">
            <option value="">Select one...</option>
            <option v-for="dp in downpayment" :value="dp">{{ dp }}%</option>
          </select>
        </div>

        <div class="form-group">
          <label class="field-label" for="terms">Terms:</label>
          <select v-model="selectedBudget.terms" class="form-control" name="terms" :disabled="disabled" @change="getBudget({terms:selectedBudget.terms}, buildSummary() ), loadAmmort() ">
            <option value="">Select one...</option>
            <option v-for="term in terms" :value="term">{{ term }} months</option>
          </select>
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

<template lang="html">
  <div class="loan-details">

    <div class="row my-5">
    	<div class="col-md-12">
    		<h1 v-if="!comaker">Loan Details</h1>
        <div v-if="comaker" class="comaker">
          <h1> Co-Maker Details</h1>
          <router-link to='/apply'>
            <a class="gold-link" href="/apply">  <strong>Back to Application Form </strong></a>
          </router-link>
        </div>

    	</div>
    </div>

    <h2 id="itemTitle" class="my-3"> {{ summary.vehicle_desc }}</h2>

    <blockquote class="blockquote">
      <div class="row">
      	<div class="col-md-6 my-4">
      		<h2>P{{ summary.vehicle_lcp.toLocaleString() }}</h2>
      		<p class="subTitle">Unit Price</p>
      	</div>
      	<div class="col-md-6 my-4">
      		<h2>P{{ summary.ammountFinanced.toLocaleString() }}</h2>
      		<p class="subTitle">Amount Financed</p>
      	</div>
      	<div class="col-md-6 my-4">
      		<h2>{{selectedBudget.downpayment}}%</h2>
      		<p class="subTitle">Downpayment</p>
      	</div>
      	<div class="col-md-6 my-4">
      		<h2>{{selectedBudget.terms}} Months</h2>
      		<p class="subTitle">Term</p>
      	</div>
      </div>
    </blockquote>

    <div class="row gross">
      <div class="col-md-12">
        <p>Your Gross Monthly Income: <strong>P{{ parseInt(selectedBudget.budget).toLocaleString() }}</strong></p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <p>
          <router-link to='/'>
            <a class="gold-link" href="/">Not your desired car? Click here to go <strong>back</strong></a>
          </router-link>
        </p>
      </div>
    </div>

  </div>
</template>

<script>
import { mapState } from 'vuex';

export default {
    props : ['comaker'],
    computed: {
        ...mapState([
            'selectedCar',
            'selectedBudget',
            'summary',
        ]),
    },
};
</script>

<style lang="css">
</style>

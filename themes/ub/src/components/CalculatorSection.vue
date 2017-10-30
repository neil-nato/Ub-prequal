<template lang="html">
  <div id="calculator-section" class="calculator-section">
    <div class="container">
      <div class="back-tab">
        <a href="/" class="calculator-back-btn">< Back to home page</a>
      </div>

      <h2>Autoloan Calculator</h2>

      <!-- <ul class="calculator-tab" role="tablist">
        <li class="nav-item">
          <a data-toggle="tab" role="tab" class="nav-link" href="#start-budget" data-target="#start-budget" @click="selectedTab = 'budget',clearSelection()">Start with Budget</a>
        </li>
        <li class="nav-item">
          <a data-toggle="tab" role="tab" class="nav-link" href="#start-car" data-target="#start-car"  @click="selectedTab = 'car',clearSelection()">Start with Car</a>
        </li>
      </ul>

      <div class="tab-content calculator-app">
          <start-budget-tab :selected='selectedTab'/>
          <start-car-tab :selected='selectedTab' />
      </div> -->

      <b-tabs class='calculator-tab'>

        <div class="calculator-app">
          <b-tabs pills>
            <b-tab title="Start With My Budget" active @click="selectedTab = 'budget',clearSelection()">
              <start-budget-tab :selected='selectedTab'/>
            </b-tab>
            <b-tab title="Start With My Car" @click="selectedTab = 'car',clearSelection()">
                <start-car-tab :selected='selectedTab' />
            </b-tab>
          </b-tabs>
        </div>

      </b-tabs>




      <div class="calculator-info">
        <b-row>
          <b-col class="paragraph-column" lg="8" sm="12" offset-lg="2">{{ paragraph }}</b-col>
        </b-row>
        <b-row>
          <b-col class="center button-column" lg="8" sm="12" offset-lg="2">
            <b-button v-b-modal.modalAccountHolder class="primary-button"><span>Apply for auto loan now!</span></b-button> <br>
             <a href="#calculator-section" @click="clearSelection">
            <b-button @click="clearSelection" class="secondary-button"><span>I want to check for another car</span></b-button>
             </a>
          </b-col>
        </b-row>
      </div>
      <div class="back-tab">
        <a href="/" class="calculator-back-btn">< Back to home page</a>
      </div>
    </div>

    <modal-account-holder />
  </div>
</template>

<script>
import { mapActions } from 'vuex';

export default {
    data() {
        return {
            selectedTab: 'budget',
            paragraph: 'It seems like you did not meet the minimum monthly income required for this car model. Don’t worry, all you have to do is include a Co-Maker when applying for a UnionBank AutoLoan to get approved! ',
        };
    },
    methods: {
        ...mapActions([
            'getBudget',
            'getCar',
            'clearSelection',
        ]),
    },
};
</script>

<style lang="css">
</style>

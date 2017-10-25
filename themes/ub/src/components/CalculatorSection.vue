<template lang="html">
  <div class="calculator-section">
    <div class="container">
      <div class="back-tab">
        <a class="calculator-back-btn">< Back to home page</a>
      </div>

      <h2>Autoloan Calculator</h2>

      <ul class="calculator-tab" role="tablist">
        <li class="nav-item">
          <a data-toggle="tab" role="tab" class="nav-link" href="#start-car" @click="selectedTab = 'car',clearSelection()">Start with Car</a>
        </li>
        <li class="nav-item">
          <a data-toggle="tab" role="tab" class="nav-link" href="#start-budget" @click="selectedTab = 'budget',clearSelection()">Start with Budget</a>
        </li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content calculator-app">
          <start-car-tab :selected='selectedTab' />
          <start-budget-tab :selected='selectedTab'/>
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

<template lang="html">
  <div class="calculator-section">
    <div class="container">
      <h2>Avail a car loan now</h2>

      <ul class="calculator-tab nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a data-toggle="tab" role="tab" class="nav-link active" href="#start-budget" @click="selectedTab = 'budget',clearSelection()">Start with my budget</a>
        </li>
        <li class="nav-item">
          <a data-toggle="tab" role="tab" class="nav-link" href="#start-car" @click="selectedTab = 'car',clearSelection()">Start with a car</a>
        </li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content calculator-app">
          <start-budget-tab :selected='selectedTab'/>
          <start-car-tab :selected='selectedTab' />
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

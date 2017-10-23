import Vue from 'vue';
import Vuex from 'vuex';
import axios from 'axios';

Vue.use(Vuex);

export const store = new Vuex.Store({
    state: {},
  //This is where you define the data structure of your application.
  //You can also set default or initial state here.
    actions : {},
  //Actions are where you define the calls that will commit
  //changes to your store. A common example of this would be a
  //call to an api to retrieve data, once it completes you call store.commit()
  //to invoke a mutation to actually update the data in the store.
  //Actions are called in your components via dispatch call.
    mutations : {},
  //The mutations calls are the only place that the store can be updated.
    getters : {},
  //Getters are a way to grab computed data from the store. For example,
  // if you have a project list, one component might only want to show projects
  //that are completed:
    modules : {},
});

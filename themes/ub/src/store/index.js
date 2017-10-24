import Vue from 'vue';
import Vuex from 'vuex';
import axios from 'axios';
import { filter, groupBy } from 'lodash';
import qs from 'query-string';

Vue.use(Vuex);

let baseData = {
    car: {
        model: '',
        brand: '',
    },
    budget: {
        budget: '',
        downpayment: '',
        terms: '',
    },
    summary : {
        vehicle_desc: '',
        vehicle_lcp: '0', //price
        downpaymentpct : '0',
        ammountFinanced: '0',
        acquiredGetgoPoints: '',
    },
    api :{
        ammort : {
            term : '0',
            price: '0',
            dp : '0',
        },
        ammortQueryParam : {
            amortization : {
                monthly : '0',
            },
        },
        chattel : {
            'amount_financed': '',
  		'chattel_mortgage': '',
        },
        document : {

        },
    },
};

function getAmountFinanced( srp, downpayment) {
    let sp = srp;
    let dp = downpayment / 100;

    return   sp - (sp * dp);
}

function calculateGetgoPoints( budget, getgoPoints ){

    switch ( true ){
    case budget >= 500000 && budget <= 899999:
        return getgoPoints[0];
        break;

    case budget >= 900000 && budget <= 1499999:
        return getgoPoints[1];
        break;

    case budget >= 1500000 && budget <= 1999999:
        return getgoPoints[2];
        break;

    case budget >= 2000000 :
        return getgoPoints[3];
        break;
    }

}

function getChattelMortgageFee( price, json){
    let i = 0;

    while(json[i] && parseInt(price) > parseInt(json[i].amount_financed)){ i++; }
    return json[i] || json[Object.keys(json).length - 1];
}



export const store = new Vuex.Store({
    state : {
        carList: [],
        brandList : [],
        modelList: [],
        terms : [ 60, 48, 36, 24, 18, 12 ],
        downpayment : [ 20, 30, 40, 50, 60 ],
        getgoPoints : [ 7500, 10000, 12500, 15000 ],
        selectedCar : {...baseData.car},
        selectedBudget: {...baseData.budget},
        summary : {...baseData.summary},
        applicant: {},
        m1applicant: {},
        form: {},
        api : {...baseData.api},
    },
  //This is where you define the data structure of your application.
  //You can also set default or initial state here.

    actions : {
        loadCarList: ( { commit } ) => {
            axios.get('api/data').then(response => {
          //console.log(response.data);
          //console.log('Axios is Working ')
          //this.state.carList = response.data;
                commit('setCarList', { list: response.data });
            });
        },

        loadAmmort : ( { commit, state } ) => {
            let queryParam = qs.stringify(state.api.ammort);

            axios.get('api/ammort?' + queryParam ).then( response => {
                console.log( 'ammort: ');
                console.log( response.data );
                commit('setApiQueryParam', { ...response.data });
            });
        },

        calculateChattelMortgageFee : ( {commit, state }) => {
            axios.get('data/cmf.json').then( response => {
        //console.log(state.setSelectedBudget.budget)
                console.log(response.data);
        //console.log(getChattelMortgageFee(state.setSelectedBudget.budget, response.data))
                commit('setChattelMortgageFee', {...response.data});
            });
        },

        getCar: ( { commit, state } , payload ) => {
            commit('setSelectedCar', {
                ...state.selectedCar,
                ...payload,
      //  car_make : payload.car_make || null ,
      //  car_model : payload.car_model || null ,
      //  price : payload.price || null
            });

            commit('setApiAmmort', {
                ...state.api.ammort,
                price : state.selectedCar.model.srp,
            });

        },

        getBudget: ( { commit, state } ) => {
            commit('setSelectedBudget', {
                ...state.selectedBudget,
            });

            commit('setApiAmmort', {
                ...state.api.ammort,
                term : state.selectedBudget.terms,
                dp : state.selectedBudget.downpayment,
            });
        },

        getApplicant: ( { commit, state }, payload, comaker) => {
            let fieldname = Object.keys(payload)[0];
            let newVariable = {};


            if(!payload.comaker) {
                newVariable[fieldname] = payload[fieldname];
                commit('setApplicant', {
                    ...state.applicant,
                    ...newVariable,
                });
            } else {
                newVariable['m1'+fieldname] = payload[fieldname];
                commit('setCoMaker', {
                    ...state.m1applicant,
                    ...newVariable,
                });
            }
        },

        clearSelection: ( { commit } ) => {
            commit('setSelectedCar', {...baseData.car});
            commit('setSelectedBudget', {...baseData.budget});
            commit('setApiQueryParam', {...baseData.api.ammortQueryParam});
            commit('setSummary', {...baseData.summary});
      //commit('setChattelMortgageFee', {...baseData.api.chattel})

        },

        getDocumentFile : ( { commit }, payload ) => {
            commit('setDocumentFile', payload );
        },

        getFormData : ( { commit, state }) => {
            console.log('test');
            commit('setFormData', {
                ...state.selectedBudget,
                ...state.summary,
                ...state.applicant,
                ...state.m1applicant,
                ...state.api.document,
            });
        },

        buildSummary : ({ commit , state }) => {
            let ammountFinanced = getAmountFinanced( state.selectedCar.model.srp, state.selectedBudget.downpayment);
            let acquiredGetgoPoints = calculateGetgoPoints( ammountFinanced, state.getgoPoints );

            commit('setSummary', {
                vehicle_desc: state.selectedCar.brand+ ' ' + state.selectedCar.model.model ,
                vehicle_lcp: state.selectedCar.model.srp , //price
                downpaymentpct : state.selectedBudget.downpayment ,
                ammountFinanced ,
                acquiredGetgoPoints,
            });
        },

    },
  //Actions are where you define the calls that will commit
  //changes to your store. A common example of this would be a
  //call to an api to retrieve data, once it completes you call store.commit()
  //to invoke a mutation to actually update the data in the store.
  //Actions are called in your components via dispatch call.

    mutations : {
        setCarList : ( state, { list }) => {
            state.carList = list;

            const brand = Object.keys( state.carList );
            state.brandList = Object.keys( groupBy(list, 'brand' ) );
     //state.brandList = state.carList.Object.keys( item.brand )
        },
        setSelectedCar : ( state, list ) => {
      //console.log(list)
            state.selectedCar = list;
            console.log( state.carList );
            state.modelList = state.carList.filter(item => list.brand === item.brand );
      //console.log( state.modelList  )
        },
        setSelectedBudget: ( state, list ) => {
            console.log(list);
            state.selectedBudget = list;
        },
        setApplicant: ( state, list ) => {
            console.log(list);
            state.applicant = list;
        },
        setSummary : (state, list ) => {
            state.summary = list;
        },
        setCoMaker: ( state, list ) => {
            console.log(list);
            state.m1applicant = list;
        },
        setApiAmmort : ( state, list) => {
            state.api.ammort = list;
        },
        setApiQueryParam : ( state, list ) => {
            state.api.ammortQueryParam = list;
        },

        setFormData : ( state, list ) => {
            console.log( list );
            state.form = list;
        },

        setChattelMortgageFee : ( state, list ) => {
            console.log(getChattelMortgageFee(state.selectedCar.model.srp, list));
            state.api.chattel = getChattelMortgageFee(state.selectedCar.model.srp, list);
        },

        setDocumentFile : ( state, list ) => {
            state.api.document = list;
        },
    },
  //The mutations calls are the only place that the store can be updated.

    getters : {
        completedCarList: state => {
            return state.carList.filter( carList => carList.completed).length;
        },
    },
  //Getters are a way to grab computed data from the store. For example,
  // if you have a project list, one component might only want to show projects
  //that are completed:

    modules: {

    },

});

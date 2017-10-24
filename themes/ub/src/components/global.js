// These  are registered globally, and can be used
// anywhere within our application without importing them.

//common components
import head from '../common/header.vue';
import foot from '../common/footer.vue';

//components
import welcome from './welcome';

import infoCol from './infoCol.vue';
import infoSection from './infoSection.vue';

//Calculator
import calculator from './CalculatorSection.vue';
import carCol from './calculatorApp/CarCol.vue';
import budgetCol from './calculatorApp/BudgetCol.vue';
import summarCol from './calculatorApp/SummaryCol.vue';
import budgetTab from './calculatorApp/StartBudgetTab.vue';
import carTab from './calculatorApp/StartCarTab.vue';

import contact from './contact.vue';
import compare from './compare.vue';
import loanCalculator from './loancalculator.vue';
import zeroPromo from './zeropromo.vue';
import promo from './promo.vue';
import faq from './faq.vue';


export default {
    //common components
    'heading' : head,
    'footing' : foot,

    //Calculator
    'calculator-section': calculator,
    'car-col': carCol,
    'budget-col': budgetCol,
    'summary-col': summarCol,
    'start-budget-tab': budgetTab,
    'start-car-tab': carTab,

    //components
    'welcome' :  welcome,
    'info-col' :  infoCol,
    'info-section' : infoSection,
    'contact' :  contact,
    'compare' :  compare,
    'loan-calculator' :  loanCalculator,
    'zero-promo' :  zeroPromo,
    'promo' :  promo,
    'faq' : faq,
};

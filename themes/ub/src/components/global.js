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

// Form
import bannerForm from './form/bannerForm.vue';
import LoanDetails from './LoanDetails.vue';
import form from './form';
import existingUser from './form/existingUser.vue';
import applicantIdentity from './form/applicantIdentity.vue';
import employmentInformation from './form/employmentInformation';
import documents from './form/documents.vue';
import comaker from './form/comaker.vue';
import agree from './form/agree.vue';

import contact from './contact.vue';
import compare from './compare.vue';
import loanCalculator from './loancalculator.vue';
import zeroPromo from './zeropromo.vue';
import promo from './promo.vue';
import faq from './faq.vue';

import devNav from './devTools/devNav.vue';

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

    //Form Components
    'banner-form' : bannerForm,
    'loan-details' : LoanDetails,
    'application-form' : form,
    'existing-user' : existingUser,
    'applicant-identity' : applicantIdentity,
    'employment-details' : employmentInformation,
    'documents' : documents,
    'co-maker' : comaker,
    'agree' : agree,

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

    // Dev Tools
    'dev-nav': devNav,
};

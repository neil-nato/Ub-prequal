// These  are registered globally, and can be used
// anywhere within our application without importing them.

//common components
import head from '../common/header.vue';
import foot from '../common/footer.vue';

//components
import welcome from './welcome';
import info from './info.vue';
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

    //components
    'welcome' :  welcome,
    'info' :  info,
    'contact' :  contact,
    'compare' :  compare,
    'loan-calculator' :  loanCalculator,
    'zero-promo' :  zeroPromo,
    'promo' :  promo,
    'faq' : faq,
};

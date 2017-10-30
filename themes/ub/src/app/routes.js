import Otp from 'src/pages/public/otp';
import Home from 'src/pages/public/home';
import Faq from 'src/pages/public/Faq';
import PrivacyPolicy from 'src/pages/public/PrivacyPolicy';
import Terms from 'src/pages/public/TermsAndCondition';
import Contact from 'src/pages/public/ContactUs';

//Private Pages
import Private from 'src/pages/private/private';
import Calculator from 'src/pages/private/calculatorPage';
import Apply from 'src/pages/private/ApplyPage';
import CoMaker from 'src/pages/private/CoMakerPage';

export default [
    {
        name: 'Home',
        path: '/',
        component: Home,
    },
    {
        name: 'Otp',
        path: '/otp',
        component: Otp,
    },
    {
        name: 'Faq',
        path: '/faq',
        component: Faq,
    },
    {
        name: 'PrivacyPolicy',
        path: '/privay-policy',
        component: PrivacyPolicy,
    },
    {
        name: 'Terms',
        path: '/terms-and-conditions',
        component: Terms,
    },
    {
        name: 'Contact',
        path: '/contact-us',
        component: Contact,
    },

    {
        name: 'Private',
        path: '/private',
        component: Private,
    },
    {
        name: 'Calculator',
        path: '/calculator',
        component: Calculator,
    },
    {
        name: 'Apply',
        path: '/apply',
        component: Apply,
    },
    {
        name: 'CoMaker',
        path: '/apply-comaker',
        component: CoMaker,
    },
];

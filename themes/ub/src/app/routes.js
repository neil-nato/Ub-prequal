import Otp from 'src/pages/public/otp';
import Home from 'src/pages/public/home';
import Private from 'src/pages/private/private';
import Calculator from 'src/pages/private/calculatorPage';
import Apply from 'src/pages/private/ApplyPage';
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
];

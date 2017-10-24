import Otp from 'src/pages/public/otp';
import Prequal from 'src/pages/public/prequal';
import Private from 'src/pages/private/private';
import Calculator from 'src/pages/private/calculatorPage';

export default [
    {
        name: 'Prequal',
        path: '/',
        component: Prequal,
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
];

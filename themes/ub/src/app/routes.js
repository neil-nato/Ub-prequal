import Otp from 'src/pages/public/otp';
import Prequal from 'src/pages/public/prequal';
import Private from 'src/pages/private/private';

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
];

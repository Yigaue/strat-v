import Home from './components/Home';
import Calculate from './components/Calculate'

export default {
    mode: 'history',

    routes: [
        {
            path: '/',
            component: Home,
            name: 'Home'
        },

        {
            path: '/calculate',
            component: Calculate,
            name: 'Calculate',
        }

    ]
}

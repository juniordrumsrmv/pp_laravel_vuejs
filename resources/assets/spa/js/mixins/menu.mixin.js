import LogoutComponent from '../components/Logout';
import authMixin from './auth.mixin';

export default {
    components: {
        'logout': LogoutComponent
    },
    mixins: [authMixin]
}
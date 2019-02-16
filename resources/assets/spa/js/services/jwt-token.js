import {Jwt} from './resources';
import LocalStorage from './localstorage'

export default {
    get token() {
        return LocalStorage.get('token');
    },
    set token(){
        LocalStorage.set('token', value);
    },
    acessToken(username,password){
        return Jwt.accessToken(username,password)
            .then(() => {
                this.token = response.dat.token;
            })
    },
    revokeToken(){

    }
};
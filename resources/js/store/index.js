import Vue from 'vue'
import Vuex from 'vuex'

import currentuser from './modules/currentuser'
import modal from './modules/modal'

Vue.use(Vuex);

export default new Vuex.Store({
    modules:{
        currentuser,
        modal
    }
})
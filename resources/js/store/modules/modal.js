const state = {
    modalObj:{
        showModal : false,
        action: '',
        data: null

    }
};
const getters = {
    getmodalObj(state){
        return state.modalObj
    }
};
const actions = {};
const muttation = {};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    muttation
}
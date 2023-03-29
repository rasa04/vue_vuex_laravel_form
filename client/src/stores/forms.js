import { createStore } from 'vuex'

export const Forms = createStore({
    state() {
        return {
            forms: []
        }
    },
    getters: {
        allForms(state) {
            return state.forms
        }
    },
    mutations: {
        save(state, form) {
            state.forms.unshift(form)
        }
    }
})
import { createStore } from 'vuex'

export default createStore({
  state () {
    return {
        theme: {
            dark: false
        }
    }
  },
  mutations: {
    toggleDark (state) {
        state.theme.dark = !state.theme.dark
    }
  },
  actions: {

  },
  getters: {

  }
})

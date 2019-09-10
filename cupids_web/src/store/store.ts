import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'
import state from './state'
import Qs from 'qs'

Vue.use(Vuex)

export default new Vuex.Store({
  state,
  mutations: {
    //登录成功
    loginSucc (state, user) {
      state.user = user
      localStorage.setItem('user', JSON.stringify(user))
      // JSON.parse(localStorage.getItem('user'))
    },
    logout (state) {
      state.user = state.defaultUser
      localStorage.removeItem('user')
    }
  },
  actions: {
    loginSucc (ctx, user) {
      ctx.commit('loginSucc', user)
    },
    logout (ctx) {
      ctx.commit('logout')
    }
  }
})

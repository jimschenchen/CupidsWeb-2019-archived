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
    },
    update (state) {
      // 实时同步state与localstorage数据
      if (localStorage.getItem('user')) {
        state.user = JSON.parse(localStorage.getItem('user'))
      }
    }
  },
  actions: {
    loginSucc (ctx, user) {
      ctx.commit('loginSucc', user)
    },
    logout (ctx) {
      ctx.commit('logout')
    },
    update (ctx) {
      ctx.commit('update')
    }
  }
})

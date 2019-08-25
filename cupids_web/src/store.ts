import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'
import state from './store/state'
import Qs from 'qs'

Vue.use(Vuex)

export default new Vuex.Store({
  state: state,
  mutations: {
    login (state, user) {
      state.user = user
    }
  },
  actions: {
    login (ctx, form) {
      let data = {
          "username": form.username,
          "password": form.password
      }
      axios({
        method: 'post',
        url: 'oapi/login.php',
        data: Qs.stringify(data)
      }).then(function (res){
        console.log(res)
        res = res.data
        if (res.ret && res.data) {
          const user = res.data
          ctx.commit('login', user)
        }
      })
    }
  }
})

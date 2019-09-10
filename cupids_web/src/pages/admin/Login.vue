<template>
  <v-app id="inspire">
    <v-content>
      <alert v-if='alert.appear' :alertType='alert.type'>{{this.alert.content}}</alert>
      <v-container
        class="fill-height"
        fluid
      >
        <v-row
          align="center"
          justify="center"
        >
          <v-col
            cols="12"
            sm="8"
            md="4"
          >
            <v-card class="elevation-12">

              <v-toolbar
                color="primary"
                dark
                flat
              >
                <v-toolbar-title>Login form</v-toolbar-title>
                <div class="flex-grow-1"></div>
                <v-tooltip bottom>
                  <template v-slot:activator="{ on }">
                    <v-btn
                      icon
                      large
                      @click="routerTo('/')"
                      v-on="on"
                    >
                      <v-icon>account_circle</v-icon>
                    </v-btn>
                  </template>
                  <span>Source</span>
                </v-tooltip>
                <v-tooltip right>
                  <template v-slot:activator="{ on }">
                    <v-btn
                      icon
                      large
                      @click="routerTo('/register')"
                      v-on="on"
                    >
                      <v-icon>hourglass_full</v-icon>
                    </v-btn>
                  </template>
                  <span>注册</span>
                </v-tooltip>
              </v-toolbar>

              <v-card-text>
                <v-form>
                  <v-text-field
                    label="Login"
                    name="login"
                    prepend-icon="supervised_user_circle "
                    type="text"
                    v-model="form.username"
                  ></v-text-field>

                  <v-text-field
                    id="password"
                    label="Password"
                    name="password"
                    prepend-icon="lock"
                    type="password"
                    v-model="form.password"
                  ></v-text-field>

                </v-form>
              </v-card-text>
              <v-card-actions>
                <div class="flex-grow-1"></div>
                <v-btn color="primary" @click="login()">Login</v-btn>
              </v-card-actions>
            </v-card>
          </v-col>
        </v-row>
      </v-container>
    </v-content>
  </v-app>
</template>

<script>
import Qs from 'qs'
import axios from 'axios'
import Alert from './components/Alert'

export default {
  name: 'Login',
  components: {
    Alert
  },
  props: {
    source: String
  },
  data: () => ({
    drawer: null,
    form: {
      username: '',
      password: ''
    },
    alert: {
      appear: false,
      content: null,
      type: null
    }
  }),
  methods: {
    routerTo (addr) {
      this.$router.push(addr)
    },
    alertMsg: function (show, msg, type) {
      // type: [success, info, warning, error]
      this.alert = { 'appear': show, 'content': msg, 'type': type }
    },
    login: function () {
    // 登录方法 validate
      this.alertMsg(false, '', '')
      if (!this.form.username) {
        this.alertMsg(true, '请输入用户名', 'warning')
      } else if (!this.form.password) {
        this.alertMsg(true, '请输入密码', 'warning')
      } else {
        this.sendRequest()
      }
    },
    sendRequest: function () {
      // 配置Qs表单
      let data = {
        'username': this.form.username,
        'password': this.form.password
      }
      // axios请求
      axios({
        method: 'post',
        url: 'oapi/login.php',
        data: Qs.stringify(data)
      }).then((res) => {
        // 接收请求判定
        if (res.status === 200) {
          // status: 200
          console.log(res)
          if (res.data.ret === 0) {
            // 发送数据到store
            const user = res.data.data
            this.alertMsg(true, '登录成功', 'success')
            this.$store.dispatch('loginSucc', user)
            // 砸瓦鲁多！
            console.log(this.$store.getters.getUser)
            setTimeout(() => {
              this.routerTo('/')
            }, 3000)
          } else if (res.data.ret === -1) {
            this.alertMsg(true, '没有找到该用户', 'warning')
          } else if (res.data.ret === -2) {
            this.alertMsg(true, '密码错误', 'error')
          }
        } else {
          // status != 200
          this.alertMsg(true, '连接超时', 'error')
        }
      }).catch((e) => {
        this.alertMsg(true, '请检查网络连接', 'error')
      })
      // end of axios
    }
  },
  activated () {
    // 钩子关闭提醒
    this.alertMsg(false, '', 'warning')
  }
}
</script>

<style>
</style>

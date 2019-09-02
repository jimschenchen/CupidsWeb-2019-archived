<template>
  <v-app id="inspire">
    <v-content>
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
                      @click="routerToHome"
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
                      @click="routerToRegistar"
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

export default {
  name: 'Login',
  props: {
    source: String
  },
  data: () => ({
    drawer: null,
    form: {
      username: '',
      password: ''
    }
  }),
  methods: {
    routerToRegistar () {
      this.$router.push('/registar')
    },
    routerToHome () {
      this.$router.push('/')
    },
    login () {
    // 登录方法
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
        res = res.data
        if (res.ret && res.data) {
          const user = res.data
          this.$store.dispatch('loginSucc', user)
        }
      })
    }
  }
}
</script>

<style>
</style>

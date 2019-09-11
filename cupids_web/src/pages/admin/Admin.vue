<template>
  <v-app id="inspire">
    <v-navigation-drawer
      v-model="drawer"
      app
    >
      <!-- usercard -->
      <user-card :user="user"></user-card>
      <!-- usercard -->

      <v-list dense>
        <v-list-item @click="routerTo('/')">
          <v-list-item-action>
            <v-icon>home</v-icon>
          </v-list-item-action>
          <v-list-item-content>
            <v-list-item-title>home</v-list-item-title>
          </v-list-item-content>
        </v-list-item>
        <v-list-item @click="routerTo('/logout')">
          <v-list-item-action>
            <v-icon>contact_mail</v-icon>
          </v-list-item-action>
          <v-list-item-content>
            <v-list-item-title>Logout</v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list>
    </v-navigation-drawer>
    <v-app-bar
      app
      color="pink"
      dark
    >
      <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
      <v-toolbar-title>Admin</v-toolbar-title>
    </v-app-bar>
<!--    header -->

<!--  content -->

    <v-content>
      <v-container>
        <v-row align="start" justify="start">
          <v-col md="3">
            <admin-card :user="user"></admin-card>
          </v-col>
          <v-col md="9">
            <v-card
              class="mx-auto"
            >
              <v-card-title>I'm a title</v-card-title>
              <v-card-text>I'm card text</v-card-text>
              <v-card-actions>
                <v-btn text>Click</v-btn>
              </v-card-actions>
            </v-card>
          </v-col>
        </v-row>
      </v-container>
    </v-content>

<!--    footer -->
    <v-footer
      color="indigo"
      app
    >
      <span class="white--text">&copy; 2019</span>
    </v-footer>
  </v-app>
</template>

<script>
import UserCard from '../home/components/UserCard'
import AdminCard from './components/AdminCard'
export default {
  name: 'Admin',
  props: {
    source: String
  },
  components: {
    UserCard,
    AdminCard
  },
  data: () => ({
    drawer: null,
    user: {
      avatar: '',
      name: 'NoName',
      password: 'NoQuote'
    }
  }),
  methods: {
    // router方法
    routerTo (addr) {
      this.$router.push(addr)
    }
  },
  mounted () {
    // 加载用户信息
    this.$store.dispatch('update')
    this.user = this.$store.state.user
    // 判定登录
    if (this.$store.state.user.login !== 0) {
      // 未登录返回主页
      this.routerTo('/')
    }
  },
  activated () {
    // 加载用户信息
    this.$store.dispatch('update')
    this.user = this.$store.state.user
    // 判定登录
    if (this.$store.state.user.login !== 0) {
      // 未登录返回主页
      this.routerTo('/')
    }
  }
}
</script>

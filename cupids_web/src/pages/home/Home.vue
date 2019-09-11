<template>
  <v-app id="inspire">
    <!-- drawer -->
    <v-navigation-drawer
      v-model="drawer"
      app
      >
      <user-card :user="user"></user-card>
      <!-- usercard -->
      <div v-for="item of drawerData" :key="item.id">
        <template v-if="listCheck(item.id)">
          <v-list dense >
            <v-list-item @click="routerTo(item.router)">
              <v-list-item-action>
                <v-icon>{{item.icon}}</v-icon>
              </v-list-item-action>
              <v-list-item-content>
                <v-list-item-title>{{item.title}}</v-list-item-title>
              </v-list-item-content>
            </v-list-item>
          </v-list>
        </template>
      </div>

    </v-navigation-drawer>
    <!-- drawer -->

    <v-app-bar
      app
      color="orange"
    >
      <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
      <v-toolbar-title>{{toolBarTitle}}</v-toolbar-title>
    </v-app-bar>
<!--    header -->

<!--  content -->
    <parallax :parallaxData="parallaxData"></parallax>

    <v-content>
      <v-container
        class="fill-height"
        fluid
      >
        <v-row
          align="center"
          justify="center"
        >
          <v-col class="text-center">
            <v-tooltip left>
              <template v-slot:activator="{ on }">
                <v-btn
                  :href="source"
                  icon
                  large
                  target="_blank"
                  v-on="on"
                >
                  <v-icon large>mdi-code-tags</v-icon>
                </v-btn>
              </template>
              <span>Source</span>
            </v-tooltip>

            <v-tooltip right>
              <template v-slot:activator="{ on }">
                <v-btn
                  icon
                  large
                  href="https://codepen.io/johnjleider/pen/zgxeLQ"
                  target="_blank"
                  v-on="on"
                >
                  <v-icon large>mdi-codepen</v-icon>
                </v-btn>
              </template>
              <span>Codepen</span>
            </v-tooltip>
          </v-col>
        </v-row>
      </v-container>
    </v-content>

<!--    footer -->
    <v-footer
      color="orange"
      app
    >
      <span class="white--text">&copy; 2019</span>
    </v-footer>
  </v-app>
</template>

<script>
import Parallax from './components/Parallax'
import UserCard from './components/UserCard'
import axios from 'axios'

export default {
  name: 'Home',
  props: {
    source: String
  },
  components: {
    Parallax,
    UserCard
  },
  data: () => ({
    drawer: null,
    drawerData: {},
    parallaxData: {},
    toolBarTitle: String,
    theme: Object,
    user: {
      avatar: '',
      name: 'NoName',
      password: 'NoQuote'
    }
  }),
  methods: {
    routerTo (address) {
      this.$router.push(address)
    },
    getHomeInfo: function () {
      axios.get('api/home_info.json')
        .then(this.getHomeInfoSucc)
    },
    getHomeInfoSucc: function (res) {
      res = res.data
      if (res.ret && res.data) {
        const data = res.data
        this.drawerData = data.drawer
        this.parallaxData = data.parallax
        this.toolBarTitle = data.toolBarTitle
      }
    },
    listCheck (id) {
      // 验证用户权限菜单
      const user = this.$store.state.user
      if (id === '0003' || id === '0004') {
        if (user.login === 0) {
          return false
        }
      }
      if (id === '0005') {
        if (user.login === -1) {
          return false
        }
      }
      return true
    }
  },
  mounted () {
    this.getHomeInfo()
    this.getTheme()
    this.user = this.$store.state.user
  },
  activated () {
    this.user = this.$store.state.user
    console.log(this.user)
  }
}

</script>

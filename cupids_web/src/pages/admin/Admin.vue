<template>
  <v-app id="inspire">
    <v-navigation-drawer
      v-model="drawer"
      app
    >
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
      color="indigo"
      app
    >
      <span class="white--text">&copy; 2019</span>
    </v-footer>
  </v-app>
</template>

<script>
export default {
  name: 'Admin',
  props: {
    source: String
  },
  components: {
  },
  data: () => ({
    drawer: null
  }),
  methods: {
    routerTo (addr) {
      this.$router.push(addr)
    }
  },
  mounted () {
    // 加载主页信息
    this.getHomeInfo()
    // 加载用户信息
    if (this.$store.state.user.login !== 0) {
      // 未登录返回主页
      this.routerTo('/')
    }
  },
  activated () {
    // 加载用户信息
    if (this.$store.state.user.login !== 0) {
      // 未登录返回主页
      this.routerTo('/')
    }
  }
}
</script>

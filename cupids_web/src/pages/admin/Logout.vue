<template>
  <v-alert
    prominent
    type="error"
    color="red"
  >
    <v-row align="center">
      <v-col class="grow">{{this.msg}}</v-col>
      <v-col class="shrink">
        <v-btn @click="routerTo('/')">返回主页</v-btn>
      </v-col>
    </v-row>
  </v-alert>
</template>

<script>

export default {
  name: 'Logout',
  data: () => ({
    msg: '非法操作'
  }),
  methods: {
    routerTo (addr) {
      this.$router.push(addr)
    },
    logout: function () {
      const user = this.$store.state.user
      if (user.login === 0) {
        this.msg = '您已成功登出！'
        this.$store.dispatch('logout')
      }
    }
  },
  activated () {
    this.logout()
  },
  mounted () {
    this.logout()
  }
}
</script>

<style>
</style>

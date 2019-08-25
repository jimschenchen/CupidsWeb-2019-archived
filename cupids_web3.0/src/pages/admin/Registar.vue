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
                <v-toolbar-title>Registrar form</v-toolbar-title>
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
                  <span>Home</span>
                </v-tooltip>
                <v-tooltip right>
                  <template v-slot:activator="{ on }">
                    <v-btn
                      icon
                      large
                      @click="routerToAdmin"
                      v-on="on"
                    >
                      <v-icon>hourglass_full</v-icon>
                    </v-btn>
                  </template>
                  <span>登录</span>
                </v-tooltip>
              </v-toolbar>

              <v-card-text>
                <v-form>
                  <v-text-field
                    label="Login"
                    name="login"
                    prepend-icon="supervised_user_circle "
                    type="text"
                  ></v-text-field>

                  <v-text-field
                    id="password"
                    label="Password"
                    name="password"
                    prepend-icon="lock"
                    type="password"
                  ></v-text-field>
                </v-form>
              </v-card-text>
              <v-card-actions>
                <div class="flex-grow-1"></div>
                <v-btn color="primary">Login</v-btn>
              </v-card-actions>
            </v-card>
          </v-col>
        </v-row>
      </v-container>
    </v-content>
  </v-app>
</template>

<script>
export default {
  name: 'Registar',
  props: {
    source: String
  },
  data: () => ({
    drawer: null
  }),
  methods: {
    routerToAdmin () {
      this.$router.push('/admin')
    },
    routerToHome () {
      this.$router.push('/')
    }
  }
}
</script>

<style>
</style>

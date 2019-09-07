<template>
  <v-card
     class="mx-auto"
     color="orange"
   >
     <v-list-item>
       <v-list-item-avatar color="grey">
         <div v-if="this.user.avatar">
           <img :src="this.user.avatar"/>
         </div>
       </v-list-item-avatar>
       <v-list-item-content>
         <v-list-item-title class="headline">{{this.user.name}}</v-list-item-title>
         <v-list-item-subtitle>{{this.user.password}}</v-list-item-subtitle>
       </v-list-item-content>
     </v-list-item>
  </v-card>
</template>

<script>
export default {
  name: 'UserCard',
  data: () => ({
    user: {
      avatar: '',
      name: 'NoName',
      password: 'NoQuote'
    }
  }),
  activated () {
    this.user = this.$store.getters.getUser
  }
}
</script>

<style>
</style>

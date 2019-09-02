<template>
  <v-card
     class="mx-auto"
     color="orange"
   >
     <v-list-item>
       <v-list-item-avatar color="grey">
         <img v-show="this.$store.state.user.avatar" :src="this.$store.state.user.avatar"/>
       </v-list-item-avatar>
       <v-list-item-content>
         <v-list-item-title class="headline">{{this.$store.state.user.name}}</v-list-item-title>
         <v-list-item-subtitle>{{this.$store.state.user.password}}</v-list-item-subtitle>
       </v-list-item-content>
     </v-list-item>
  </v-card>
</template>

<script>
export default {
  name: 'UserCard'
}
</script>

<style>
</style>

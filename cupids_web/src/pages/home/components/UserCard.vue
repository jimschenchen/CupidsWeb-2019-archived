<template>
  <v-card
     class="mx-auto"
     color="orange"
   >
     <v-list-item>
       <v-list-item-avatar color="grey">
         <template v-if="this.user.avatar">
           <img :src="this.user.avatar"/>
         </template>
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
  props: {
    user: Object
  }
}
</script>

<style>
</style>

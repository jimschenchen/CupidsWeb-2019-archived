<template>
  <v-card
    class="mx-auto"
    max-width="1200"
  >
    <v-img
      class="white--text"
      height="200px"
      :src="user.avatar"
    >
      <v-card-title class="align-end fill-height">{{user.name}}</v-card-title>
    </v-img>

    <v-card-text>
      <span>{{user.name}}</span><br>
      <span class="text--primary">
        <span>Whitehaven Beach</span><br>
        <span>Whitsunday Island, Whitsunday Islands</span>
      </span>
    </v-card-text>

    <v-card-actions>
      <v-btn
        text
        color="orange"
      >
        Share
      </v-btn>
      <v-btn
        text
        color="orange"
      >
        Explore
      </v-btn>
    </v-card-actions>
  </v-card>
</template>


<script>
export default {
  name: 'AdminCard',
  props: {
    user: Object
  }
}
</script>

<style>
</style>

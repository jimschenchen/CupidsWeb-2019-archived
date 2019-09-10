<template>
  <v-alert :type='alertType'>
    <slot></slot>
  </v-alert>
</template>

<script>
export default {
  name: 'Alert',
  props: {
    alertType: String
  }
}
</script>

<style>
</style>

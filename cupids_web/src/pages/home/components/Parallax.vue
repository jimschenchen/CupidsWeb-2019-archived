<template>
  <v-parallax
    dark
    height="800"
    src="@/assets/霜星.jpg"
  >
    <v-row
      align="center"
      justify="center"
    >
      <h1 class="display-2 font-weight-thin mb-4">{{parallaxData.heading}}</h1>
      <h4 class="subheading">{{parallaxData.subheading}}</h4>
    </v-row>
  </v-parallax>
</template>

<script>
export default {
  name: 'Parallax',
  props: {
    parallaxData: Object
  }
}
</script>

<style>
</style>

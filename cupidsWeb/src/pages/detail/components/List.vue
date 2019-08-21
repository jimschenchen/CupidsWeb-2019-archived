<template>
  <div>
    <div class="item" v-for="(item, index) of list" :key="index">
      <div class="item-title border-bottom">
        <span class="item-title-icon"></span>
        {{item.title}}
      </div>
      <div v-if="item.children">
        <detail-list class="item-children" :list="item.children"></detail-list>
      </div>
    </div>
  </div>

</template>

<script>
export default {
  name: 'DetailList',
  props: {
    list: Array
  }
}
</script>

<style lang="stylus" scoped>
  @import '~styles/varibles.styl'
  .item-title
    line-height: .8rem
    font-size: .32rem
    padding: 0 .2rem
    .item-title-icon
      position: relative
      left: .06rem
      width: .36rem
      height: .36rem
      display: inline-block
      margin-right: .1rem
      // background: url(http://localhost:8080/static/img/logo.e88abb9.jpg) 0 0.1rem no-repeat
      background: url(../../../assets/logo.jpg) 0 0.1rem no-repeat
      background-size: .4rem .3rem
  .item-children
    padding: 0 .2rem
</style>

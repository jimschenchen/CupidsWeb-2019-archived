<template>
  <div>
    <div class="banner" @click="handleBannerClick">
      <img  class="banner-img" src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1566370062462&di=4a7fa89aa4953911d72019860ad7e959&imgtype=0&src=http%3A%2F%2Fi0.hdslb.com%2Fbfs%2Farchive%2Fb9c2673e216df62f6b5ea945cd25e21d296e1809.jpg" />
      <div class="banner-info">
        <div class="banner-title">
          明日方舟 - 阿米驴
        </div>
        <div class="banner-number">
          <span class="iconfont banner-icon">&#xe604;</span>
          39
        </div>
      </div>
    </div>
    <common-gallary
    :imgs="imgs"
    v-show="showGallary"
    @close="handleGallaryClose"
    >
    </common-gallary>
  </div>
</template>

<script>
import CommonGallary from 'common/gallary/Gallary'
export default {
  name: 'DetailBanner',
  components: {
    CommonGallary
  },
  data () {
    return {
      showGallary: false,
      imgs: ['https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1566382466006&di=19ad84d825ebf9cc206dd1efe03b715e&imgtype=0&src=http%3A%2F%2Fu.candou.com%2Fs%2F500%2F2019%2F0507%2F1557195579708.gif']
    }
  },
  methods: {
    handleBannerClick () {
      this.showGallary = true
    },
    handleGallaryClose () {
      this.showGallary = false
    }
  }
}
</script>

<style lang="stylus" scoped>
  .banner
    position: relative
    overflow: hidden
    height: 0
    padding-bottom: 55%
    .banner-img
      width: 100%
    .banner-info
      display: flex
      position: absolute
      left: 0
      right: 0
      bottom: 0
      line-height: .6rem
      color: #fff
      background-image: linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.8))
      .banner-title
        flex: 1
        font-size: .32rem
        padding: 0 .2rem
      .banner-number
        margin-top: .14rem
        padding: 0 .4rem
        line-height: .32rem
        height: .32rem
        border-radius: .2rem
        background: rgba(0, 0, 0, .8)
        .banner-icon
          font-size: .24rem
</style>

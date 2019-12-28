// vue.config.js
module.exports = {
  devServer: {
    proxy: {
      '/api': {
        target: './public/api',
        ws: true,
        changeOrigin: true
      },
      '/oapi': {
        target: 'http://localhost:80',
        ws: true,
        changeOrigin: true,
        pathRewrite: {
          // '^/oapi': 'http://localhost:80/api', // rewrite path
          '^/oapi': './public/oapi'
        }
      }
    }
  },
  publicPath: '/cupidsWeb/'
}

const path = require('path')
const { merge } = require('webpack-merge')
const MiniCssExtractPlugin = require('mini-css-extract-plugin')
const ImageMinimizerPlugin = require('image-minimizer-webpack-plugin')
const CopyPlugin = require('copy-webpack-plugin')
const RemoveFilesPlugin = require('remove-files-webpack-plugin')

const LocalhostFolder = path.basename(path.resolve(__dirname, '../../../'))

const common = {
  module: {
    rules: [
      {
        test: /\.scss$/,
        use: [
          {
            loader: MiniCssExtractPlugin.loader
          },
          {
            loader: 'css-loader',
            options: {
              url: false
            }
          },
          {
            loader: 'postcss-loader'
          },
          {
            loader: 'resolve-url-loader'
          },
          {
            loader: 'sass-loader',
            options: {
              sourceMap: true
            }
          }
        ]
      },
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader'
        }
      }
    ]
  },
  plugins: [
    new CopyPlugin({
      patterns: [{
        from: '*.*',
        to: '../img',
        context: './src/img/'
      }]
    }),
    new ImageMinimizerPlugin({
      generator: [
        {
          type: 'asset',
          preset: 'webp-custom-name',
          implementation: ImageMinimizerPlugin.imageminGenerate,
          options: {
            plugins: ['imagemin-webp']
          }
        }
      ]
    })
  ]
}

const preloader = merge(common, {
  entry: './src/js/preloader.js',
  output: {
    path: path.resolve(__dirname, '../js'),
    filename: 'preloader.min.js',
    publicPath: '../'
  },
  devtool: 'source-map',
  plugins: [
    new MiniCssExtractPlugin({
      filename: '../css/preloader.min.css'
    }),
    new RemoveFilesPlugin({
      before: {
        include: [
          './css',
          './img',
          './js'
        ]
      },
      after: {
        include: [
          './js/preloader.min.js',
          './js/preloader.min.js.map'
        ]
      }
    })
  ]
})

const wpLogin = merge(common, {
  entry: './src/js/wp-login.js',
  output: {
    path: path.resolve(__dirname, '../js'),
    filename: 'wp-login.min.js',
    publicPath: '../'
  },
  devtool: 'source-map',
  plugins: [
    new MiniCssExtractPlugin({
      filename: '../css/wp-login.min.css'
    })
  ]
})

const main = merge(common, {
  devServer: {
    port: 9000,
    static: {
      directory: path.resolve(__dirname, '../')
    },
    devMiddleware: {
      index: LocalhostFolder + '/',
      writeToDisk: true
    },
    client: {
      overlay: true
    },
    liveReload: true
  },
  entry: './src/js/main.js',
  output: {
    path: path.resolve(__dirname, '../js'),
    filename: 'main.min.js',
    publicPath: '../'
  },
  devtool: 'source-map',
  plugins: [
    new MiniCssExtractPlugin({
      filename: '../css/main.min.css'
    })
  ]
})

module.exports = [preloader, wpLogin, main]

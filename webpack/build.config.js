const path = require('path')
const { merge } = require('webpack-merge')
const MiniCssExtractPlugin = require('mini-css-extract-plugin')
const CssMinimizerPlugin = require('css-minimizer-webpack-plugin')
const ImageMinimizerPlugin = require('image-minimizer-webpack-plugin')
const CopyPlugin = require('copy-webpack-plugin')
const RemoveFilesPlugin = require('remove-files-webpack-plugin')

const common = {
  optimization: {
    minimize: true,
    minimizer: [
      // eslint-disable-next-line quotes
      `...`,
      new CssMinimizerPlugin({
        minimizerOptions: {
          preset: [
            'default',
            {
              discardComments: { removeAll: true }
            }
          ]
        }
      }),
      new ImageMinimizerPlugin({
        minimizer: {
          implementation: ImageMinimizerPlugin.imageminMinify,
          options: {
            plugins: [
              ['imagemin-mozjpeg', { quality: 40 }],
              ['imagemin-pngquant', {
                quality: [0.65, 0.90],
                speed: 4
              }],
              ['imagemin-gifsicle', { interlaced: true }],
              [
                'imagemin-svgo',
                {
                  plugins: [
                    {
                      name: 'preset-default',
                      params: {
                        overrides: {
                          removeViewBox: false,
                          addAttributesToSVGElement: {
                            params: {
                              attributes: [
                                { xmlns: 'http://www.w3.org/2000/svg' }
                              ]
                            }
                          }
                        }
                      }
                    }
                  ]
                }
              ]
            ]
          }
        },
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
  },
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
        root: './js',
        include: [
          'preloader.min.js'
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
  plugins: [
    new MiniCssExtractPlugin({
      filename: '../css/wp-login.min.css'
    })
  ]
})

const main = merge(common, {
  entry: './src/js/main.js',
  output: {
    path: path.resolve(__dirname, '../js'),
    filename: 'main.min.js',
    publicPath: '../'
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: '../css/main.min.css'
    })
  ]
})

module.exports = [preloader, wpLogin, main]

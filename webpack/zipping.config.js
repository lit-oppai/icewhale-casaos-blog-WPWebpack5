const path = require('path')
const CopyPlugin = require('copy-webpack-plugin')
const ZipPlugin = require('zip-webpack-plugin')
const RemoveFilesPlugin = require('remove-files-webpack-plugin')

const WPThemeName = path.basename(path.resolve(__dirname, '../'))

const dateObj = new Date()
const year = dateObj.getUTCFullYear()
const month = dateObj.getUTCMonth() + 1
const day = dateObj.getUTCDate()
const zipVersion = '-' + year + '_' + month + '_' + day

module.exports = () => {
  return {
    entry: { },
    output: {
      path: path.resolve(__dirname, '../zipped-theme'),
      publicPath: '../'
    },
    plugins: [
      new CopyPlugin({
        patterns: [
          {
            from: './**',
            to: WPThemeName + '/',
            globOptions: {
              dot: false,
              gitignore: false,
              ignore: [
                '**/node_modules/**',
                '**/src/**',
                '**/webpack/**',
                '**/composer.json',
                '**/LICENSE',
                '**/package-lock.json',
                '**/package.json',
                '**/postcss.config.js',
                '**/README.md'
              ]
            }
          }
        ]
      }),
      new ZipPlugin({
        path: './',
        filename: 'zip' + zipVersion + '.zip',
        extension: 'zip',
        fileOptions: {
          mtime: new Date(),
          mode: 0o100664,
          compress: true,
          forceZip64Format: false
        },
        zipOptions: {
          forceZip64Format: false
        },
        exclude: [/\.map$/]
      }),
      new RemoveFilesPlugin({
        before: {
          include: [
            './zipped-theme'
          ]
        },
        after: {
          root: './zipped-theme',
          include: [
            WPThemeName
          ]
        }
      })
    ]
  }
}

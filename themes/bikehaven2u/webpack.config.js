const path = require("path");
const webpack = require("webpack");
const ExtractTextPlugin = require("extract-text-webpack-plugin");
const OptimizeCssAssetsPlugin = require("optimize-css-assets-webpack-plugin");
const BrowserSyncPlugin = require("browser-sync-webpack-plugin");

const config = {
  entry: "./resources/assets/src/js/index.js",
  output: {
    path: path.resolve(__dirname, "resources/assets/dist/js"),
    filename: "bundle.js",
    publicPath: "resources/assets/dist"
  },
  module: {
    rules: [
      {
        test: /\.vue$/,
        loader: "vue-loader"
      },
      {
        test: /\.js$/,
        use: [
          {
            loader: "babel-loader",
            options: {
              presets: ["env"]
            }
          }
        ]
      },
      {
        test: /.scss$/,
        use: ExtractTextPlugin.extract({
          fallback: "style-loader",
          use: ["css-loader", "postcss-loader", "sass-loader"]
        })
      }
    ]
  },
  resolve: {
    alias: {
      vue: "vue/dist/vue.js"
    }
  },
  optimization: {
    minimize: true
  },
  plugins: [
    new ExtractTextPlugin("../css/main.css"),
    new BrowserSyncPlugin({
      proxy: "bikehaven.local",
      port: 3000,
      files: ["**/*.php"],
      ghostMode: {
        clicks: false,
        location: false,
        forms: false,
        scroll: false
      },
      injectChanges: true,
      logFileChanges: true,
      logLevel: "debug",
      logPrefix: "webpack",
      notify: true,
      reloadDelay: 0
    })
  ]
};

if (process.env.NODE_ENV === "production") {
  config.plugins.push(new OptimizeCssAssetsPlugin());
}

module.exports = config;

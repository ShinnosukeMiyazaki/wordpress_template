const path = require("path");

module.exports = {
  entry: {
    app: "./src/js/app.js",
  },
  output: {
    path: `${__dirname}/assets/js/`,
    filename: "[name].bundle.js",
  },
  optimization: {
    splitChunks: {
      name: "vendor",
      chunks: "initial",
    },
  },
  mode: "development",
  module: {
    rules: [
      {
        test: /\.js$/,
        use: {
          loader: "babel-loader",
        },
      },
    ],
  },
};

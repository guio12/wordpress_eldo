const path = require("path");
const resources = [
  "variables.scss",
  "mediaQueries.scss",
  "mixins.scss",
  "fonts.scss"
];
module.exports = resources.map(file => path.resolve(__dirname, file));
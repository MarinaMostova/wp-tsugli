// const { src, dest, watch, parallel, series } = require("gulp");

// const scss = require("gulp-sass")(require("sass"));
// const concat = require("gulp-concat");
// const uglify = require("gulp-uglify-es").default;

// const browserSync = require("browser-sync").create();
// const autoprefixer = require("gulp-autoprefixer");
// const clean = require("gulp-clean");

// function styles() {
//   return src("assets/scss/style.scss")
//     .pipe(autoprefixer({ overrideBrowserlist: ["last 10 version"] }))
//     .pipe(concat("style.min.scss"))
//     .pipe(scss({ outputStyle: "compressed" }))
//     .pipe(dest("assets/css"))
//     .pipe(browserSync.stream());
// }

// function scripts() {
//   // return src(["node_modules/swiper/swiper-bundle.js", "assets/js/main.js"]);
//   return src("assets/js/main.js")
//     .pipe(concat("main.min.js"))
//     .pipe(uglify())
//     .pipe(dest("assets/js"))
//     .pipe(browserSync.stream());
// }

// function watching() {
//   watch(["assets/scss/style.scss"], styles);
//   watch(["assets/js/main.js"], scripts);
//   watch(["*.php"]).on("change", browserSync.reload);
// }

// function browsersync() {
//   browserSync.init({
//     proxy: "http://tsugli/",
//     host: "tsugli",
//     open: "external",
//   });
// }

// function cleanDist() {
//   return src("dist").pipe(clean());
// }

// function building() {
//   return src(
//     ["assets/css/style.min.css", "assets/js/main.min.js", "assets/**/*.html"],
//     {
//       base: "assets",
//     }
//   ).pipe(dest("dist"));
// }

// exports.styles = styles;
// exports.scripts = scripts;
// exports.watching = watching;
// exports.browsersync = browsersync;

// exports.build = series(cleanDist, building);

// exports.default = parallel(styles, scripts, browsersync, watching);
const { src, dest, watch, parallel, series } = require("gulp");

const scss = require("gulp-sass")(require("sass"));
const concat = require("gulp-concat");
const uglify = require("gulp-uglify-es").default;

const browserSync = require("browser-sync").create();
const autoprefixer = require("gulp-autoprefixer");
const clean = require("gulp-clean");
const changed = require("gulp-changed");

function styles() {
  return src("assets/scss/style.scss")
    .pipe(changed("assets/css")) // Используем плагин changed
    .pipe(autoprefixer({ overrideBrowserlist: ["last 10 version"] }))
    .pipe(concat("style.min.css"))
    .pipe(scss({ outputStyle: "compressed" }))
    .pipe(dest("assets/css"))
    .pipe(browserSync.stream());
}

function scripts() {
  // return src(["node_modules/swiper/swiper-bundle.js", "assets/js/main.js"]);
  return src("assets/js/main.js")
    .pipe(concat("main.min.js"))
    .pipe(uglify())
    .pipe(dest("assets/js"))
    .pipe(browserSync.stream());
}

function watching() {
  watch("assets/scss/**/*.scss", styles); // Обратите внимание на использование "**/*.scss"
  watch(["assets/js/main.js"], scripts);
  watch(["*.php"]).on("change", browserSync.reload);
}

function browsersync() {
  browserSync.init({
    proxy: "http://tsugli/",
    host: "tsugli",
    open: "external",
  });
}

function cleanDist() {
  return src("dist").pipe(clean());
}

function building() {
  return src(
    ["assets/css/style.min.css", "assets/js/main.min.js", "assets/**/*.php"],
    {
      base: "assets",
    }
  ).pipe(dest("dist"));
}

exports.styles = styles;
exports.scripts = scripts;
exports.watching = watching;
exports.browsersync = browsersync;

exports.build = series(cleanDist, building);

exports.default = parallel(styles, scripts, browsersync, watching);

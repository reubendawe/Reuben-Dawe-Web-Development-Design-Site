const { src, dest, watch, series } = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const minify = require('gulp-clean-css');
const rename = require('gulp-rename');

function compilescss() {
  return src('./src/scss/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(postcss([autoprefixer()]))   // modern way
    .pipe(minify())
    .pipe(rename({ suffix: '.min' }))
    .pipe(dest('./dist/css'));         // fixed path
}

function watchTask() {
  watch('./src/scss/**/*.scss', compilescss);
}

exports.default = series(compilescss, watchTask);
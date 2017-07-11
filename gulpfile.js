var gulp = require('gulp')
var rename = require('gulp-rename')
var pug = require('gulp-pug')
var less = require('gulp-less')
var autoprefixer = require('gulp-autoprefixer')
var clean_css = require('gulp-clean-css')
var sourcemaps = require('gulp-sourcemaps')

gulp.task('pug:index', function () {
  return gulp.src('index-legacy.pug')
    .pipe(pug({
      basedir: './',
      locals: {
      }
    }))
    .pipe(gulp.dest('./'))
})

// gulp.task('lessc:chewie', function () {
//   return gulp.src('styles/chewie.less')
//     .pipe(less())
//     .pipe(gulp.dest('./styles/'))
// })

// gulp.task('minify:chewie', ['lessc:chewie'], function () {
//   return gulp.src('styles/chewie.css')
//     .pipe(clean_css())
//     .pipe(rename('chewie.min.css'))
//     .pipe(gulp.dest('./styles/'))
// })

gulp.task('lessc:legacy', function () {
  return gulp.src('legacy.less')
    .pipe(less())
    .pipe(autoprefixer({
      grid: true,
      cascade: false,
    }))
    .pipe(gulp.dest('./'))
})

gulp.task('minify:legacy', ['lessc:legacy'], function () {
  return gulp.src('legacy.css')
    .pipe(sourcemaps.init())
    .pipe(clean_css())
    .pipe(rename('legacy.min.css'))
    .pipe(sourcemaps.write('./')) // write to an external .map file
    .pipe(gulp.dest('./'))
})

gulp.task('build', ['pug:index'/*, 'minify:chewie'*/, 'minify:legacy'])

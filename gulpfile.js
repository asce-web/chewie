var gulp = require('gulp')
var rename = require('gulp-rename')
var pug = require('gulp-pug')
var less = require('gulp-less')
var autoprefixer = require('gulp-autoprefixer')
var clean_css = require('gulp-clean-css')

gulp.task('pug:index', function () {
  return gulp.src('index-legacy.pug')
    .pipe(pug({
      basedir: './'
    , locals: {
      }
    }))
    .pipe(gulp.dest('./'))
})

gulp.task('lessc:chewie', function () {
  return gulp.src('styles/chewie.less')
    .pipe(less())
    .pipe(gulp.dest('./styles/'))
})

gulp.task('minify:chewie', ['lessc:chewie'], function () {
  return gulp.src('styles/chewie.css')
    .pipe(clean_css())
    .pipe(rename('chewie.min.css')) // TODO: use a SourceMap!
    .pipe(gulp.dest('./styles/'))
})

gulp.task('lessc:legacy', function () {
  return gulp.src('legacy.less')
    .pipe(less())
    .pipe(autoprefixer({
      grid: true
    }))
    .pipe(gulp.dest('./'))
})

gulp.task('minify:legacy', ['lessc:legacy'], function () {
  return gulp.src('legacy.css')
    .pipe(clean_css())
    .pipe(rename('legacy.min.css')) // TODO: use a SourceMap!
    .pipe(gulp.dest('./'))
})

gulp.task('build', ['pug:index', 'minify:chewie', 'minify:legacy'])
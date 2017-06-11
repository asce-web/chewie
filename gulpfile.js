var gulp = require('gulp')
var pug = require('gulp-pug')
var less = require('gulp-less')

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
    .pipe(gulp.dest('./styles'))
})

gulp.task('lessc:legacy', function () {
  return gulp.src('src/legacy.less')
    .pipe(less())
    .pipe(gulp.dest('./'))
})

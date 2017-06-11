var gulp = require('gulp')
var pug = require('gulp-pug')

gulp.task('pug:index', function () {
  return gulp.src('index-legacy.pug')
    .pipe(pug({
      basedir: './'
    , locals: {
      }
    }))
    .pipe(gulp.dest('./'))
})

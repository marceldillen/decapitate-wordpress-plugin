var gulp = require('gulp');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');

gulp.task('watch',function() {
  gulp.watch('src/**/*.js',['scripts']);
});

gulp.task('build', ['scripts']);

gulp.task('scripts', function() {
  return gulp.src([
      './src/js/dwp_admin_page.js'
    ])
    .pipe(concat('dwp_scripts.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./dist/js/'));
});

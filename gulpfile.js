var gulp = require('gulp'),
  connect = require('gulp-connect'),
	opn = require('opn');

// Run local server 
gulp.task('connect', function() {
  connect.server({
    root: 'app',
    livereload: true,
    port: 8080
  });
  opn('http://app:8080');
});

 // HTML
gulp.task('php', function () {
  gulp.src('./app/*.php')
    .pipe(connect.reload());
});

  // CSS
gulp.task('css', function () {
  gulp.src('./app/css/*.css')
    .pipe(connect.reload())
});

  // JS
gulp.task('js', function () {
  gulp.src('./app/js/*.js')
    .pipe(connect.reload());
});


 // Слежение
gulp.task('watch', function () {
  gulp.watch(['./app/*.php'], ['php']);
  gulp.watch(['./app/css/*.css'], ['css']);
  gulp.watch(['./app/js/*.js'], ['js']);
});

 // задача по умолчанию
gulp.task('default', ['connect', 'watch']);
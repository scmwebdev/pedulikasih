var gulp = require('gulp');
var plumber = require('gulp-plumber');
var sass = require('gulp-sass');
var rename = require('gulp-rename');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
var browserSync = require('browser-sync');
var livereload = require('gulp-livereload');

/* not used for now */
// var phpconnect = require('gulp-connect-php');

/* path to peduli kasih theme */
var path = 'backend/wp-content/themes/peduli-kasih';

var reload = browserSync.reload();

gulp.task('sass', function() {
  gulp.src(path + '/inc/stylesheet/main.scss')
  	.pipe(plumber())
  	.pipe(sourcemaps.init())
    .pipe(sass())
    .pipe(rename({
        basename : 'style'
    }))
    .pipe(autoprefixer())
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(path)) //output the file at theme root
    .pipe(livereload());
});

gulp.task('watch', ['sass'], function(){
  livereload.listen();
  gulp.watch(path + '/inc/stylesheet/**/*.scss', ['sass']);
  gulp.watch(path + '/inc/stylesheet/*.scss', ['sass']);
});

gulp.task('default', ['sass', 'watch']);

/* ========================================================
 * Tasks with Browser Sync
 * ======================================================== */
gulp.task('sass_live', function() {
  gulp.src(path + 'inc/stylesheet/main.scss')
    .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(sass({outputStyle: 'compressed'}))
    .pipe(rename({
        basename : 'style',
        suffix: '.min'
    }))
    .pipe(autoprefixer())
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(path)) //output the file at root (app/)
    .pipe(browserSync.reload({
      stream: true
    }));
});

gulp.task('watch_live', ['browserSync', 'sass'], function(){
  gulp.watch('app/style/main.scss', ['sass']);
});

gulp.task('phpconnect', function(){
  php.server({
    base: 'backend',
    port: '8010',
    keepalive: true
  });
});

gulp.task('browserSync', function(){
  browserSync({
    proxy: '127.0.0.1:8010',
    port: 8080,
    open: true,
    notify: false
  });
});

gulp.task('serve', ['browserSync']);




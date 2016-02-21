var gulp = require('gulp');
var plumber = require('gulp-plumber');
var sass = require('gulp-sass');
var rename = require('gulp-rename');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
var browserSync = require('browser-sync');
var reload  = browserSync.reload;
// var livereload = require('gulp-livereload');

/* not used for now */
// var phpconnect = require('gulp-connect-php');

/* path to peduli kasih theme */
var path = 'backend/wp-content/themes/peduli-kasih';



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
    // .pipe(livereload());
});

gulp.task('watch', ['sass'], function(){
  // livereload.listen();
  gulp.watch(path + '/inc/stylesheet/**/*.scss', ['sass']);
  gulp.watch(path + '/inc/stylesheet/*.scss', ['sass']);
});

gulp.task('default', ['sass', 'watch']);

/* ========================================================
 * Tasks with Browser Sync
 * ======================================================== */
 gulp.task('browserSync', function(){

  var files = [
    './style.css',
    './*.php'
  ];

  browserSync.init(files, {
    proxy: "localhost/pedulikasih/",
    notify: 'false'
  });
});

gulp.task('sass_live', function() {
  return gulp.src('inc/stylesheet/main.scss')
    .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(sass({outputStyle: 'compressed'}))
    .pipe(rename({
        basename : 'style'
    }))
    .pipe(autoprefixer())
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('./')) //output the file at root (app/)
    .pipe(reload({stream:true}));
});

gulp.task('serve', ['sass_live', 'browserSync'], function(){
    gulp.watch('inc/stylesheet/**/*.scss', ['sass_live']);
});




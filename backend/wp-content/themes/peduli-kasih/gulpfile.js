var gulp = require('gulp');
var plumber = require('gulp-plumber');
var sass = require('gulp-sass');
var rename = require('gulp-rename');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
var concat = require('gulp-concat');
var browserSync = require('browser-sync');
var uglify = require('gulp-uglify');
var reload = browserSync.reload;
// var livereload = require('gulp-livereload');

/* path to peduli kasih theme */
// var path = 'backend/wp-content/themes/peduli-kasih';

/* ========================================================
 * Tasks with Browser Sync
 * ======================================================== */
gulp.task('browserSync', function() {

    var files = [
        './*.css',
        './*.php',
        './inc/template/*.php'
    ];

    browserSync.init(files, {
        proxy: "localhost/pedulikasih/",
        notify: 'false'
    });
});

gulp.task('sass', function() {
    return gulp.src('./inc/sass/main.scss')
        .pipe(plumber())
        .pipe(sourcemaps.init())
        .pipe(sass({ outputStyle: 'compressed' }))
        .pipe(rename({basename: 'style'}))
        .pipe(autoprefixer())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('./')) //output the file at root (app/)
        .pipe(reload({ stream: true }));
});

gulp.task('js', function() {
    return gulp.src([
            './inc/js/jquery.js',
            './inc/js/slick.js',
            './inc/js/main.js',
        ])
        .pipe(concat('main.js'))
        .pipe(gulp.dest('./'))
        .pipe(reload({ stream: true }));
});


gulp.task('default', ['sass', 'js', 'browserSync'], function() {
    gulp.watch('./inc/sass/**/*.scss', ['sass']);
    gulp.watch('./inc/sass/*.scss', ['sass']);
    gulp.watch('./inc/js/*.js', ['js']);
});

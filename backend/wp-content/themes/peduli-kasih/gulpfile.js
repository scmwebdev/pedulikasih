var gulp = require('gulp');
var plumber = require('gulp-plumber');
var sass = require('gulp-sass');
var rename = require('gulp-rename');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
var concat = require('gulp-concat');
var browserSync = require('browser-sync');
var reload = browserSync.reload;
// var livereload = require('gulp-livereload');

/* path to peduli kasih theme */
var path = 'backend/wp-content/themes/peduli-kasih';



gulp.task('sass', function() {
    gulp.src(path + '/inc/stylesheet/main.scss')
        .pipe(plumber())
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(rename({
            basename: 'style'
        }))
        .pipe(autoprefixer())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(path)) //output the file at theme root
        // .pipe(livereload());
});

gulp.task('watch', ['sass'], function() {
    // livereload.listen();
    gulp.watch(path + '/inc/stylesheet/**/*.scss', ['sass']);
    gulp.watch(path + '/inc/stylesheet/*.scss', ['sass']);
});

gulp.task('default', ['sass', 'watch']);

/* ========================================================
 * Tasks with Browser Sync
 * ======================================================== */
gulp.task('browserSync', function() {

    var files = [
        './style.css',
        './*.php'
    ];

    browserSync.init(files, {
        proxy: "localhost/pedulikasih/",
        // middleware: function(req, res, next) {
        //     console.log('Adding CORS header for ' + req.method + ': ' + req.url);
        //     res.setHeader('Access-Control-Allow-Origin', '*');
        //     next();
        // },
        notify: 'false'
    });
});

gulp.task('sass_live', function() {
    return gulp.src('inc/stylesheet/main.scss')
        .pipe(plumber())
        .pipe(sourcemaps.init())
        .pipe(sass({ outputStyle: 'compressed' }))
        .pipe(rename({
            basename: 'style'
        }))
        .pipe(autoprefixer())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('./')) //output the file at root (app/)
        .pipe(reload({ stream: true }));
});

gulp.task('js_live', function() {
    return gulp.src([
            'inc/js/jquery.js',
            'inc/js/slick.js',
            'inc/js/main.js',
        ])
        .pipe(concat('main.js'))
        .pipe(gulp.dest('./'))
        .pipe(reload({ stream: true }));
});


gulp.task('serve', ['sass_live', 'js_live', 'browserSync'], function() {
    gulp.watch('inc/stylesheet/**/*.scss', ['sass_live']);
    gulp.watch('inc/js/*.js', ['js_live']);
});

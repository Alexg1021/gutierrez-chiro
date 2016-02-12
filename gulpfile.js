var gulp = require('gulp'),
    watch = require('gulp-watch'),
    less = require('gulp-less'),
    plumber = require('gulp-plumber'),
    notify = require('gulp-notify');

gulp.task('less', function () {
    gulp.src('./wp-content/themes/guchiro/static/less/app.less')
        .pipe(plumber())
        .pipe(less())
        .pipe(gulp.dest('./wp-content/themes/guchiro/static/css/'))
        .pipe(notify({
            title: 'Gulp',
            subtitle: 'Less compiled',
            message: "Stay Golden, Ponyboy..."
        }));
});

gulp.task('watch', function () {
    gulp.watch('./wp-content/themes/guchiro/static/less/*.less', ['less']);
});

gulp.task('default', ['less', 'watch']);

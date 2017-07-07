var gulp = require("gulp");
var sass = require('gulp-sass');
var concat = require('gulp-concat');

gulp.task('sass', function () {
	return gulp.src('./resources/assets/sass/theme.scss')
			.pipe(sass().on('error', sass.logError))
			.pipe(gulp.dest('./public_html/css'));
});

gulp.task('sass:watch', function () {
	gulp.watch('./resources/assets/sass/theme.scss', ['sass']);
});

gulp.task('concat', function() {
	gulp.src('./resources/assets/js/*.js')
	.pipe(concat('build.js'))
	.pipe(gulp.dest('public_html/js'))
});
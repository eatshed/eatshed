var gulp = require('gulp'),
	autoprefixer = require('gulp-autoprefixer'),
	browserSync = require('browser-sync'),
	nano = require('gulp-cssnano'),
	notify = require('gulp-notify'),
	sass = require('gulp-sass'),
	sourcemaps = require('gulp-sourcemaps'),
	svgstore = require('gulp-svgstore'),
	svgmin = require('gulp-svgmin'),
	cheerio = require('gulp-cheerio');

var paths = {
	devUrl: 'http://origin-wordpress.test',
	theme: './wp-content/themes/origin',
	stylesSrc: './src/styles',
	stylesDest: './css',
	iconsSrc: './src/icons/*',
	iconsDest: './icons/'
};

var autoprefixerOptions = {
	browsers: ['last 2 versions', 'ie >= 9', 'Android >= 2.3', 'ios >= 7']
};

var reload  = browserSync.reload;

gulp.task('browser-sync', function() {
	browserSync({
		proxy: paths.devUrl,
		host: 'localhost',
		port: 8888,
		injectChanges: true
	});
});

gulp.task('sass', function () {
	gulp.src(paths.theme + '/' + paths.stylesSrc + '/*.scss')
	.pipe(sourcemaps.init())
	.pipe(sass({style: 'compressed'}))
	.on("error", notify.onError(function (error) { return error.message; }))
	.pipe(autoprefixer(autoprefixerOptions))
	.pipe(sourcemaps.write('maps'))
	.pipe(gulp.dest(paths.theme + '/' + paths.stylesDest))
	.pipe(browserSync.reload({ stream: true }));
});

gulp.task('icons', function () {
	return gulp.src(paths.theme + '/' + paths.iconsSrc)
		.pipe(svgmin())
		.pipe(svgstore({ fileName: 'icons.svg', inlineSvg: true}))
		.pipe(cheerio({
			run: function ($, file) {
				$('[fill]').removeAttr('fill');
			},
			parserOptions: { xmlMode: true }
		}))
	.pipe(gulp.dest(paths.theme + '/' + paths.iconsDest));
  });

gulp.task('watch', ['sass', 'browser-sync', 'icons'], function () {
	gulp.watch(paths.theme + '/' + paths.stylesSrc + '/**/*.scss', ['sass']);
	gulp.watch(paths.theme + '/' + '*.php').on('change', reload);
});

gulp.task('default', function () {
	gulp.src(paths.theme + '/' + paths.stylesSrc + '/*.scss')
	.pipe(sass())
	.pipe(autoprefixer(autoprefixerOptions))
	.pipe(nano())
	.pipe(gulp.dest(paths.theme + '/' + paths.stylesDest));
});

var del          = require('del'),
    gulp         = require('gulp'),
    autoprefixer = require('gulp-autoprefixer'),
    cleancss     = require('gulp-clean-css'),
    concat       = require('gulp-concat'),
    notify       = require('gulp-notify'),
    plumber      = require('gulp-plumber'),
    sass         = require('gulp-sass'),
    sourcemaps   = require('gulp-sourcemaps'),
    uglify       = require('gulp-uglify'),
    zip          = require('gulp-zip');

var src_paths = {
                  scripts: [
                    './node_modules/jquery/dist/jquery.slim.js',
                    './node_modules/tether/dist/js/tether.js',
                    './node_modules/bootstrap/dist/js/bootstrap.js',
                    './src/themes/joshadamboyd/js/skip-link-focus-fix.js',
                    './node_modules/jquery.scrollTo/jquery.scrollTo.js',
                    './src/themes/joshadamboyd/js/global.js',
                    './src/themes/joshadamboyd/js/scripts.js'
                  ],
                  styles: [
                    './src/themes/joshadamboyd/css/style.scss'
                  ]
                };

var build_paths = {
                    scripts: './wp-content/themes/joshadamboyd/assets/js',
                    styles: './wp-content/themes/joshadamboyd/assets/css'
                  },
                  build_files = {
                    scripts: 'script.js',
                    styles: 'style.css'
                  };

var watch_paths = {
                    scripts: './src/themes/joshadamboyd/js/**/*.js',
                    styles: './src/themes/joshadamboyd/css/**/*.scss'
                  };

gulp.task('default', ['clean', 'scripts', 'styles', 'watcher']);

gulp.task('build', ['clean', 'scripts', 'styles']);

gulp.task('clean', function() {
  return del([
    build_paths.scripts + '/' + build_files.scripts,
    build_paths.styles + '/' + build_files.styles
  ]);
});

gulp.task('package', function () {
  return gulp.src('./wp-content/themes/**/*')
             .pipe(zip('joshadamboyd.zip'))
             .pipe(gulp.dest('./dist'));
});

gulp.task('scripts', function() {
  return gulp.src(src_paths.scripts)
             .pipe(concat(build_files.scripts))
             .pipe(sourcemaps.init())
             .pipe(uglify())
             .pipe(sourcemaps.write())
             .pipe(gulp.dest(build_paths.scripts))
             .pipe(notify({ message: 'Scripts task completed' }));
});

gulp.task('styles', function() {
  return gulp.src(src_paths.styles)
             .pipe(plumber())
             .pipe(sass({ style: 'expanded' }))
             .pipe(autoprefixer([
               'last 2 version',
               'safari 5',
               'ie 8', 'ie 9',
               'opera 12.1',
               'ios 6',
               'android 4'
             ], {
               cascade: true
             }))
             .pipe(cleancss())
             .pipe(concat(build_files.styles))
             .pipe(gulp.dest(build_paths.styles))
             .pipe(notify({ message: 'Styles task completed' }));
});

gulp.task('watch', ['clean', 'scripts', 'styles', 'watcher']);

gulp.task('watcher', function() {
  gulp.watch(watch_paths.scripts, ['scripts']);
  gulp.watch(watch_paths.styles, ['styles']);
});

var del          = require('del'),
    gulp         = require('gulp'),
    autoprefixer = require('gulp-autoprefixer'),
    cleancss     = require('gulp-clean-css'),
    concat       = require('gulp-concat'),
    notify       = require('gulp-notify'),
    plumber      = require('gulp-plumber'),
    sass         = require('gulp-sass'),
    sourcemaps   = require('gulp-sourcemaps'),
    uglify       = require('gulp-uglify');

var src_paths = {
      scripts: [
        'src/js/app.js'
      ],
      styles: [
        'src/css/app.scss'
      ]
    };

var build_paths = {
      scripts: 'dist/js',
      styles:  'dist/css'
    },
    build_files = {
      scripts: 'all.min.js',
      styles: 'all.min.css'
    };

gulp.task('default', ['clean', 'scripts', 'styles', 'watch']);

gulp.task('build', ['clean', 'scripts', 'styles']);

gulp.task('clean', function() {
  return del([
    build_paths.scripts + '/' + build_files.scripts,
    build_paths.styles + '/' + build_files.styles
  ]);
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

gulp.task('watch', function() {
  gulp.watch(src_paths.scripts, ['scripts']);
  gulp.watch(src_paths.styles, ['styles']);
});

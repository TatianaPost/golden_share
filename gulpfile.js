'use strict';

var gulp = require('gulp'),
watch = require('gulp-watch'),
prefixer = require('gulp-autoprefixer'),
uglify = require('gulp-uglify'),
sass = require('gulp-sass'),
sourcemaps = require('gulp-sourcemaps'),
rigger = require('gulp-rigger'),
cssmin = require('gulp-minify-css'),
imagemin = require('gulp-imagemin'),
pngquant = require('imagemin-pngquant'),
rimraf = require('rimraf'),
browserSync = require("browser-sync"), 
notify = require("gulp-notify"),
ftp = require('gulp-ftp'),
gutil = require('gulp-util'),
bower = require('gulp-bower'),
changed = require('gulp-changed'),
wait = require('gulp-wait2'),
reload = browserSync.reload;

var path = {
    server: {
        theme: 'server/' 
    },
    build: {
        theme: 'build/' 
    },
    src: {
        theme: 'golden/**/*' 
    },
    watch: {
        theme: 'golden/**/*'  
    },
    clean: './build'
};


gulp.task('deploy', function () {
    gulp.src(path.src.theme).pipe(changed('server'))
    
    .pipe(ftp({
        host: 'landos.ftp.ukraine.com.ua',
        user: 'landos_goldenshar',
        pass: '8vet35c6',
        remotePath: '/wp-content/themes/golden'
    }))
    .pipe(gutil.noop());
   gulp.src(path.src.theme)
  .pipe(gulp.dest('server/'));
});

 gulp.task('stylebuild', function () {
    gulp.src(['golden/css/src/style.scss', 'golden/css/src/display.scss'])  
        .pipe(rigger())
        .pipe(sourcemaps.init())
        .pipe(sass({
            sourceMap: true,
            errLogToConsole: false
        }))
        .on('error', function(err) {
            notify().write(err);
            this.emit('end');
        })
        .pipe(prefixer())
   //     .pipe(cssmin())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('golden/css/'));
 });
 
 
gulp.task('donestyle', function() {
    gulp.src('src/style/style.scss')
    .pipe(notify("Стили обновлены"));
    
});

gulp.task('build', [ 
    'deploy'
    ]);


gulp.task('watch', function(){
    watch([path.watch.theme], function(event, cb) {
         gulp.start('deploy');
    });
    watch(['golden/css/src/style.scss', 'golden/css/src/display.scss'], function(event, cb) {
         gulp.start('stylebuild');
         gulp.start('deploy');
    });
});


gulp.task('default', ['build', 'watch' ]);


var gulp = require('gulp');
var browserSync = require('browser-sync').create();

gulp.task('default', function(){
    browserSync.init({
        proxy: {
            target: "http://cbp-exercises.local:8888"
        },
        open: 'external',
        host: 'www.cbp-exercises.local',
        port: 3000,
        files: ['*.css', '*.html']

    });
});

// we have set our first gulp file


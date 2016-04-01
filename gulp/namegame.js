
/*
|--------------------------------------------------------------------------
| Namegame Gulp Task
|--------------------------------------------------------------------------
|
| Gulp tasks to handle the angular and other scripts 
| of the site. 
| 
|
*/

'use strict';

var path = require('path');
var gulp = require('gulp');
var conf = require('./config');
var merge = require('merge-stream');

var browserSync = require('browser-sync');
var plugins = require('gulp-load-plugins')({
   pattern: ['gulp-*', 'main-bower-files', 'del']
});




/**
 * Build the scripts and send them to S3
*/
gulp.task('namegame-css', function () {
    return gulp.src([
        path.join(conf.paths.min, '/assets/css/*.css'),
        path.join('!' + conf.paths.min, '/assets/css/app.min.css')
      ])
      .pipe(plugins.flatten())
      .pipe(plugins.gzip())
      .pipe(plugins.s3(conf.amazon, conf.awsOptions('css'))).on('error', conf.errorHandler('Uploading Namegame CSS'));
});


/**
 * Build the scripts and send them to S3
*/
gulp.task('namegame-scripts', ['vendor', 'angular', 'templates'], function () {
    return gulp.src([
        path.join(conf.paths.min, '/assets/scripts/*.js'),
        path.join('!' + conf.paths.min, '/assets/scripts/app.min.js.gz')
      ])
      
      .pipe(plugins.uglify()).on('error', conf.errorHandler('Building Script Files'))
      .pipe(plugins.gzip())
      .pipe(plugins.s3(conf.amazon, conf.awsOptions('scripts'))).on('error', conf.errorHandler('Uploading Scripts'))
      .pipe(gulp.dest(path.join(conf.paths.min, '/assets/scripts')));
});
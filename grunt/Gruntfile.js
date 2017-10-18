module.exports = function(grunt) {
  "use strict";
 
  grunt.initConfig(
  {
    sass: {
      dist: {
        options: {
          style: 'compressed',
          lineNumbers: true
        },
        files: {
          '../css/main.css': '../_sass/sassy.scss'
        }
      }
    },
    postcss: {
      options: {
        map: true,
        processors: [
          require('autoprefixer')({
              browsers: ['last 2 versions']
          })
        ]
      },
      dist: {
        src: '../css/*.css'
      }
    },
    watch: {
      livereload: {
        files: [
          '../_sass/*.scss'
        ],
        // tasks: ['sass','postcss:dist'],
        tasks: ['sass'],
        options: {
          livereload: true
        }
      }
    }
  });
 
  // Load tasks 
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-postcss');
 
  // Register tasks 
  grunt.registerTask('default', ['watch']);
};
module.exports = function(grunt) {

  grunt.initConfig({
    less: {
      styles: {
        files: {
          'src/stylesheets/styles.css': 'src/stylesheets/styles.less'
        }
      }
    },
    cssmin: {
      options: {
         processImport: false
      },
      target: {
        files: [{
          expand: true,
          cwd: 'src/stylesheets',
          src: ['styles.css'],
          dest: '',
          ext: '.min.css'
        }]
      }
    },
    uglify: {
      my_target: {
        files: {
          'main.min.js': ['bower_components/jquery/dist/jquery.min.js', 'bower_components/bootstrap/dist/js/bootstrap.min.js', 'bower_components/aos/dist/aos.js', 'bower_components/bootstrap/dist/js/bootstrap.min.js', 'src/scripts/main.js']
        }
      }
    },
    watch: {
      less: {
        files: ['src/stylesheets/styles.less', 'src/stylesheets/layout.less', 'src/stylesheets/text.less'],
        tasks: ['less', 'cssmin']
      },
      scripts: {
        files: ['src/scripts/main.js'],
        tasks: ['uglify'],
      },
    },
  });

  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.registerTask('default', ['less', 'cssmin', 'uglify']);

};
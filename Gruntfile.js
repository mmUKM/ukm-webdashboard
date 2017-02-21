module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    // grunt-contrib-copy

    copy: {
      dist: {
        files: [{
          expand: true,
          cwd: 'bower_components/jquery/dist',
          src: '*',
          dest: 'vendor/jquery'
        },
        {
          expand: true,
          cwd: 'bower_components/CMB2',
          src: '**',
          dest: 'vendor/cmb2'
        },
        {
          expand: true,
          cwd: 'bower_components/fitvids',
          src: 'jquery.fitvids.js',
          dest: 'vendor/fitvids'
        },
        {
          expand: true,
          cwd: 'bower_components/jqnewsTicker/js',
          src: 'newsTicker.js',
          dest: 'vendor/jqnewsticker'
        },
        {
          expand: true,
          cwd: 'bower_components/TGM-Plugin-Activation',
          src: 'class-tgm-plugin-activation.php',
          dest: 'vendor/tgmpa'
        },
        {
          expand: true,
          cwd: 'bower_components/uikit',
          src: '**',
          dest: 'vendor/uikit'
        }]
      }
    },

    // grunt-contrib-sass

    sass: {
      dist: { 
        options: {
          style: 'nested',
          sourcemap: 'none',
          noCache: true
        },
        files: {
          'style.css': 'scss/style.scss',
          'css/admin.css': 'scss/admin.scss'
        }
      }
    },


    // grunt-contrib-uglify

    uglify: {
      options: {
        banner: '/*! <%= pkg.name %> v<%= pkg.version %> by <%= pkg.author %> <%= grunt.template.today("yyyy-mm-dd") %> */\n',
        sourceMap: false
      },
      site: {
        src: 'js/scripts.js',
        dest: 'js/scripts.min.js'
      },
      admin: {
        src: 'js/admin.js',
        dest: 'js/admin.min.js'
      }
    },
    
    // grunt-banner

    usebanner: {
      taskName: {
        options: {
          position: 'top',
          banner: '/*\n'+
                  'Theme Name: UKM WebDashboard\n'+
                  'Theme URI: https://github.com/mmUKM/ukm-webdashboard\n'+
                  'Version: <%= pkg.version %>\n'+
                  'Description: <%= pkg.description %>\n'+
                  'Author: <%= pkg.author %>\n'+
                  'Author URI: https://www.facebook.com/jrajalu\n'+
                  'License: GNU General Public License v2\n'+
                  'License URI: http://www.gnu.org/licenses/gpl-2.0.html\n'+
                  '*/',
          linebreak: true
        },
        files: {
          src: [ 'style.css' ]
        }
      }
    },
    
    // grunt-cssbeautifier
    
    cssbeautifier : {
      files : ['style.css'],
      options : {
        indent: '  ',
        openbrace: 'end-of-line',
        autosemicolon: false
      }
    },

    // grunt-contrib-watch

    watch: {
      configFiles: {
        files: ['Gruntfile.js']
      },
      css: {
        files: [
          'scss/style.scss',
          'scss/admin.scss',
          'scss/*.scss'
        ],
        tasks: ['sass','usebanner'],
          options: {
            livereload: true
          }
      },
      js: {
        files: ['js/*.js'],
        tasks: ['uglify'],
          options: {
            spawn: false
          }
      }
    },

    // grunt-contrib-clean

    clean: {
      js:     [
              'vendor/jquery/*.js',
              'vendor/jquery/*.map',
              '!vendor/jquery/jquery.min.js',
              '!vendor/jquery/jquery.min.map'
              ],
      cmb2:   [
              'vendor/cmb2/tests',
              'vendor/cmb2/css/*.css',
              'vendor/cmb2/css/*.map',
              '!vendor/cmb2/css/*.min.css',
              'vendor/cmb2/css/sass',
              'vendor/cmb2/languages/*.po',
              'vendor/cmb2/languages/*.mo',
              '!vendor/cmb2/languages/*.pot',
              '!vendor/cmb2/languages/cmb2-en_GB.mo',
              '!vendor/cmb2/languages/cmb2-en_GB.po',
              '!vendor/cmb2/languages/cmb2-ms_MY.mo',
              '!vendor/cmb2/languages/cmb2-ms_MY.po',
              '!vendor/cmb2/*.php',
              'vendor/cmb2/coverage.clover',
              'vendor/cmb2/*.md',
              'vendor/cmb2/*.txt',
              'vendor/cmb2/phpunit.xml.dist'
              
              ],
      uikit:  [
              'vendor/uikit/less',
              'vendor/uikit/scss',
              'vendor/uikit/js/core',
              'vendor/uikit/js/*.js',
              '!vendor/uikit/js/*.min.js',
              'vendor/uikit/js/components/*.js',
              '!vendor/uikit/js/components/*.min.js',
              'vendor/uikit/css/*.css',
              '!vendor/uikit/css/*.almost-flat.min.css',
              'vendor/uikit/css/components/*.css',
              '!vendor/uikit/css/components/*.almost-flat.min.css'
              ]
    }
    
  }); // end Project configuration

  // load grunt task
 
  grunt.loadNpmTasks('grunt-banner');
  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-cssbeautifier');
  

  // execute grunt task
  
  grunt.registerTask('build', ['copy', 'sass', 'uglify', 'usebanner', 'clean', 'cssbeautifier']);
  grunt.registerTask('default', ['sass', 'uglify', 'usebanner', 'clean', 'cssbeautifier']);
  grunt.registerTask('dev', ['watch']);
  
};
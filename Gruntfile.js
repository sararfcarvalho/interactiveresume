'use strict';

module.exports = function(grunt) {
    require('time-grunt')(grunt);

    require('load-grunt-config')(grunt, {
        jitGrunt: {
            sass: 'node-sass'
        },
        config: {
            config: {
                theme: 'wp-content/themes/cenas'
            }
        }
    });

    grunt.registerTask('dev', function() {
        grunt.task.run([
            'clean',
            'copy',
            'sass',
            'watch'
        ]);
    });

    grunt.registerTask('dist', function() {
        grunt.task.run([
            'clean',
            'copy',
            'sass'
        ]);
    });

    grunt.registerTask('default', 'dev');
};

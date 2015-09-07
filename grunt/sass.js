var neat = require('node-neat').includePaths;

module.exports = {
    all: {
        options: {
            includePaths: [
                '<%= config.theme %>/bower_components',
                '<%= config.theme %>/sass'
            ].concat(neat)
        },

        files: [ {
            expand: true,
            cwd: '<%= config.theme %>/sass',
            src: '**/*.scss',
            dest: '<%= config.theme %>/css',
            ext: '.css'
        } ]
    }
};

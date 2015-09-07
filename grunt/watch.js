module.exports = {
    sass: {
        files: [
            '<%= config.theme %>/sass/**/*.{scss,sass}'
        ],

        tasks: [ 'sass' ],

        options: {
          livereload: 35730
        }
    },

    images: {
        files: [
            '<%= config.theme %>/sass/images/**/*.*'
        ],

        tasks: [ 'clean', 'copy', 'sass' ],

        options: {
          livereload: 35730
        }
    },

    other: {
        files: [
            '<%= config.theme %>/js/*.js',
            '<%= config.theme %>/**/*.php',
            '<%= config.theme %>/views/**/*.twig'
        ],

        options: {
          livereload: 35730
        }
    }
};

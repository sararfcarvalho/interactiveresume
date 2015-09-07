module.exports = {
    all: {
        files: [ {
            expand: true,
            cwd: '<%= config.theme %>/sass/images',
            src: '**/*.*',
            dest: '<%= config.theme %>/css/images'
        } ]
    }
};

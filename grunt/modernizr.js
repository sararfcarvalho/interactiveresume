module.exports = {
    'devFile': '<%= config.theme %>/bower_components/modernizr/modernizr.js',
    'outputFile': '<%= config.theme %>/js/modernizr.js',
    'extra': {
        'shiv': true,
        'printshiv': false,
        'load': true,
        'mq': false,
        'cssclasses': true
    },
    'extensibility': {
        'addtest': false,
        'prefixed': false,
        'teststyles': false,
        'testprops': false,
        'testallprops': false,
        'hasevents': false,
        'prefixes': false,
        'domprefixes': false
    },
    'uglify': true,
    'tests': [],
    'parseFiles': true,
    'matchCommunityTests': false,
    'customTests': []
};

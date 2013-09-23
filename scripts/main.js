requirejs.config({
    appDir: "../",
    baseUrl: "scripts",
    paths: {
        'jq': '//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min',
        'jqui': '//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min',
        'jqeasing': 'jquery.easing.1.3',
        'jqmw': 'jquery.mousewheel.min',
        'jqpopup': 'pop-ups',
        'nav': 'nav',
        'gallery':'gallery',
        'jqscroll':'jquery.mCustomScrollbar',
        'underscore':'//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min',
        'backbone':'//cdnjs.cloudflare.com/ajax/libs/backbone.js/1.0.0/backbone-min',
        'app':'app'
    },
    shim: {
        "jqui": {
            exports: "$",
            deps: ['jq']
        },
        "gallery": {
            exports: "$",
            deps: ['jq']
        },
        "underscore": {
            exports: "_"
        },
        "jqscroll":{
          exports:"mCustomScrollbar",
          deps:['jq']
        },
        "backbone": {
            exports: "Backbone",
            deps: ["underscore", "jq"]
        }
    }
});

require(['jq', 'jqui', 'jqeasing', 'jqmw', 'jqpopup', 'nav', 'gallery', 'jqscroll', 'underscore', 'backbone'], function($) {
    console.log("Loaded :)");    
    return {};
});
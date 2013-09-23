function htmlEncode(value){
    return $('<div/>').text(value).html();
}

$.fn.serializeObject = function() {
var o = {};
var a = this.serializeArray();
$.each(a, function() {
    if (o[this.name] !== undefined) {
        if (!o[this.name].push) {
            o[this.name] = [o[this.name]];
        }
        o[this.name].push(this.value || '');
    } else {
        o[this.name] = this.value || '';
    }
});
return o;
};

window.renderTemplate = function(name, el, json)
{
    var url = 'site/template/?name=' + name;
    $.ajax({
            url: url,
            method: 'GET',
            async: false,
            dataType: 'html',
            success: function(data) {
                    var tmpl = _.template(data);
                    $(el).html(tmpl(json));
            }
    });
}

$.ajaxPrefilter( function( options, originalOptions, jqXHR ) {
    options.url = 'http://localhost/SportAngel/index.php/' + options.url;
});

        var Page = Backbone.Model.extend({
        urlRoot:'api/page' 
        });
        
         var Contact = Backbone.Model.extend({
        urlRoot:'api/getContactFormParameters' 
        });
        //article#popup div.customScrollBox div.container div.content
        var PageView = Backbone.View.extend({
            el: 'div.pageView',
            render: function (options) {
                var that = this;
                if(options.id)
                {
                    that.page = new Page({id: options.id});
                    that.page.fetch({
                        success:function(page){
                            renderTemplate('PageView', that.$el, {page: page});
                            that.$el.fadeIn();

                            /*
                            var template = _.template('http://localhost/SportAngel/PHP/index.php/site/template/?name=PageView',{page:page});
                            that.$el.fadeIn();
                            that.$el.html(template);
                            */

                        }
                    })
                }
            }
        });
        
        var ContactView = Backbone.View.extend({
            el: 'article#popup div.customScrollBox div.container div.content',
            render: function () {
                var that = this;
                that.contact = new Contact();
                that.contact.fetch({
                    success:function(contact){
                        renderTemplate('ContactView', that.$el, {contact: contact});
                        that.$el.fadeIn();

                    }
                })
            }
        });        

var pageView = new PageView();
var contactView = new ContactView();
var Router = Backbone.Router.extend({
    routes: {
    "": "home",
    "projects":"projects",
    "new":"new",
    "contact":"contact",
    "*path":"notFound"
    }
});

var router = new Router;
router.on('route',function(route){
    if(route!='home'){
        $('ul.menu').animate({left:'-450px'});
        $('div#logo').animate({top:'0px'});
        $('div.pageView').fadeOut();
    }
    else
    {
        $('ul.menu').animate({left:'0px'});
        $('div#logo').animate({top:'-250px'});
    }
})
        router.on('route:home', function() {
            pageView.render({id:'1'});
        })
        router.on('route:contact', function() {
            contactView.render({id:'1'});
        })


Backbone.history.start();

$(function(){
    $("ul.menu").hover(function(){
        if(router.routes[Backbone.history.fragment]!="home")
            $("ul.menu").animate({left:"0px"},'slow');
        },function(){
            if(router.routes[Backbone.history.fragment]!="home")
                $("ul.menu").animate({left:"-530px"})
            })
});
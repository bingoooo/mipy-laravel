'use strict';
var Mustache = require('mustache');

var promo = function(){
    $.getJSON("user.json", function(data){
        var tpl = $('#cardTemplate').html();
        var html = Mustache.render(tpl,data);
        $('#sm-cards').html(html);   

    });	
};

if ($("#page-promo").length > 0) {
	promo();
}

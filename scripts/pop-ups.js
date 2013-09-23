/***************************/
//@Author: Adrian "yEnS" Mato Gondelle
//@website: www.yensdesign.com
//@email: yensamg@gmail.com
//@license: Feel free to use it, but keep this credits please!					
/***************************/
//About Page Pop Up
var popupStatus = 0;

function loadPopup(){
        if(popupStatus==0){
                $("#popup").fadeIn("slow");
                popupStatus = 1;
        }
}

function disablePopup(){
        if(popupStatus==1){
                $("#popup").fadeOut("slow");
                popupStatus = 0;
        }
}

function centerPopup(){
        var windowWidth = document.documentElement.clientWidth;
        var windowHeight = document.documentElement.clientHeight;
        var popupHeight = $("#popup").height();
        var popupWidth = $("#popup").width();
        $("#popup").css({
                "position": "absolute",
                "top": windowHeight/2-popupHeight/2,
                "left": windowWidth/2-popupWidth/2
        });
}


$(document).ready(function(){
        $("#popup").fadeOut();
        popupStatus = 0;
        $("a.popup").click(function(){
        $("#popup").css({
                "visibility": "visible"	});
                disablePopup();
                centerPopup();
                loadPopup();
            $("#popup").mCustomScrollbar("vertical",400,"easeOutCirc",1.05,"auto","yes","yes",10);
        });
        
        $("#popupClose").click(function(){
                disablePopup();
        });
        $("#bg").click(function(){
                disablePopup();
        });
        $(document).keyup(function(e){
        if(e.keyCode === 27)
                disablePopup();
        });
});

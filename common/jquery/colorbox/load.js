jQuery(document).ready(function($){
//LOAD CSS
$("head").append("<link>");
    css = $("head").children(":last");
    css.attr({
      rel:  "stylesheet",
      type: "text/css",
      href: "/common/jquery/colorbox/colorbox.css"
    });
    $.getScript("/common/jquery/colorbox/jquery.colorbox-min.js", function(){
         //wait before initialising to prevent intermittent load error
	     setTimeout("blis_colorbox_init()",500);
    });

});

function blis_colorbox_init(){
	//Colorbox basic
	jQuery("a[rel='lightbox']").colorbox();
	//Colorbox iframe
	jQuery(".colorme").colorbox({width:"70%", height:"80%", iframe:true});
	jQuery('.showcolor').click(function(){showcolorbox();});

}
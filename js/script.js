
/********************************************************
Ce fichier contient la pluspart des fonctions de script
********************************************************/

/* Photo de profile */
jQuery(document).ready(function(){
	var text1 = "I like taking a step back to think about games, strategies and life.";
	var text2 = "I am not hidind, come and found me !";

	$("#text_photo_profile").html(text1);

	$("#photo_profile").mouseenter(function(){
		$("#photo_profile").attr("src", "images/moi/photo_profile_cache.jpg");
		$("#text_photo_profile").html(text2);
	});

	$("#photo_profile").mouseleave(function(){
		$("#photo_profile").attr("src", "images/moi/photo_profile.jpg");
		$("#text_photo_profile").html(text1);
	});
});

/* Redirections en fin de page */
jQuery(document).ready(function(){
	$(".redirection").mouseenter(function() {
		var elem = $(".redirection");
		var css = elem.attr("style");
		if(css = "undefined") {
			css = "";
		}
		elem.attr("style", css + "background-color: hsla(360, 70%, 30%, 1)");

		var text = $(".redirection_p");
		css = text.attr("style");
		if(css = "undefined") {
			css = "";
		}
		text.attr("style", css + "color: white");
	});
	$(".redirection").mouseleave(function() {
		var elem = $(".redirection");
		var css = elem.attr("style");
		if(css = "undefined") {
			css = "";
		}
		elem.attr("style", css + "background-color: hsla(360, 70%, 58%, 1)");

		var text = $(".redirection_p");
		css = text.attr("style");
		if(css = "undefined") {
			css = "";
		}
		text.attr("style", css + "color: black");
	});
});

/* On triche pour la couleur de volatileText !*/
jQuery(document).ready(function(){
	var elem = $(".volatileText");
	var css = elem.attr("style");
	if(css = "undefined") {
		css ="";
	}
	elem.attr("style", css + "color: white");
});

	
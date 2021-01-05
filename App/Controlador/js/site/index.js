
import site from "./site.js";

window.addEventListener("load", function(){

	site.startSite();

	/*Animacão do Scroll no Site*/
	$(window).on("scroll", function(){

		if($(window).scrollTop() > 100){
			$("#sectionMenuSite").addClass("menuFixed");
		}else{
			$("#sectionMenuSite").removeClass("menuFixed");
		}
	});

	//Menu click
	$("#sobreMenu").click(function(){

		$('html,body').animate({scrollTop:$('#sectionMedia').offset().top});
	});
});
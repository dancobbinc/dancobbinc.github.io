$(document).ready(function(){
	$("li:has(ul)").addClass("parent");	menuManagerFunction(1);	$(window).resize(function(){
		menuManagerFunction(0);	
	});	
	$(".logo a").click(function(){
		if (!$('nav ul.nav-bar').is(':visible')){
			$(this).css("background", "url('images/upArrowWhite.png')");			
				$("nav ul.nav-bar").slideDown(800);		
			}		
			else{
				$(this).css("background", "url('images/downArrowWhite.png')");			
				$("nav ul.nav-bar").slideUp(800);					
			}	
	});
	
	$(".animationWrapper, .animationText, .jackbox").click(function(){
		$(".animationText").toggle(function(){
			$('.animationText').animate({
				width: "170px", 
			}, 500);
		});
	});

});
function menuManagerFunction(isOnLoad){
	if($(window).width() <= 750){
		if(!($("nav ul.nav-bar").hasClass("vertical"))){
			$("nav ul.nav-bar").addClass("vertical");			
				if(!isOnLoad){
					$("nav ul.nav-bar").slideUp(0);			
				}			
			$(".logo a").show();		
		}	
	}	
	else{
		if(($("nav ul.nav-bar").hasClass("vertical"))){
			$("nav ul.nav-bar").removeClass("vertical");			
			$("nav ul.nav-bar").slideDown(0);			
			$(".logo a").hide();		
		}	
	}
}


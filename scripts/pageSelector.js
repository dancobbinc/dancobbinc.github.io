var thisPage = "";
$(window).load(function(){
	$(".nav-bar li a").click(function(){
		thisPage = $(this).attr("href").replace("#!", "");
			$(".parent div ul").slideUp(800);

			
			if(thisPage == "#"){
				//Submenu show-hide
					if($(this).parent().hasClass("parent")){
								$(this).parent().children(".flyout").slideDown(300, function(){
									if (!$(".navigationWrapper").is(':visible') && !$("ul.nav-bar").hasClass("vertical")){
										$(".navigationWrapper").css("top", $(".navigation").height());
										$(".navigationWrapper").height($(this).height());
										$(".navigationWrapper").hide();
										$(".navigationWrapper").slideDown(300);
									}
								});
					}
				return false;
			}
			else{
				$("li").removeClass("selected");
				$("li").removeClass("active");
				if($(this).parent().parent().parent().hasClass("parent")){
					$(this).parent().parent().parent().addClass("selected");
					$(this).parent().addClass("active");
					$(this).parent().parent().slideUp(400);
					$(".navigationWrapper").slideUp(400);
				}
				else{
					$(this).parent().addClass("selected");
				}
			}
			var thisDialerID = $(this).attr("dialerID");
			$('.pageContent').fadeOut(100, function(){
				$(this).load(thisPage+".php?id="+thisDialerID, function(data) {
					$(this).slideDown(0, function(){
						var h1Height = parseInt($("h1.mainHeader").height());
						var h1FontSize = parseInt($("h1.mainHeader").css("font-size"));
						var lineCount = h1Height/h1FontSize; 
						while(h1Height/h1FontSize >= 2 && h1FontSize > 25){
							h1Height = parseInt($("h1.mainHeader").height());
								$("h1.mainHeader").css("font-size", parseInt($("h1.mainHeader").css("font-size"))-1);
							h1FontSize = parseInt($("h1.mainHeader").css("font-size"));
							h1Height = parseInt($("h1.mainHeader").height());
						}
						if(window.Touch){
							$("span[itemprop='telephone']").each(function(){
								var oldContent = $(this).html();
								$(this).html("<a href='tel:"+oldContent+"'>"+oldContent+"</a>");
							});
						}
						$('.pageContent').css("padding-top", 0);
						$('.pageContent a').click(function(){
							$('.nav-bar a[href="'+$(this).attr("href")+'"]').click();
						});
					}).slideUp(0, function(){getHeightLate();}).delay(1000).fadeIn(500);		
				});
			});
			
		if($("ul.nav-bar").hasClass("vertical")){
			$(".logo a").click();
		}
	});
	if(window.location.hash.replace("#!", "") == "" || (window.location.hash.length == 0)){
		$(".nav-bar li a[href$='#!home']").click();
	}
	else{
		$(".nav-bar li a[href$='"+window.location.hash+"']'").click();
	}
	$(".has-flyout").mouseleave(function(){
		$(this).children(".nav-bar > li .flyout").slideUp(300, function(){
			$(".navigationWrapper").slideUp(200);
		});
		$(".navigationWrapper").slideUp(500);
	});
});
function getHeightLate(){
	$('.pageContent').css("padding-top", theHeight());
}
function theHeight(){
	$(document).height($(window).height());
	if(thisPage == "home" && ($(window).width()>=767)){
		// original calulation seems to create a top padding that is too tall. Use the default placement algorithm from below.
		//return ($(document).height() - $('.pageContent').height() - 36);
		return ((($(document).height() - $(".navigation").height() - $('.pageContent').height())/2)+$(".navigation").height());
	}
	if($(".navigation").height() + $('.pageContent').height() > $(window).height()){
		return $(".navigation").height()+20;
	}
	else{
		return ((($(document).height() - $(".navigation").height() - $('.pageContent').height())/2)+$(".navigation").height());
	}
}

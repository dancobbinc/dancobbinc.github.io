var ratio = 1920/1080;
$(window).on("resize load", function(){
	$(".slider").height($(window).height());
	$(".slider").width($(window).width());
	
	if($(".slider img").width() < $(window).width()){
		$(".slider img").css("width", $(window).width());
		$(".slider img").css("height", "auto");
	}
	else if($(".slider img").height() < $(window).height()){
		$(".slider img").css("height", $(window).height());
		$(".slider img").css("min-width", $(window).height()*ratio);
	}
	else if(($(".slider img").width() > $(window).width()) && ($(".slider img").height() > $(window).height())){
		$(".slider img").css("min-width", $(window).width());
		$(".slider img").css("width", $(window).width());
		$(".slider img").css("height", "auto");
	}
});
$(window).on("scroll", function(){
	if($(window).scrollTop() < $(".navigation").height()){
		$(".slider img").css("height", $(window).height()+200);
		$(".slider img").css("min-width", ($(window).height()+200)*ratio);
		
	}
});
$(window).load(function(){
	$.fn.nextOrFirst = function(selector){
		var next = this.next(selector);
		this.attr("data-visible", false);
		if(next.length){
			next.attr("data-visible", true);
			return next;
		}
		else{
			this.siblings().first().attr("data-visible", true);
			return this.siblings().first();
		}
	};
	$.fn.prevOrLast = function(selector){
		var prev = this.prev(selector);
		return (prev.length) ? prev : this.siblings().last();
	};
	$(".slider img").show();
	$(".slider img").css("z-index", -1);
	$(".slider img:first").css("z-index", 1).attr("data-visible", true);
	if($(".slider img").length > 1){
		var InfiniteRotator = {
			init: function(){
				var timeout = 4000;
				var animation = 2000;
				var innerLoop = setInterval(function(){
				$(".slider img[data-visible='true']").css("z-index", 1).nextOrFirst().css("z-index", 0).prevOrLast().fadeOut(animation, function(){
					$(this).css("z-index", -1).show();
				});
				}, (timeout+animation));
			}
		}
		InfiniteRotator.init();
	}
});
$(document).ready(function() {
	if( $(".slider-banner").size() == 0){return;}
	if($(".slider-active").size() == 0){$(".slider-banner:first").addClass("slider-active");var active = $(".slider-active");}
	var timer;
	var changeImage = function(){
			window.clearTimeout(timer);
			var active = $(".slider-active");
			var nextBanner = $(active).next();
			nextBanner = $(nextBanner).size() == 0 ? $(".slider-banner:first") : nextBanner;
			//$(active).css("z-index", 100);
			$(nextBanner).css("z-index", 49);
			$(active).fadeOut(1500, function(){$(".slider-banner").css("z-index", 1);$(".slider-banner").show();$(".slider-banner").removeClass("slider-active");$(nextBanner).addClass("slider-active");timer = window.setTimeout(changeImage, 4000); });
		};
	changeImage();
});


jQuery(document).ready(function($) {
	var hash = window.location.hash;
	if(hash){
		$(".menunav_li").removeClass("current_tab_dt");
		$('li[data-href="' + hash + '"]').addClass("current_tab_dt").removeClass("current_tab_dt");
		// $('a[href="' + hash + '"]').parent().addClass("current_tab_dt").prev().removeClass("current_tab_dt");
		var link = $('a[href="' + hash + '"]').parent().attr("idx");
		$(".box_content").hide();
		$(".my_box_content"+link).show();
		$(".my_box_content"+link).children('.list_product').children('li').slice(0, 8).show();
		if(($(".my_box_content"+link).children('.list_product').children('li:hidden')).length == 0) {
			$(".my_box_content"+link).children().children('.btn_seemore').hide();
		};
	};
	$(".menunav_li").click(function(){
		$(this).parent().children(".current_tab_dt").removeClass("current_tab_dt");
		$(this).addClass("current_tab_dt");
		$(".box_content").hide();
		$(".my_box_content"+$(this).attr("idx")).show();
		$(".my_box_content"+$(this).attr("idx")).children('.list_product').children('li').slice(0, 8).show();
		if(($(".my_box_content"+$(this).attr("idx")).children('.list_product').children('li:hidden')).length == 0) {
			$(".my_box_content"+$(this).attr("idx")).children().children('.btn_seemore').hide();
		};
	});
	$(window).scroll(function(){if($(this).scrollTop()>500){$('#bttop').fadeIn();}else{$('#bttop').fadeOut();}});$('#bttop').click(function(){$('body,html').animate({scrollTop:0},1000);});
	$(".list_product li").slice(0, 8).show();
	$(".btn_seemore").on('click', function (e) {
		e.preventDefault();
		$(this).parent().parent().children('.list_product').children('li:hidden').slice(0, 8).slideDown();
		if(($(this).parent().parent().children('.list_product').children('li:hidden')).length == 0) {
			$(this).hide();
		};
	});
	$('.text_closepopup').click(function(){
      $(".popup_general").hide();
      return false;
    });
    $('.popup_hidden_stock').click(function() {
       $(".popup_general").hide();
      return false;
    });
    $('.listcard').click(function(){
      $(".popup_outside_stock").show();
      return false;
    });
    var slideshow =$('#boxslide');
	slideshow.owlCarousel({
		items : 1,
		margin: 0,
		slideSpeed : 4000,
		autoplaySpeed: 1000,
		nav: true,
		autoplay: true,
		dots: true,
		loop: true,
		autoplayHoverPause: true,
		navText: ["<i class='glyphicon glyphicon-menu-left'></i>","<i class='glyphicon glyphicon-menu-right'></i>"]
	});
});
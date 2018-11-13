
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
jQuery(document).ready(function($) {
    $(".menunav_li").click(function(){
        $(this).parent().children(".current_tab_dt").removeClass("current_tab_dt");
        $(this).addClass("current_tab_dt");
        $(".box_content").hide();
        $(".my_box_content"+$(this).attr("idx")).show();
    });
    $(".header_col2").click(function(){
		var div_store1=$(".menunav").position();
		$("body , html").animate({scrollTop: (div_store1.top) },700); 
		return false;
	});
  });
jQuery(document).ready(function($) {
	var height_icon=0;
	  $(".movetop").click(function(){
	      height_icon = height_icon + 47;
	      if(height_icon >= 0){
	        height_icon = 0;
	      }
	      $(".box_icon_side > ul").attr("style","top:"+height_icon+"px");
	  });
	  $(".moveup").click(function(){
	      var num_li=$(".floor-menu-fixed >li").length;
	       num_height=num_li*47;
	       height_icon = height_icon - 47;
	       if(height_icon <= -(num_height)){
	          height_icon = -(num_height);
	        }
	      $(".box_icon_side > ul").attr("style","top:"+height_icon+"px");
	});
	$(function(){
	    $('#gotop').click(function(){
	      $('body,html').animate({scrollTop:0},800);
	      return false;
	      });
	});
	$("#help").click(function(){ 
	    $(".popup_outside").show();
	    $(".popup_hidden").fadeIn("slow");  
	    $(".popup_position").fadeIn("slow");
	    return false;
	  });
	$('.popup_hidden').click(function() {
      $(".popup_position").fadeOut('slow');
      $(".popup_outside").fadeOut('slow');  
      return false;
  	});
  	$('.text_closepopup').click(function() {
	    $(".popup_position").fadeOut('slow');
	    $(".popup_outside").fadeOut('slow');
	    return false;
	});
	$(".btn_branch_more").click(function(){
	    if($(".btn_branch_more").parent().children(".footer_place_list").hasClass("hidden_branch")){
	    	$(".btn_branch_more").children('span').text("Ẩn các chi nhánh");
	      	$(".btn_branch_more").parent().children(".footer_place_list").animate({height:"100%"},600);
	      	$(".btn_branch_more").parent().children(".footer_place_list").removeClass("hidden_branch");
	    }else
	    {
	    	$(".btn_branch_more").children('span').text("Xem thêm các chi nhánh khác");
	      	$(".btn_branch_more").parent().children(".footer_place_list").animate({height:"180px"},600);
	      	$(".btn_branch_more").parent().children(".footer_place_list").addClass("hidden_branch");
	    };
	});
});
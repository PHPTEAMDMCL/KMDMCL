doctype html
html(lang="vi-VN")
	head
		title Quà siêu to cho TV ngày Tết | Điện Máy Chợ Lớn
		meta(http-equiv='content-type' content='text/html; charset=utf-8')
		meta(name='author' content=' Siêu thị điện máy Chợ Lớn ')
		meta(name='viewport' content='width=device-width, initial-scale=1')
		meta(name='description' content='Mua TV các hãng lớn Samsung, LG, Sony, TCL,..nhận ngay quà to đến 3 triệu tại Siêu thị điện máy Chợ Lớn')
		meta(name='Author' content='Siêu thị Điện máy Chợ Lớn')
		meta(property='og:locale' content='vi_VN')
		meta(property='og:type' content='product')
		meta(property='og:url' content='http://khuyenmai.dienmaycholon.vn/2018/12/tivi-tet')
		meta(property='og:site_name' content='Siêu thị điện máy nội thất Chợ Lớn')
		meta(property='og:title' content='Sắm TV nhận ngay quà to tại Siêu thị điện máy Chợ Lớn')
		meta(property='og:description' content='Mua TV các hãng lớn Samsung, LG, Sony, TCL,..nhận ngay giỏ quà to lên đến 3 triệu tại Siêu thị điện máy Chợ Lớn ! Mua là có quà ! Hãy nhanh tay')
		meta(property='og:image' content='https://dienmaycholon.vn/dmcl/images/qua-to-tv.jpg')
		meta(property='article:publisher' content='https://www.facebook.com/dienmaycholononline')
		link(type='image/x-icon' rel='Shortcut Icon' href='https://dienmaycholon.vn/public/default/img/favicon.ico')
		link(href=asset("/y2018/m12/tivi/css/animate.css?version=".time()) type='text/css' rel='stylesheet')
		link(href=asset("/y2018/m12/tivi/css/qua-tv.css?version=".time()) type='text/css' rel='stylesheet')
		
		script(type='text/javascript' src=asset('/y2018/m12/tivi/js/jquery.min.js'))
		script.
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-66144215-1', 'auto');
			ga('send', 'pageview');
		script(type='text/javascript').
			jQuery(document).ready(function($) {
			var hash = window.location.hash;
			if(hash){
			$(".menunav_li").removeClass("current_tab_dt");
			$('a[href="' + hash + '"]').parent().addClass("current_tab_dt").prev().removeClass("current_tab_dt");
			var link = $('a[href="' + hash + '"]').parent().attr("idx");
			$(".box_content").hide();
			$(".my_box_content"+link).show();
			};
			$(".menunav_li").click(function(){
			$(this).parent().children(".current_tab_dt").removeClass("current_tab_dt");
			$(this).addClass("current_tab_dt");
			$(".box_content").hide();
			$(".my_box_content"+$(this).attr("idx")).show();
			});
			$(window).scroll(function(){if($(this).scrollTop()>500){$('#bttop').fadeIn();}else{$('#bttop').fadeOut();}});$('#bttop').click(function(){$('body,html').animate({scrollTop:0},1000);});
			$(".list_product li").hover(function() {
			$(this).children().children().children(".add_muangay").addClass("animated2 pulse");
			},function() {
			$(this).children().children().children(".add_muangay").removeClass("animated2 pulse");
			});
			$(".filterprice").change(function(){
              if($(this).val()!='0'){
                  var idx= $(".current_tab_dt").attr("idx");
                  var cate= $(".current_tab_dt").attr("cate");
                  $.get("/api/2018/12/tivi-load?cate="+cate + "&o="+$(this).val(),function(result){
                      $(".my_box_content"+idx).children().children('ul').html(result);
                  });
              }
          });
          	
          	$(".btn_seemore").click(function(){
		             $("body").css("cursor","wait");
		             var lastpage= parseInt($(this).attr("lastpage"));
		             var currentPage=parseInt($(this).attr("page"))+1;
		             if(lastpage == currentPage){
		                  $(this).hide();          
		             }else{
		                $(this).attr("page",currentPage);
		             }
		             
		                      var idx=$(this).attr("idx");
		                      $.get("/api/2018/12/tivi-load?cate="+$(this).attr("cate")+"&o="+$('.filterprice').val()+"&page="+currentPage,function(result){
		                             $("body").css("cursor","auto");
		                            $(".my_box_content"+idx).children().children("ul").append(result);
		                        });
		                
		          });

			});
	body
		header
			.container_screen
				a(href="https://dienmaycholon.vn/" class="logodmcl" target="_blank" title="Siêu thị điện máy Chợ Lớn")
					img(src="/y2018/m12/tivi/img/logo-dmcl.png" alt="logo Siêu thị điện máy Chợ Lớn" class="animated fadeInLeft")
				.header_col
					div.header_col_banner
						img(src="/y2018/m12/tivi/img/qua-tv-sieu-to.png" alt="quà to tivi" class="animated3 pulse")
						a(href='#' title='mua tivi nhận ngay quà khủng')
							img(src="/y2018/m12/tivi/img/img-main.png" alt="mua tivi nhận ngay quà khủng" class="animated fadeInUp")
			
		section
			nav
				ul(class="menunav")
					li.menunav_li.current_tab_dt(idx='1',cate='16')
						a(href='#samsung' title='samsung')
							img(src="/y2018/m12/tivi/img/samsung.png" alt="logo samsung")
							img(src="/y2018/m12/tivi/img/samsung-h.png" alt="logo samsung" class="none_manu")
					li.menunav_li(idx='2' ,cate='15')
						a(href='#lg' title='lg')
							img(src="/y2018/m12/tivi/img/lg.png" alt="logo lg")
							img(src="/y2018/m12/tivi/img/lg-h.png" alt="logo lg" class="none_manu") 
					li.menunav_li(idx='3',cate='24')
						a(href='#sony' title='sony')
							img(src="/y2018/m12/tivi/img/sony.png" alt="logo sony")
							img(src="/y2018/m12/tivi/img/sony-h.png" alt="logo sony" class="none_manu") 
					li.menunav_li(idx='4',cate='119')
						a(href='#tcl' title='tcl')
							img(src="/y2018/m12/tivi/img/tcl.png" alt="logo tcl")
							img(src="/y2018/m12/tivi/img/tcl-h.png" alt="logo tcl" class="none_manu") 
			.container_screen
				div.box_content.my_box_content1
					p.titlemanu
						span Bạn đang xem hãng &nbsp;
						strong Samsung &nbsp;  | &nbsp;
						a(href='https://dienmaycholon.vn/tivi-led' title='Xem tất cả các hãng tại đây') Xem tất cả các hãng tại đây
					div.bg_product
						.bg_product1
							h3.tith3 TIVI SAMSUNG 
							span.black &nbsp; 100% &nbsp;
							strong.white mua là có quà
						.bg_product2
							span.title_orderby Sắp xếp theo &nbsp;
							form.frm_order(method='', id='')
								select#orderby.filterprice(name='orderby')
									option(value='0') -- Chọn --
									option(value='1') Giá từ thấp đến cao
									option(value='2') Giá từ cao đến thấp
						a(href='https://dienmaycholon.vn/tivi-led-samsung' title='link banner').bg_img
							img(src="/y2018/m12/tivi/img/banner.jpg" alt="banner samsung") 
						ul.list_product
							@if(!empty($samsung))
				            @foreach($samsung as $p)
				            @if(!empty($p->Product()['name']) && !empty($p->Product()->Cate()['name']))
							li
								a.img_pro(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] , target="_black")
									img(src='https://dienmaycholon.vn/public/picture/tmp/product_'.$p['cid_product'].'_220_220.jpg', alt='#')
								.info_price
									h3.info_name
										| {{$p->Product()['name'] }}
									strong {{App\MrData::toPrice($p['discount'])}}
								.box_pro_info
									.show_gift_promo
										@if($p['gift'])
										| Tặng bộ quà trị giá <span>{{App\MrData::toPrice($p['gift'])}}</span>
										@endif
									.box_muangay
										a.add_muangay(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] title='Mua ngay' target='_blank')
							@endif
				            @endforeach
				            @endif
				        @if($samsung->hasMorePages())
						.boxseemore
							button.btn_seemore(type="button", idx='1', cate='16' , lastpage=$samsung->lastPage() ,page=$samsung->currentPage())
								| xem thêm sản phẩm tivi samsung
						@endif
				div.box_content.my_box_content2
					p.titlemanu
						span Bạn đang xem hãng &nbsp;
						strong LG &nbsp;  | &nbsp;
						a(href='https://dienmaycholon.vn/tivi-led' title='Xem tất cả các hãng tại đây') Xem tất cả các hãng tại đây
					div.bg_product
						.bg_product1
							h3.tith3 TIVI LG 
							span.black &nbsp; 100% &nbsp;
							strong.white mua là có quà
						.bg_product2
							span.title_orderby Sắp xếp theo &nbsp;
							form.frm_order(method='', id='')
								select#orderby.filterprice(name='orderby')
									option(value='0') -- Chọn --
									option(value='1') Giá từ thấp đến cao
									option(value='2') Giá từ cao đến thấp
						a(href='https://dienmaycholon.vn/tivi-led-samsung' title='link banner').bg_img
							img(src="/y2018/m12/tivi/img/banner.jpg" alt="banner samsung")
						ul.list_product
							@if(!empty($lg))
				            @foreach($lg as $p)
				            @if(!empty($p->Product()['name']) && !empty($p->Product()->Cate()['name']))
							li
								a.img_pro(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] , target="_black")
									img(src='https://dienmaycholon.vn/public/picture/tmp/product_'.$p['cid_product'].'_220_220.jpg', alt='#')
								.info_price
									h3.info_name
										| {{$p->Product()['name'] }}
									strong {{App\MrData::toPrice($p['discount'])}}
								.box_pro_info
									.show_gift_promo
										@if($p['gift'])
										| Tặng bộ quà trị giá <span>{{App\MrData::toPrice($p['gift'])}}</span>
										@endif
									.box_muangay
										a.add_muangay(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] title='Mua ngay' target='_blank')
							@endif
				            @endforeach
				            @endif
						@if($lg->hasMorePages())
						.boxseemore
							button.btn_seemore(type="button", idx='2', cate='15' , lastpage=$lg->lastPage() ,page=$lg->currentPage())
								| xem thêm sản phẩm tivi LG
						@endif
				div.box_content.my_box_content3
					p.titlemanu
						span Bạn đang xem hãng &nbsp;
						strong SONY &nbsp;  | &nbsp;
						a(href='https://dienmaycholon.vn/tivi-led' title='Xem tất cả các hãng tại đây') Xem tất cả các hãng tại đây
					div.bg_product
						.bg_product1
							h3.tith3 TIVI SONY 
							span.black &nbsp; 100% &nbsp;
							strong.white mua là có quà
						.bg_product2
							span.title_orderby Sắp xếp theo &nbsp;
							form.frm_order(method='', id='')
								select#orderby.filterprice(name='orderby')
									option(value='0') -- Chọn --
									option(value='1') Giá từ thấp đến cao
									option(value='2') Giá từ cao đến thấp
						a(href='https://dienmaycholon.vn/tivi-led-samsung' title='link banner').bg_img
							img(src="/y2018/m12/tivi/img/banner.jpg" alt="banner samsung")
						ul.list_product
							@if(!empty($sony))
				            @foreach($sony as $p)
				            @if(!empty($p->Product()['name']) && !empty($p->Product()->Cate()['name']))
							li
								a.img_pro(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] , target="_black")
									img(src='https://dienmaycholon.vn/public/picture/tmp/product_'.$p['cid_product'].'_220_220.jpg', alt='#')
								.info_price
									h3.info_name
										| {{$p->Product()['name'] }}
									strong {{App\MrData::toPrice($p['discount'])}}
								.box_pro_info
									.show_gift_promo
										@if($p['gift'])
										| Tặng bộ quà trị giá <span>{{App\MrData::toPrice($p['gift'])}}</span>
										@endif
									.box_muangay
										a.add_muangay(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] title='Mua ngay' target='_blank')
							@endif
				            @endforeach
				            @endif
						@if($sony->hasMorePages())
						.boxseemore
							button.btn_seemore(type="button", idx='3', cate='24' , lastpage=$sony->lastPage() ,page=$sony->currentPage())
								| xem thêm sản phẩm tivi SONY
						@endif
				div.box_content.my_box_content4
					p.titlemanu
						span Bạn đang xem hãng &nbsp;
						strong TCL &nbsp;  | &nbsp;
						a(href='https://dienmaycholon.vn/tivi-led' title='Xem tất cả các hãng tại đây') Xem tất cả các hãng tại đây
					div.bg_product
						.bg_product1
							h3.tith3 TIVI TCL 
							span.black &nbsp; 100% &nbsp;
							strong.white mua là có quà
						.bg_product2
							span.title_orderby Sắp xếp theo &nbsp;
							form.frm_order(method='', id='')
								select#orderby.filterprice(name='orderby')
									option(value='0') -- Chọn --
									option(value='1') Giá từ thấp đến cao
									option(value='2') Giá từ cao đến thấp
						a(href='https://dienmaycholon.vn/tivi-led-samsung' title='link banner').bg_img
							img(src="/y2018/m12/tivi/img/banner.jpg" alt="banner samsung")
						ul.list_product
							@if(!empty($tcl))
				            @foreach($tcl as $p)
				            @if(!empty($p->Product()['name']) && !empty($p->Product()->Cate()['name']))
							li
								a.img_pro(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] , target="_black")
									img(src='https://dienmaycholon.vn/public/picture/tmp/product_'.$p['cid_product'].'_220_220.jpg', alt='#')
								.info_price
									h3.info_name
										| {{$p->Product()['name'] }}
									strong {{App\MrData::toPrice($p['discount'])}}
								.box_pro_info
									.show_gift_promo
										@if($p['gift'])
										| Tặng bộ quà trị giá <span>{{App\MrData::toPrice($p['gift'])}}</span>
										@endif
									.box_muangay
										a.add_muangay(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] title='Mua ngay' target='_blank')
							@endif
				            @endforeach
				            @endif
						@if($tcl->hasMorePages())
						.boxseemore
							button.btn_seemore(type="button", idx='4', cate='119' , lastpage=$tcl->lastPage() ,page=$tcl->currentPage())
								| xem thêm sản phẩm tivi TCL
						@endif
		footer
			p Bản quyền © 2001 - 2018 thuộc về Công ty TNHH Cao Phong
		#bttop
			img.block(src='/y2018/m12/tivi/img/uptop.png', width='50', height='51')
			img.none(src='/y2018/m12/tivi/img/uptop-mb.png', width='30', height='31')
doctype html
html(lang="vi-VN")
	head
		title Mua hàng điện tử - Trang hoàng đón Tết cùng Techcombank | Điện Máy Chợ Lớn
		meta(http-equiv='content-type' content='text/html; charset=utf-8')
		meta(name='author' content=' Siêu thị điện máy Chợ Lớn ')
		meta(name='viewport' content='width=device-width, initial-scale=1')
		meta(name='description' content='Mua hàng điện tử trang hoàng đón Tết giảm đến 1 triệu khi thanh toán bằng thẻ Techcombank Visa cùng nhiều quà tặng giá trị ngày từ 10/12 -31/12/2018')
		meta(name='Author' content='Siêu thị Điện máy Chợ Lớn')
		meta(property='og:locale' content='vi_VN')
		meta(property='og:type' content='product')
		meta(property='og:url' content='http://khuyenmai.dienmaycholon.vn/2018/12/techcombank')
		meta(property='og:site_name' content='Siêu thị điện máy nội thất Chợ Lớn')
		meta(property='og:title' content='Mua hàng điện tử - Trang hoàng đón Tết cùng Techcombank tại Siêu thị điện máy Chợ Lớn')
		meta(property='og:description' content='Mua hàng điện tử - di dộng giảm đến 1 triệu khi thanh toán bằng thẻ Visa Techcombank kèm nhiều quà giá giá trị áp dụng từ 10/12 - 31/12/2018 tại Siêu thị điện máy Chợ Lớn')
		meta(property='og:image' content='https://dienmaycholon.vn/dmcl/images/uu-dai-techcombank.jpg')
		meta(property='article:publisher' content='https://www.facebook.com/dienmaycholononline')
		link(type='image/x-icon' rel='Shortcut Icon' href='https://dienmaycholon.vn/public/default/img/favicon.ico')
		link(type='text/css' rel='stylesheet' href=asset('/y2018/m12/techcombank/css/animate.css?version='.time()))
		link(type='text/css' rel='stylesheet' href=asset('/y2018/m12/techcombank/css/techcombank.css?version='.time()))
		script(type='text/javascript' src=asset('/y2018/m12/sale12/js/jquery.min.js'))
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
			$(window).scroll(function(){if($(this).scrollTop()>500){$('#bttop').fadeIn();}else{$('#bttop').fadeOut();}});$('#bttop').click(function(){$('body,html').animate({scrollTop:500},1000);});
			$(".img_pro").hover(function() {
			$(this).children("img").addClass("animated2 pulse");
			},function() {
			$(this).children("img").removeClass("animated2 pulse");
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
		                      $.get("/api/2018/12/techcombank?cate="+$(this).attr("cate")+"&page="+currentPage,function(result){
		                             $("body").css("cursor","auto");
		                            $(".my_box_content"+idx).children("ul").append(result);
		                        });
		                
		          });
			});
	body
		header
			.container_screen
				a(href="https://dienmaycholon.vn/" class="logodmcl" target="_blank" title="Siêu thị điện máy Chợ Lớn")
					img(src="/y2018/m12/techcombank/img/techcombank.png" alt="logo ngân hàng Techcombank" class="animated fadeInLeft")
					img(src="/y2018/m12/techcombank/img/logo-dmcl.png" alt="logo Siêu thị điện máy Chợ Lớn" class="animated fadeInRight")
				.header_col
					p.header_col_banner
						
						img(src="/y2018/m12/techcombank/img/img-left.png" alt="siêu giảm giá" class="animated fadeInLeft")
					
					div(class="header_col2")
						h1.animated.fadeInUp  Mua hàng điện tử
						h2.animated.fadeInUp  Trang Hoàng Đón Tết
						img(src="/y2018/m12/techcombank/img/giam-1-trieu.png" alt="Giảm đến 1 triệu" class="animated3 pulse")
						span Từ 10/12 - 31/12/2018
				ul.list_bannershow
					li
						a(href="javascript:;")
							img(src="/y2018/m12/techcombank/img/giam-ngay-1-trieu.png" alt="giảm ngay 1 triệu" class="animated fadeInUp")
					li
						a(href="javascript:;")
							img(src="/y2018/m12/techcombank/img/tu-10-trieu.png" alt="áp dụng cho đơn hàng từ 10 triệu" class="animated fadeInUp")
					li
						a(href="/y2018/m12/techcombank/javascript:;")
							img(src="/y2018/m12/techcombank/img/teachcom-visa.png" alt="thẻ techcombank visa" class="animated fadeInUp")
					
		section.boxsilk
			p.img_linebox
				img(src="/y2018/m12/techcombank/img/img-line.png" alt="line symbol")
			nav
				ul(class="menunav")
					li.menunav_li.current_tab_dt(idx='1' cate='13')
						a(href='#dien-thoai' title='Điện thoại') sản phẩm điện thoại
					li.menunav_li(idx='2' cate='8')
						a(href='#tivi' title='Tivi') sản phẩm tivi
			.container_screen
				div.box_content.my_box_content1
					ul.list_product
						@if(!empty($didong))
						@foreach($didong as $p)
						@if(!empty($p->Product()['name']) && !empty($p->Product()->Cate()['name']))
						li
							a.img_pro(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] , target="_blank")
								img(src='https://dienmaycholon.vn/public/picture/tmp/product_'.$p['cid_product'].'_220_220.jpg', alt=($p->Product()['name']))
								i.iconx
							.info_price
								h3.info_name
									| {{$p->Product()['name'] }}
								strong {{App\MrData::toPrice($p['discount'])}}
							.box_pro_info
								.show_gift_promo
									p
										| Tặng bộ quà giá trị lớn
								.box_muangay
									a.add_muangay1(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] title='Mua ngay' target='_blank')
						@endif
						@endforeach
						@endif
					@if($didong->hasMorePages())
					.boxseemore
						button.btn_seemore(type='button' , idx='1', cate='13' , lastpage=$didong->lastPage() ,page=$didong->currentPage())
							| Xem thêm sản phẩm di động khác
					@endif
							
				div.box_content.my_box_content2
					ul.list_product
						@if(!empty($tivi))
						@foreach($tivi as $p)
						@if(!empty($p->Product()['name']) && !empty($p->Product()->Cate()['name']))
						li
							a.img_pro(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] , target="_blank")
								img(src='https://dienmaycholon.vn/public/picture/tmp/product_'.$p['cid_product'].'_220_220.jpg', alt=($p->Product()['name'] ))
								i.iconx
							.info_price
								h3.info_name
									| {{$p->Product()['name'] }}
								strong {{App\MrData::toPrice($p['discount'])}}
							.box_pro_info
								.show_gift_promo
									p
										| Tặng bộ quà giá trị lớn
								.box_muangay
									a.add_muangay1(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] title='Mua ngay' target='_blank')
						@endif
						@endforeach
						@endif
					@if($tivi->hasMorePages())
					.boxseemore
						button.btn_seemore(type='button' , idx='2', cate='8' , lastpage=$tivi->lastPage() ,page=$tivi->currentPage())
							| Xem thêm sản phẩm Tivi khác
					@endif
		footer
			p Bản quyền © 2001 - 2018 thuộc về Công ty TNHH Cao Phong
		#bttop
			img.block(src='/y2018/m12/techcombank/img/uptop.png', width='50', height='51')
			img.none(src='/y2018/m12/techcombank/img/uptop-mb.png', width='30', height='31')
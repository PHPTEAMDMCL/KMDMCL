doctype html
html(lang="vi-VN")
	head
		title Gian hàng online - Mua online giảm đến 50% | Điện Máy Chợ Lớn
		meta(http-equiv='content-type' content='text/html; charset=utf-8')
		meta(name='author' content=' Siêu thị điện máy Chợ Lớn ')
		meta(name='viewport' content='width=device-width, initial-scale=1')
		meta(name='description' content='Gian hàng mua online giảm đến 50% sản phẩm Tv, loa, máy giặt, tủ lạnh, gia dụng - số lượng có hạn tại Siêu thị điện máy Chợ Lớn')
		meta(name='Author' content='Siêu thị Điện máy Chợ Lớn')
		meta(property='og:locale' content='vi_VN')
		meta(property='og:type' content='product')
		meta(property='og:url' content='http://khuyenmai.dienmaycholon.vn/2018/12/gian-hang-online')
		meta(property='og:site_name' content='Siêu thị điện máy nội thất Chợ Lớn')
		meta(property='og:title' content='Gian hàng online giá sốc - Mua online giảm đến 50% tại Siêu thị điện máy Chợ Lớn')
		meta(property='og:description' content='Mua online giảm giá đến 50% các sản phẩm Tv, loa, máy giặt, tủ lạnh, gia dụng kèm nhiều quà tặng hấp dẫn tại Siêu thị điện máy Chợ Lớn')
		meta(property='og:image' content='https://dienmaycholon.vn/dmcl/images/gian-hang-online.jpg')
		meta(property='article:publisher' content='https://www.facebook.com/dienmaycholononline')
		link(type='image/x-icon' rel='Shortcut Icon' href='https://dienmaycholon.vn/public/default/img/favicon.ico')
		link(href="http://khuyenmai.dienmaycholon.local/y2019/gian-hang-online/css/animate.css" type='text/css' rel='stylesheet')
		link(href="http://khuyenmai.dienmaycholon.local/y2019/gian-hang-online/css/gian-hang-online.css" type='text/css' rel='stylesheet')

		script(type='text/javascript' src='http://khuyenmai.dienmaycholon.local/y2019/gian-hang-online/js/jquery.min.js')
		script(type='text/javascript' src='http://khuyenmai.dienmaycholon.local/y2019/gian-hang-online/js/jquery.countdown.js')
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
			$('.text_coundown').countdown('2018-12-31 23:59:00',function(event) {
			  $(this).html(event.strftime('<ul><li><span>%D</span><strong>:</strong><br><b>Ngày</b></li><li><span>%H</span><strong>:</strong><br><b>Giờ</b></li><li><span>%M</span><strong>:</strong><br><b>Phút</b></li><li><span>%S</span><br><b>Giây</b></li></ul>'));
			});
			});
	body
		header
			.container_screen
				a(href="https://dienmaycholon.vn/" class="logodmcl" target="_blank" title="Siêu thị điện máy Chợ Lớn")
					img(src="http://khuyenmai.dienmaycholon.local/y2019/gian-hang-online/img/logo-dmcl.png" alt="logo Siêu thị điện máy Chợ Lớn" class="animated fadeInLeft")
				.header_col
					div.header_col_banner
						img(src="http://khuyenmai.dienmaycholon.local/y2019/gian-hang-online/img/img-left.png" alt="siêu giảm giá" class="animated fadeInLeft")
					
					div(class="header_col2")
						img(src="http://khuyenmai.dienmaycholon.local/y2019/gian-hang-online/img/giam-50.png" alt="Giảm đến 50%" class="animated3 pulse")
						p.classtime Thời gian áp dụng còn:
						.text_coundown
						a(href='tel:02838563388' title='Tư vấn mua hàng')
							img(src="http://khuyenmai.dienmaycholon.local/y2019/gian-hang-online/img/btn-mua-head.png" alt="Hướng dẫn mua hàng" class="animated fadeInUp" target="_blank")
			
		section
			nav
				ul(class="menunav")
					li.menunav_li.current_tab_dt(idx="8" cate="8")
						a(href="#tivi" title="tivi") tivi 
					li.menunav_li.current_tab_dt(idx="18" cate="18")
						a(href="#tủ lạnh" title="tủ lạnh") tủ lạnh 

			.container_screen
				div.box_content.my_box_content8
					ul.list_product
						li
							a.img_pro(href="https://dienmaycholon.vn/tivi-led/smart-tivi-led-ultra-hd-4k-lg-43-inch-43uj632t" title="Smart Tivi LED Ultra HD 4K LG 43 Inch 43UJ632T" target="_blank")
								img(src="https://static.dienmaycholon.vn/tmp/product_11071_220_220.jpg" alt="Smart Tivi LED Ultra HD 4K LG 43 Inch 43UJ632T")
								span.iconpercent
									b GIẢM &nbsp;
									| 18%
								img(src="http://khuyenmai.dienmaycholon.local/y2019/gian-hang-online/img/tang-tu-lanh.png" class="icon_left2")
							.info_price
								h3.info_name
									| Smart Tivi LED Ultra HD 4K LG 43 Inch 43UJ632T
								span Giá hãng
								strong 11.190.000 Đ
							.box_pro_info
								.show_gift_promo
									img(src="http://khuyenmai.dienmaycholon.local/y2019/gian-hang-online/img/gia-online.png" alt="giá online")
									span 2.000.000 Đ
								.box_muangay
									a.add_muangay1(href="https://dienmaycholon.vn/tivi-led/smart-tivi-led-ultra-hd-4k-lg-43-inch-43uj632t" title="Mua ngay" target="_blank") 

					.boxseemore
						button.btn_seemore(type="button")
							img(src="http://khuyenmai.dienmaycholon.local/y2019/gian-hang-online/img/btn-more.png" alt="Xem thêm sản phẩm khác") 
				div.box_content.my_box_content18
					ul.list_product
						li
							a.img_pro(href="https://dienmaycholon.vn/tu-lanh/tu-lanh-panasonic-inverter-152-lit-nrba178psv1" title="Tủ Lạnh PANASONIC Inverter 152 Lít  NR-BA178PSV1" target="_blank")
								img(src="https://static.dienmaycholon.vn/tmp/product_11294_220_220.jpg" alt="Tủ Lạnh PANASONIC Inverter 152 Lít  NR-BA178PSV1")
								span.iconpercent
									b GIẢM &nbsp;
									| 36%
								img(src="http://khuyenmai.dienmaycholon.local/y2019/gian-hang-online/img/tang-tu-lanh.png" class="icon_left2")
							.info_price
								h3.info_name
									| Tủ Lạnh PANASONIC Inverter 152 Lít  NR-BA178PSV1
								span Giá hãng
								strong 5.590.000 Đ
							.box_pro_info
								.show_gift_promo
									img(src="http://khuyenmai.dienmaycholon.local/y2019/gian-hang-online/img/gia-online.png" alt="giá online")
									span 2.000.000 Đ
								.box_muangay
									a.add_muangay1(href="https://dienmaycholon.vn/tu-lanh/tu-lanh-panasonic-inverter-152-lit-nrba178psv1" title="Mua ngay" target="_blank") 
						li
							a.img_pro(href="https://dienmaycholon.vn/tivi-led/smart-tivi-led-ultra-hd-4k-lg-43-inch-43uj632t" title="Smart Tivi LED Ultra HD 4K LG 43 Inch 43UJ632T" target="_blank")
								img(src="https://static.dienmaycholon.vn/tmp/product_11071_220_220.jpg" alt="Smart Tivi LED Ultra HD 4K LG 43 Inch 43UJ632T")
								span.iconpercent
									b GIẢM &nbsp;
									| 18%
								img(src="http://khuyenmai.dienmaycholon.local/y2019/gian-hang-online/img/tang-may-lanh.png" class="icon_left3")
							.info_price
								h3.info_name
									| Smart Tivi LED Ultra HD 4K LG 43 Inch 43UJ632T
								span Giá hãng
								strong 11.190.000 Đ
							.box_pro_info
								.show_gift_promo
									img(src="http://khuyenmai.dienmaycholon.local/y2019/gian-hang-online/img/gia-online.png" alt="giá online")
									span 2.000.000 Đ
								.box_muangay
									a.add_muangay1(href="https://dienmaycholon.vn/tivi-led/smart-tivi-led-ultra-hd-4k-lg-43-inch-43uj632t" title="Mua ngay" target="_blank") 

					.boxseemore
						button.btn_seemore(type="button")
							img(src="http://khuyenmai.dienmaycholon.local/y2019/gian-hang-online/img/btn-more.png" alt="Xem thêm sản phẩm khác") 


		footer
			p Bản quyền © 2001 - 2018 thuộc về Công ty TNHH Cao Phong
		#bttop
			img.block(src='http://khuyenmai.dienmaycholon.local/y2019/gian-hang-online/img/uptop.png', width='50', height='51')
			img.none(src='http://khuyenmai.dienmaycholon.local/y2019/gian-hang-online/img/uptop-mb.png', width='30', height='31')
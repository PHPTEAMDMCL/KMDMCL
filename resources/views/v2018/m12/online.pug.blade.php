doctype html
html(lang="vi-VN")
	head
		title Giá sốc cuối tuần - Mua tv online giảm đến 20% | Điện Máy Chợ Lớn
		meta(http-equiv='content-type' content='text/html; charset=utf-8')
		meta(name='author' content=' Siêu thị điện máy Chợ Lớn ')
		meta(name='viewport' content='width=device-width, initial-scale=1')
		meta(name='description' content='Mua hàng online giảm giá đến 20% các sản phẩm tivi nhân ngày cá tháng 4 tại Siêu thị điện máy Chợ Lớn')
		meta(name='Author' content='Siêu thị Điện máy Chợ Lớn')
		meta(property='og:locale' content='vi_VN')
		meta(property='og:type' content='product')
		meta(http-equiv='cache-control', content='no-cache')
		meta(property='og:url' content='http://khuyenmai.dienmaycholon.vn/2018/12/gian-hang-online')
		meta(property='og:site_name' content='Siêu thị điện máy nội thất Chợ Lớn')
		meta(property='og:title' content='Mua hàng online giảm đến 20% các sản phẩm tivi tại Siêu thị điện máy Chợ Lớn')
		meta(property='og:description' content='Mua online giảm giá đến 20% các sản phẩm tivi kèm nhiều quà tặng hấp dẫn áp dụng tại Siêu thị điện máy Chợ Lớn')
		meta(property='og:image' content='https://dienmaycholon.vn/dmcl/images/gian-hang-online.jpg')
		meta(property='article:publisher' content='https://www.facebook.com/dienmaycholononline')
		link(type='image/x-icon' rel='Shortcut Icon' href='https://dienmaycholon.vn/public/default/img/favicon.ico')
		link(href=asset("/y2018/m12/online/css/animate.css?version=".time()) type='text/css' rel='stylesheet')
		link(href=asset("/y2018/m12/online/css/gian-hang-online.css?version=".time()) type='text/css' rel='stylesheet')
		script(type='text/javascript' src=asset('/y2018/m12/online/js/jquery.min.js'))
		script(type='text/javascript' src=asset('/y2018/m12/online/js/jquery.countdown.js'))
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
	                      $.get("/api/2018/12/online-load?cate="+$(this).attr("cate")+"&page="+currentPage,function(result){
	                             $("body").css("cursor","auto");
	                            $(".my_box_content"+idx).children("ul").append(result);
	                        });
	                
	          });

			$('.text_coundown').countdown('2019-01-25 23:59:00',function(event) {
			  $(this).html(event.strftime('<ul><li><span>%D</span><strong>:</strong><br><b>Ngày</b></li><li><span>%H</span><strong>:</strong><br><b>Giờ</b></li><li><span>%M</span><strong>:</strong><br><b>Phút</b></li><li><span>%S</span><br><b>Giây</b></li></ul>'));
			});
			});
	body
		header
			.container_screen
				.header_col
					a(href="https://dienmaycholon.vn/" class="logodmcl" target="_blank" title="Siêu thị điện máy Chợ Lớn")
						img(src="/y2018/m12/online/img/logo-dmcl.png" alt="logo Siêu thị điện máy Chợ Lớn" class="animated fadeInLeft")
					div.header_col_banner
						img(src="/y2018/m12/online/img/img-left.png" alt="siêu giảm giá" class="animated fadeInLeft")
					
					div(class="header_col2")
						img(src="/y2018/m12/online/img/img-right2.png" alt="giảm giá đến 10% tivi" class="animated3 pulse mobiimg1")
						p.classtime Thời gian áp dụng còn:
						.text_coundown
						a(href='tel:02838563388' title='Tư vấn mua hàng')
							img(src="/y2018/m12/online/img/btn-mua-head.png" alt="Hướng dẫn mua hàng" class="animated fadeInUp" target="_blank")
			
		section
			nav
				ul(class="menunav")
					li.menunav_li.current_tab_dt(idx='1', cate='8')
						a(href='#tivi' title='TIVI' ) TIVI
					li.menunav_li(idx='2', cate='28')
						a(href='#didong' title='Tủ lạnh') DI ĐỘNG
					li.menunav_li(idx='3', cate='18')
						a(href='#tulanh' title='Máy lạnh') TỦ LẠNH
					li.menunav_li(idx='4', cate='3')
						a(href='#maygiat' title='Máy giặt') Máy giặt
					li.menunav_li(idx='5', cate='9')
						a(href='#giadung' title='Gia dụng') Gia dụng
					li.menunav_li(idx='6', cate='32')
						a(href='#maylanh' title='Máy lạnh') Máy lạnh
			.container_screen
				div.box_content.my_box_content1
					ul.list_product
						@if(!empty($tivi))
						@foreach($tivi as $p)
						@if(!empty($p->Product()['name']) && !empty($p->Product()->Cate()['name']))
						li
							a.img_pro(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] , target="_blank")
								img(src='https://dienmaycholon.vn/public/picture/tmp/product_'.$p['cid_product'].'_220_220.jpg', alt=($p->Product()['name']))
								@if(!empty($p['percent']))
								span.iconpercent
									b GIẢM &nbsp;
									| {{$p['percent']}} %
								@endif
								@if(!empty($p['is_red_day']==3))
								img(src='https://dienmaycholon.vn/public/picture/icon/icon_desktop_3_1552546633.png' class="icon_left")
								@endif
								@if(!empty($p['is_red_day']==4))
								img(src='https://dienmaycholon.vn/public/picture/icon/icon_desktop_4_1551494900.png' class="icon_left")
								@endif
								@if(!empty($p['is_price']==1))
								img(src='https://dienmaycholon.vn/public/picture/icon/icon_desktop_9_1553248166.png' class="icon_right")
								@endif
							.info_price
								h3.info_name
									| {{$p->Product()['name'] }}
								@if($p['saleprice'] !== $p['discount'])
								span Giá hãng
								strong {{App\MrData::toPrice($p['saleprice'])}}
								@endif
							.box_pro_info
								.show_gift_promo
									img(src='/y2018/m12/online/img/gia-online.png' alt='giá online')
									@if($p->isprice =='1')
									span {{App\MrData::toPrice($p['discount'])}}
									@else
									span(style="text-decoration: line-through;") {{App\MrData::toPrice($p['saleprice'])}}
									@endif
								.box_muangay
									a.add_muangay1(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] title='Mua ngay' target='_blank')
						@endif
						@endforeach
						@endif
					@if($tivi->hasMorePages())
					.boxseemore
						button.btn_seemore(type="button" , idx='1', cate='8' , lastpage=$tivi->lastPage() ,page=$tivi->currentPage())
							img(src='/y2018/m12/online/img/btn-more.png' alt='Xem thêm sản phẩm khác')
					@endif
				div.box_content.my_box_content2
					ul.list_product
						@if(!empty($loa))
						@foreach($loa as $p)
						@if(!empty($p->Product()['name']) && !empty($p->Product()->Cate()['name']))
						li
							a.img_pro(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] , target="_blank")
								img(src='https://dienmaycholon.vn/public/picture/tmp/product_'.$p['cid_product'].'_220_220.jpg', alt=($p->Product()['name']))
								@if(!empty($p['percent']))
								span.iconpercent
									b GIẢM &nbsp;
									| {{$p['percent']}} %
								@endif
								@if(!empty($p['is_red_day']==3))
								img(src='https://dienmaycholon.vn/public/picture/icon/icon_desktop_3_1552546633.png' class="icon_left")
								@endif
								@if(!empty($p['is_red_day']==4))
								img(src='https://dienmaycholon.vn/public/picture/icon/icon_desktop_4_1551494900.png' class="icon_left")
								@endif
								@if(!empty($p['is_price']==1))
								img(src='https://dienmaycholon.vn/public/picture/icon/icon_desktop_9_1553248166.png' class="icon_right")
								@endif
							.info_price
								h3.info_name
									| {{$p->Product()['name'] }}
								@if($p['saleprice'] !== $p['discount'])
								span Giá hãng
								strong {{App\MrData::toPrice($p['saleprice'])}}
								@endif
							.box_pro_info
								.show_gift_promo
									img(src='/y2018/m12/online/img/gia-online.png' alt='giá online')
									@if($p->isprice =='1')
									span {{App\MrData::toPrice($p['discount'])}}
									@else
									span(style="text-decoration: line-through;") {{App\MrData::toPrice($p['saleprice'])}}
									@endif
								.box_muangay
									a.add_muangay1(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] title='Mua ngay' target='_blank')
						@endif
						@endforeach
						@endif
					@if($loa->hasMorePages())
					.boxseemore
						button.btn_seemore(type="button" , idx='2', cate='28' , lastpage=$loa->lastPage() ,page=$loa->currentPage())
							img(src='/y2018/m12/online/img/btn-more.png' alt='Xem thêm sản phẩm khác')
					@endif
				div.box_content.my_box_content3
					ul.list_product
						@if(!empty($tulanh))
						@foreach($tulanh as $p)
						@if(!empty($p->Product()['name']) && !empty($p->Product()->Cate()['name']))
						li
							a.img_pro(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] , target="_blank")
								img(src='https://dienmaycholon.vn/public/picture/tmp/product_'.$p['cid_product'].'_220_220.jpg', alt=($p->Product()['name']))
								@if(!empty($p['percent']))
								span.iconpercent
									b GIẢM &nbsp;
									| {{$p['percent']}} %
								@endif
								@if(!empty($p['is_red_day']==3))
								img(src='https://dienmaycholon.vn/public/picture/icon/icon_desktop_3_1552546633.png' class="icon_left")
								@endif
								@if(!empty($p['is_red_day']==4))
								img(src='https://dienmaycholon.vn/public/picture/icon/icon_desktop_4_1551494900.png' class="icon_left")
								@endif
								@if(!empty($p['is_price']==1))
								img(src='https://dienmaycholon.vn/public/picture/icon/icon_desktop_9_1553248166.png' class="icon_right")
								@endif
							.info_price
								h3.info_name
									| {{$p->Product()['name'] }}
								@if($p['saleprice'] !== $p['discount'])
								span Giá hãng
								strong {{App\MrData::toPrice($p['saleprice'])}}
								@endif
							.box_pro_info
								.show_gift_promo
									img(src='/y2018/m12/online/img/gia-online.png' alt='giá online')
									@if($p->isprice =='1')
									span {{App\MrData::toPrice($p['discount'])}}
									@else
									span(style="text-decoration: line-through;") {{App\MrData::toPrice($p['saleprice'])}}
									@endif
								.box_muangay
									a.add_muangay1(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] title='Mua ngay' target='_blank')
						@endif
						@endforeach
						@endif
					@if($tulanh->hasMorePages())
					.boxseemore
						button.btn_seemore(type="button",idx='3', cate='18' , lastpage=$tulanh->lastPage() ,page=$tulanh->currentPage())
							img(src='/y2018/m12/online/img/btn-more.png' alt='Xem thêm sản phẩm khác')
					@endif
				div.box_content.my_box_content4
					ul.list_product
						@if(!empty($maygiat))
						@foreach($maygiat as $p)
						@if(!empty($p->Product()['name']) && !empty($p->Product()->Cate()['name']))
						li
							a.img_pro(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] , target="_blank")
								img(src='https://dienmaycholon.vn/public/picture/tmp/product_'.$p['cid_product'].'_220_220.jpg', alt=($p->Product()['name']))
								@if(!empty($p['percent']))
								span.iconpercent
									b GIẢM &nbsp;
									| {{$p['percent']}} %
								@endif
								@if(!empty($p['is_red_day']==3))
								img(src='https://dienmaycholon.vn/public/picture/icon/icon_desktop_3_1552546633.png' class="icon_left")
								@endif
								@if(!empty($p['is_red_day']==4))
								img(src='https://dienmaycholon.vn/public/picture/icon/icon_desktop_4_1551494900.png' class="icon_left")
								@endif
								@if(!empty($p['is_price']==1))
								img(src='https://dienmaycholon.vn/public/picture/icon/icon_desktop_9_1553248166.png' class="icon_right")
								@endif
							.info_price
								h3.info_name
									| {{$p->Product()['name'] }}
								@if($p['saleprice'] !== $p['discount'])
								span Giá hãng
								strong {{App\MrData::toPrice($p['saleprice'])}}
								@endif
							.box_pro_info
								.show_gift_promo
									img(src='/y2018/m12/online/img/gia-online.png' alt='giá online')
									@if($p->isprice =='1')
									span {{App\MrData::toPrice($p['discount'])}}
									@else
									span(style="text-decoration: line-through;") {{App\MrData::toPrice($p['saleprice'])}}
									@endif
								.box_muangay
									a.add_muangay1(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] title='Mua ngay' target='_blank')
						@endif
						@endforeach
						@endif
					@if($maygiat->hasMorePages())
					.boxseemore
						button.btn_seemore(type="button",idx='4',cate='3',lastpage=$maygiat->lastPage() ,page=$maygiat->currentPage())
							img(src='/y2018/m12/online/img/btn-more.png' alt='Xem thêm sản phẩm khác')
					@endif
				div.box_content.my_box_content5
					ul.list_product
						@if(!empty($giadung))
						@foreach($giadung as $p)
						@if(!empty($p->Product()['name']) && !empty($p->Product()->Cate()['name']))
						li
							@if($p->alias_cate == 'quat')
							a.img_pro(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] , target="_blank")
								img(src='https://dienmaycholon.vn/public/picture/tmp/product_'.$p['cid_product'].'_220_220.jpg', alt=($p->Product()['name']))
								@if(!empty($p['percent']))
								span.iconpercent
									b GIẢM &nbsp;
									| {{$p['percent']}} %
								@endif
							@else
							a.img_pro(href="https://dienmaycholon.vn/may-lam-mat-quat-dieu-hoa/".$p->Product()['alias'] , target="_blank")
								img(src='https://dienmaycholon.vn/public/picture/tmp/product_'.$p['cid_product'].'_220_220.jpg', alt=($p->Product()['name']))
								@if(!empty($p['percent']))
								span.iconpercent
									b GIẢM &nbsp;
									| {{$p['percent']}} %
								@endif
							@endif
								
							.info_price
								h3.info_name
									| {{$p->Product()['name'] }}
								span Giá hãng
								strong {{App\MrData::toPrice($p['saleprice'])}}
							.box_pro_info
								.show_gift_promo
									img(src='/y2018/m12/online/img/gia-online.png' alt='giá online')
									span {{App\MrData::toPrice($p['discount'])}}
								.box_muangay
									a.add_muangay1(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] title='Mua ngay' target='_blank')
						@endif
						@endforeach
						@endif
					@if($giadung->hasMorePages())
					.boxseemore
						button.btn_seemore(type="button",idx='5',cate='9',lastpage=$giadung->lastPage() ,page=$giadung->currentPage())
							img(src='/y2018/m12/online/img/btn-more.png' alt='Xem thêm sản phẩm khác')
					@endif
				div.box_content.my_box_content6
					ul.list_product
						@if(!empty($maylanh))
						@foreach($maylanh as $p)
						@if(!empty($p->Product()['name']) && !empty($p->Product()->Cate()['name']))
						li
							a.img_pro(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] , target="_blank")
								img(src='https://dienmaycholon.vn/public/picture/tmp/product_'.$p['cid_product'].'_220_220.jpg', alt=($p->Product()['name']))
								@if(!empty($p['percent']))
								span.iconpercent
									b GIẢM &nbsp;
									| {{$p['percent']}} %
								@endif
								@if(!empty($p['is_red_day']==3))
								img(src='https://dienmaycholon.vn/public/picture/icon/icon_desktop_3_1552546633.png' class="icon_left")
								@endif
								@if(!empty($p['is_red_day']==4))
								img(src='https://dienmaycholon.vn/public/picture/icon/icon_desktop_4_1551494900.png' class="icon_left")
								@endif
								@if(!empty($p['is_price']==1))
								img(src='https://dienmaycholon.vn/public/picture/icon/icon_desktop_9_1553248166.png' class="icon_right")
								@endif
							.info_price
								h3.info_name
									| {{$p->Product()['name'] }}
								@if($p['saleprice'] !== $p['discount'])
								span Giá hãng
								strong {{App\MrData::toPrice($p['saleprice'])}}
								@endif
							.box_pro_info
								.show_gift_promo
									img(src='/y2018/m12/online/img/gia-online.png' alt='giá online')
									@if($p->isprice =='1')
									span {{App\MrData::toPrice($p['discount'])}}
									@else
									span(style="text-decoration: line-through;") {{App\MrData::toPrice($p['saleprice'])}}
									@endif
								.box_muangay
									a.add_muangay1(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] title='Mua ngay' target='_blank')
						@endif
						@endforeach
						@endif
					@if($maylanh->hasMorePages())
					.boxseemore
						button.btn_seemore(type="button" , idx='2', cate='28' , lastpage=$maylanh->lastPage() ,page=$maylanh->currentPage())
							img(src='/y2018/m12/online/img/btn-more.png' alt='Xem thêm sản phẩm khác')
					@endif
		footer
			p Bản quyền © 2001 - 2018 thuộc về Công ty TNHH Cao Phong
		#bttop
			img.block(src='/y2018/m12/online/img/uptop.png', width='50', height='51')
			img.none(src='/y2018/m12/online/img/uptop-mb.png', width='30', height='31')
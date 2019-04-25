doctype html
html(lang="vi-VN")
	head
		title Mừng ngày Giổ Tổ - giảm giá sốc đến 40% | Điện Máy Chợ Lớn
		meta(http-equiv='content-type' content='text/html; charset=utf-8')
		meta(name='author' content=' Siêu thị điện máy Chợ Lớn ')
		meta(name='viewport' content='width=device-width, initial-scale=1')
		meta(name='description' content='Mừng ngày Giổ Tổ Hùng Vương - giảm giá các mặt hàng điện tử, điện lạnh, gia dụng, di động lên đến 40% áp dụng từ 11 - 15/04/2019 tại siêu thị điện máy Chợ Lớn')
			
		meta(property='og:locale' content='vi_VN')
		meta(property='og:type' content='product')
		meta(property='og:url' content='http://khuyenmai.dienmaycholon.vn/2019/01/tan-nien-binh-an')
		meta(property='og:site_name' content='Siêu thị điện máy nội thất Chợ Lớn')
		meta(property='og:title' content='Mừng ngày Giổ Tổ - giảm giá sốc đến 40% tại Siêu thị điện máy Chợ Lớn')
		meta(property='og:description' content='Mừng ngày Giổ Tổ Hùng Vương - giảm giá các mặt hàng điện tử, điện lạnh, gia dụng, di động lên đến 40% áp dụng từ 11 - 15/04/2019 tại siêu thị điện máy Chợ Lớn')
		meta(property='og:image' content='https://dienmaycholon.vn/dmcl/images/gio-to-2019.jpg')
		meta(property='article:publisher' content='https://www.facebook.com/dienmaycholononline')
		link(type='image/x-icon' rel='Shortcut Icon' href='https://dienmaycholon.vn/public/default/img/favicon.ico')

		link(rel='stylesheet' type='text/css' href=asset('/y2019/m01/lixi/css/animate.css?version='.time()))
		link(rel='stylesheet' type='text/css' href=asset('/y2019/m01/lixi/css/lixi.css?version='.time()))
		script(type='text/javascript' src=asset('/y2019/m01/lixi/js/jquery.min.js'))
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
	                      $.get("/api/2019/01/loadindex?cate="+$(this).attr("cate")+"&page="+currentPage,function(result){
	                             $("body").css("cursor","auto");
	                            $(".my_box_content"+idx).children("ul").append(result);
	                        });
	                
	          });
			});
	body
		header
			.container_screen
				.header_col
					.header_col_banner
						a(href="https://dienmaycholon.vn/" class="logodmcl" target="_blank" title="Siêu thị điện máy Chợ Lớn")
							img(src="/y2019/m01/lixi/img/logo-dmcl.png" alt="logo Siêu thị điện máy Chợ Lớn" class="animated fadeInLeft")
						img(src="/y2019/m01/lixi/img/img-left.png" alt="siêu giảm giá" class="animated fadeInLeft text_fix1")
					.header_col2
						a(href="tel:02838563388" title="Tư vấn mua hàng" class="hotline animated fadeInDown")
							| HOTLINE <br /> 028 3856 3388
						img(src="/y2019/m01/lixi/img/gio-to-giam-gia.png" alt="mừng giổ tổ giảm giá đến 40%" class="animated3 pulse img_gioto")
						p.time Thời gian áp dụng: 11 - 15.04.2019
							img(src="/y2019/m01/lixi/img/btn-mua.png" alt="Mua ngay" class="animated fadeInUp")
						img(src="/y2019/m01/lixi/img/img-left.png" alt="siêu giảm giá" class="animated fadeInLeft text_fix2")
		nav
			.container_screen
				ul(class="menunav")
					li.menunav_li.current_tab_dt(idx='1',cate='8')
						a(href='#tivi' title='TIVI') TIVI
					li.menunav_li(idx='2',cate='28')
						a(href='#danloa' title='Dàn loa') Dàn loa
					li.menunav_li(idx='3',cate='3')
						a(href='#maygiat' title='Máy giặt') Máy giặt
					li.menunav_li(idx='4',cate='18')
						a(href='#tulanh' title='Tủ lạnh') Tủ lạnh
					li.menunav_li(idx='5',cate='32')
						a(href='#tulanh' title='Máy lạnh') Máy lạnh 
					li.menunav_li(idx='6',cate='9')
						a(href='#tulanh' title='Gia dụng') Gia dụng
								
		section
			.container_screen
				div.box_content.my_box_content1
					h2.bg_cate SẢN PHẨM TIVI
					ul.list_product
						@if(!empty($tivi))
						@foreach($tivi as $p)
						@if(!empty($p->Product()['name']) && !empty($p->Product()->Cate()['name']))
						li
							a.img_pro(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] , target="_blank")
								img(src='https://dienmaycholon.vn/public/picture/tmp/product_'.$p['cid_product'].'_220_220.jpg', alt=($p->Product()['name']))
								i.iconx
							.info_price
								h3.info_name
									| {{$p->Product()['name'] }}
								@if($p['saleprice']>$p['discount'])
								span Giá hãng
								strong {{App\MrData::toPrice($p['saleprice'])}}
								@endif
							.box_pro_info
								.show_gift_promo
									@if(!empty($p['discount']))
									p
										| Giá online: &nbsp;
										span {{App\MrData::toPrice($p['discount'])}}
									@endif
								.box_muangay
									a.add_muangay1(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] title='Mua ngay' target='_blank')
						@endif
						@endforeach
						@endif
					@if($tivi->hasMorePages())
					.boxseemore
						button.btn_seemore(type="button" , idx='1', cate='8' , lastpage=$tivi->lastPage() ,page=$tivi->currentPage())
							| Xem thêm sản phẩm Tivi khác
					@endif()
				div.box_content.my_box_content2
					h2.bg_cate SẢN PHẨM LOA
					ul.list_product
						@if(!empty($loa))
						@foreach($loa as $p)
						@if(!empty($p->Product()['name']) && !empty($p->Product()->Cate()['name']))
						li
							a.img_pro(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] , target="_blank")
								img(src='https://dienmaycholon.vn/public/picture/tmp/product_'.$p['cid_product'].'_220_220.jpg', alt=($p->Product()['name']))
								i.iconx
							.info_price
								h3.info_name
									| {{$p->Product()['name'] }}
								span Giá hãng
								strong {{App\MrData::toPrice($p['saleprice'])}}
							.box_pro_info
								.show_gift_promo
									@if(!empty($p['discount']))
									p
										| Giá online: &nbsp;
										span {{App\MrData::toPrice($p['discount'])}}
									@endif
								.box_muangay
									a.add_muangay1(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] title='Mua ngay' target='_blank')
						@endif
						@endforeach
						@endif
					@if($loa->hasMorePages())
					.boxseemore
						button.btn_seemore(type="button" , idx='2', cate='28' , lastpage=$loa->lastPage() ,page=$loa->currentPage())
							| Xem thêm sản phẩm loa khác
					@endif
							
				div.box_content.my_box_content3
					h2.bg_cate SẢN PHẨM máy giặt
					ul.list_product
						@if(!empty($maygiat))
						@foreach($maygiat as $p)
						@if(!empty($p->Product()['name']) && !empty($p->Product()->Cate()['name']))
						li
							a.img_pro(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] , target="_blank")
								img(src='https://dienmaycholon.vn/public/picture/tmp/product_'.$p['cid_product'].'_220_220.jpg', alt=($p->Product()['name']))
								i.iconx
							.info_price
								h3.info_name
									| {{$p->Product()['name'] }}
								span Giá hãng
								strong {{App\MrData::toPrice($p['saleprice'])}}
							.box_pro_info
								.show_gift_promo
									@if(!empty($p['discount']))
									p
										| Giá online: &nbsp;
										span {{App\MrData::toPrice($p['discount'])}}
									@endif
								.box_muangay
									a.add_muangay1(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] title='Mua ngay' target='_blank')
						@endif
						@endforeach
						@endif
					@if($maygiat->hasMorePages())
					.boxseemore
						button.btn_seemore(type="button",idx='3',cate='3',lastpage=$maygiat->lastPage() ,page=$maygiat->currentPage())
							| Xem thêm sản phẩm máy giặt khác
					@endif
				div.box_content.my_box_content4
					h2.bg_cate SẢN PHẨM tủ lạnh
					ul.list_product
						@if(!empty($tulanh))
						@foreach($tulanh as $p)
						@if(!empty($p->Product()['name']) && !empty($p->Product()->Cate()['name']))
						li
							a.img_pro(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] , target="_blank")
								img(src='https://dienmaycholon.vn/public/picture/tmp/product_'.$p['cid_product'].'_220_220.jpg', alt=($p->Product()['name']))
								i.iconx
							.info_price
								h3.info_name
									| {{$p->Product()['name'] }}
								span Giá hãng
								strong {{App\MrData::toPrice($p['saleprice'])}}
							.box_pro_info
								.show_gift_promo
									@if(!empty($p['discount']))
									p
										| Giá online: &nbsp;
										span {{App\MrData::toPrice($p['discount'])}}
									@endif
								.box_muangay
									a.add_muangay1(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] title='Mua ngay' target='_blank')
						@endif
						@endforeach
						@endif
					@if($tulanh->hasMorePages())
					.boxseemore
						button.btn_seemore(type="button",idx='4', cate='18' , lastpage=$tulanh->lastPage() ,page=$tulanh->currentPage())
							| Xem thêm sản phẩm tủ lạnh khác
					@endif
				div.box_content.my_box_content5
					h2.bg_cate SẢN PHẨM máy lạnh
					ul.list_product
						@if(!empty($maylanh))
						@foreach($maylanh as $p)
						@if(!empty($p->Product()['name']) && !empty($p->Product()->Cate()['name']))
						li
							a.img_pro(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] , target="_blank")
								img(src='https://dienmaycholon.vn/public/picture/tmp/product_'.$p['cid_product'].'_220_220.jpg', alt=($p->Product()['name']))
								i.iconx
							.info_price
								h3.info_name
									| {{$p->Product()['name'] }}
								span Giá hãng
								strong {{App\MrData::toPrice($p['saleprice'])}}
							.box_pro_info
								.show_gift_promo
									@if(!empty($p['discount']))
									p
										| Giá online: &nbsp;
										span {{App\MrData::toPrice($p['discount'])}}
									@endif
								.box_muangay
									a.add_muangay1(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] title='Mua ngay' target='_blank')
						@endif
						@endforeach
						@endif
					@if($maylanh->hasMorePages())
					.boxseemore
						button.btn_seemore(type="button",idx='5', cate='32' , lastpage=$maylanh->lastPage() ,page=$maylanh->currentPage())
							| Xem thêm sản phẩm máy lạnh khác
					@endif
				div.box_content.my_box_content6
					h2.bg_cate SẢN PHẨM gia dụng
					ul.list_product
						@if(!empty($giadung))
						@foreach($giadung as $p)
						@if(!empty($p->Product()['name']) && !empty($p->Product()->Cate()['name']))
						li
							a.img_pro(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] , target="_blank")
								img(src='https://dienmaycholon.vn/public/picture/tmp/product_'.$p['cid_product'].'_220_220.jpg', alt=($p->Product()['name']))
								i.iconx
							.info_price
								h3.info_name
									| {{$p->Product()['name'] }}
								span Giá hãng
								strong {{App\MrData::toPrice($p['saleprice'])}}
							.box_pro_info
								.show_gift_promo
									@if(!empty($p['discount']))
									p
										| Giá online: &nbsp;
										span {{App\MrData::toPrice($p['discount'])}}
									@endif
								.box_muangay
									a.add_muangay1(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] title='Mua ngay' target='_blank')
						@endif
						@endforeach
						@endif
					@if($giadung->hasMorePages())
					.boxseemore
						button.btn_seemore(type="button",idx='6', cate='9' , lastpage=$giadung->lastPage() ,page=$giadung->currentPage())
							| Xem thêm sản phẩm gia dụng khác
					@endif			
		footer
			p Bản quyền © 2001 - 2019 thuộc về Công ty TNHH Cao Phong
		#bttop
			img.block(src='/y2019/m01/lixi/img/uptop.png', width='50', height='51')
			img.none(src='/y2019/m01/lixi/img/uptop-mb.png', width='30', height='31')
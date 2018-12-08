doctype html
html(lang="vi-VN")
	head
		title 12 tháng 12 - Ngày đẹp cuối năm - Mua online giảm đến 50% | Điện Máy Chợ Lớn
		meta(http-equiv='content-type' content='text/html; charset=utf-8')
		meta(name='author' content=' Siêu thị điện máy Chợ Lớn ')
		meta(name='viewport' content='width=device-width, initial-scale=1')
		meta(name='description' content='Ngày đẹp cuối năm - mua online sản phẩm tv, máy lạnh, tủ lạnh, máy giặt, gia dụng giảm đến 50% áp dụng duy nhất 4 ngày từ 10/12 -13/12/2018')
		meta(name='Author' content='Siêu thị Điện máy Chợ Lớn')
		meta(property='og:locale' content='vi_VN')
		meta(property='og:type' content='product')
		meta(property='og:url' content='http://khuyenmai.dienmaycholon.vn/2018/12/sale-12-12')
		meta(property='og:site_name' content='Siêu thị điện máy nội thất Chợ Lớn')
		meta(property='og:title' content='Ngày 12 tháng 12 ngày đẹp cuối năm - Mua online giảm đến 50% tại Siêu thị điện máy Chợ Lớn')
		meta(property='og:description' content='Ngày đẹp cuối năm - mua online sản phẩm tv, máy lạnh, tủ lạnh, máy giặt, gia dụng giảm đến 50% áp dụng duy nhất 4 ngày từ 10/12 -13/12/2018 tại Siêu thị điện máy Chợ Lớn')
		meta(property='og:image' content='https://dienmaycholon.vn/dmcl/images/12-12-2018.jpg')
		meta(property='article:publisher' content='https://www.facebook.com/dienmaycholononline')
		link(type='image/x-icon' rel='Shortcut Icon' href='https://dienmaycholon.vn/public/default/img/favicon.ico')
		link(rel='stylesheet' type='text/css' href=asset('/y2018/m12/sale12/css/animate.css?version='.time()))
		link(rel='stylesheet' type='text/css' href=asset('/y2018/m12/sale12/css/sale-12-12.css?version='.time()))
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
			});
		script(type='text/javascript').
		      jQuery(document).ready(function($){
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
		                      $.get("/api/2018/12/sale-12-12?cate="+$(this).attr("cate")+"&page="+currentPage,function(result){
		                             $("body").css("cursor","auto");
		                            $(".my_box_content"+idx).children("ul").append(result);
		                        });
		                
		          });
		      });
	body
		header
			.container_screen
				a(href="https://dienmaycholon.vn/" class="logodmcl" target="_blank" title="Siêu thị điện máy Chợ Lớn")
					img(src="/y2018/m12/sale12/img/logo-dmcl.png" alt="logo Siêu thị điện máy Chợ Lớn" class="animated fadeInLeft")
				.header_col
					p.header_col_banner
						
						img(src="/y2018/m12/sale12/img/img-left.png" alt="siêu giảm giá" class="animated fadeInLeft")
					
					p(class="header_col2")
						img(src="/y2018/m12/sale12/img/ngay-dep-12-12.png" alt="ngày đẹp giá sốc" class="animated fadeInRight")
						img(src="/y2018/m12/sale12/img/giam-50.png" alt="Giảm đến 50%" class="animated3 pulse")
						a(href='tel:02838563388' title='Tư vấn mua hàng')
							img(src="/y2018/m12/sale12/img/goi-hotline.png" alt="hotline" class="animated fadeInUp")
						a(href='https://dienmaycholon.vn/tin-khuyen-mai/1212-ngay-dep-cuoi-nam-mua-online-giam-gia-den-50' title='Hướng dẫn mua hàng' target="_blank")
							img(src="/y2018/m12/sale12/img/btn-mua-head.png" alt="Hướng dẫn mua hàng" class="animated fadeInUp" target="_blank")
					nav
						ul(class="menunav")
							li.menunav_li.current_tab_dt(idx='1' , cate='8')
								a(href='#tivi' title='TIVI') TIVI
							li.menunav_li(idx='2' ,cate='18')
								a(href='#tulanh' title='Tủ lạnh') Tủ lạnh
							li.menunav_li(idx='3',cate='32')
								a(href='#maylanh' title='Máy lạnh') Máy lạnh
							li.menunav_li(idx='4',cate='3')
								a(href='#maygiat' title='Máy giặt') Máy giặt
							li.menunav_li(idx='5',cate='9')
								a(href='#giadung' title='Gia dụng') Gia dụng
		section
			.container_screen
				div.box_content.my_box_content1
					ul.list_product
						@if(!empty($tivi))
						@foreach($tivi as $p)
						@if(!empty($p->Product()['name']) && !empty($p->Product()->Cate()['name']))
						li
							a.img_pro(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] , target="_black")
								img(src='https://dienmaycholon.vn/public/picture/tmp/product_'.$p['cid_product'].'_220_220.jpg', alt='#')
								i.icon11
							
							.info_price
								h3.info_name
									| {{$p->Product()['name'] }}
								span Giá bán
								strong {{App\MrData::toPrice($p['saleprice'])}}
							p.notepercent
								span Giảm thêm 12.12 &nbsp;
								@if(!empty($p['percent']))
								strong {{$p['percent']}}%
								@endif
							.box_pro_info
								.show_gift_promo
									@if(!empty($p['price']))
									p
										| Giá bán &nbsp;
										span {{$p['price']}} Đ
									@endif
								.box_muangay
									a.add_muangay(href='tel:02838563388' title='Hotline mua hàng')
									a.add_muangay1(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] title='Mua ngay' target='_blank')
						@endif
						@endforeach
						@endif
					@if($tivi->hasMorePages())
					.boxseemore
						button.btn_seemore(type='button' , idx='1', cate='8' , lastpage=$tivi->lastPage() ,page=$tivi->currentPage())
							| Xem thêm sản phẩm Tivi khác
					@endif
				div.box_content.my_box_content2
					ul.list_product
						@if(!empty($tulanh))
						@foreach($tulanh as $p)
						@if(!empty($p->Product()['name']) && !empty($p->Product()->Cate()['name']))
						li
							a.img_pro(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] , target="_black")
								img(src='https://dienmaycholon.vn/public/picture/tmp/product_'.$p['cid_product'].'_220_220.jpg', alt='#')
								i.icon11
							.info_price
								h3.info_name
									| {{$p->Product()['name'] }}
								span Giá bán
								strong {{App\MrData::toPrice($p['saleprice'])}}
							p.notepercent
								span Giảm thêm 12.12 &nbsp;
								@if(!empty($p['percent']))
								strong {{$p['percent']}}%
								@endif
							.box_pro_info
								.show_gift_promo
									@if(!empty($p['price']))
									p
										| Giá bán &nbsp;
										span {{$p['price']}} Đ
									@endif
								.box_muangay
									a.add_muangay(href='tel:02838563388' title='Hotline mua hàng')
									a.add_muangay1(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] title='Mua ngay' target='_blank')
						@endif
						@endforeach
						@endif
					@if($tulanh->hasMorePages())
					.boxseemore
						button.btn_seemore(type='button' , idx='2', cate='18' , lastpage=$tulanh->lastPage() ,page=$tulanh->currentPage())
							| Xem thêm sản phẩm tủ lạnh khác
					@endif
				div.box_content.my_box_content3
					ul.list_product
						@if(!empty($maylanh))
						@foreach($maylanh as $p)
						@if(!empty($p->Product()['name']) && !empty($p->Product()->Cate()['name']))
						li
							a.img_pro(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] , target="_black")
								img(src='https://dienmaycholon.vn/public/picture/tmp/product_'.$p['cid_product'].'_220_220.jpg', alt='#')
								i.icon11
							.info_price
								h3.info_name
									| {{$p->Product()['name'] }}
								span Giá bán
								strong {{App\MrData::toPrice($p['saleprice'])}}
							p.notepercent
								span Giảm thêm 12.12 &nbsp;
								@if(!empty($p['percent']))
								strong {{$p['percent']}}%
								@endif
							.box_pro_info
								.show_gift_promo
									@if(!empty($p['price']))
									p
										| Giá bán &nbsp;
										span {{$p['price']}} Đ
									@endif
								.box_muangay
									a.add_muangay(href='tel:02838563388' title='Hotline mua hàng')
									a.add_muangay1(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] title='Mua ngay' target='_blank')
						@endif
						@endforeach
						@endif
					@if($maylanh->hasMorePages())
					.boxseemore
						button.btn_seemore(type='button' , idx='3', cate='32' , lastpage=$maylanh->lastPage() ,page=$maylanh->currentPage())
							| Xem thêm sản phẩm máy lạnh khác
					@endif
				div.box_content.my_box_content4
					ul.list_product
						@if(!empty($maygiat))
						@foreach($maygiat as $p)
						@if(!empty($p->Product()['name']) && !empty($p->Product()->Cate()['name']))
						li
							a.img_pro(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] , target="_black")
								img(src='https://dienmaycholon.vn/public/picture/tmp/product_'.$p['cid_product'].'_220_220.jpg', alt='#')
								i.icon11
							.info_price
								h3.info_name
									| {{$p->Product()['name'] }}
								span Giá bán
								strong {{App\MrData::toPrice($p['saleprice'])}}
							p.notepercent
								span Giảm thêm 12.12 &nbsp;
								@if(!empty($p['percent']))
								strong {{$p['percent']}}%
								@endif
							.box_pro_info
								.show_gift_promo
									@if(!empty($p['price']))
									p
										| Giá bán &nbsp;
										span {{$p['price']}} Đ
									@endif
								.box_muangay
									a.add_muangay(href='tel:02838563388' title='Hotline mua hàng')
									a.add_muangay1(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] title='Mua ngay' target='_blank')
						@endif
						@endforeach
						@endif
					@if($maygiat->hasMorePages())
					.boxseemore
						button.btn_seemore(type='button' , idx='4', cate='3' , lastpage=$maygiat->lastPage() ,page=$maygiat->currentPage())
							| Xem thêm sản phẩm máy giặt khác
					@endif
				div.box_content.my_box_content5
					ul.list_product
						@if(!empty($giadung))
						@foreach($giadung as $p)
						@if(!empty($p->Product()['name']) && !empty($p->Product()->Cate()['name']))
						li
							a.img_pro(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] , target="_black")
								img(src='https://dienmaycholon.vn/public/picture/tmp/product_'.$p['cid_product'].'_220_220.jpg', alt='#')
								i.icon11
							.info_price
								h3.info_name
									| {{$p->Product()['name'] }}
								span Giá bán
								strong {{App\MrData::toPrice($p['saleprice'])}}
							p.notepercent
								span Giảm thêm 12.12 &nbsp;
								@if(!empty($p['percent']))
								strong {{$p['percent']}}%
								@endif
							.box_pro_info
								.show_gift_promo
									@if(!empty($p['price']))
									p
										| Giá bán &nbsp;
										span {{$p['price']}} Đ
									@endif
								.box_muangay
									a.add_muangay(href='tel:02838563388' title='Hotline mua hàng')
									a.add_muangay1(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] title='Mua ngay' target='_blank')
						@endif
						@endforeach
						@endif
					@if($giadung->hasMorePages())
					.boxseemore
						button.btn_seemore(type='button' , idx='5', cate='9' , lastpage=$giadung->lastPage() ,page=$giadung->currentPage())
							| Xem thêm sản phẩm gia dụng khác
					@endif
		footer
			p Bản quyền © 2001 - 2018 thuộc về Công ty TNHH Cao Phong
		#bttop
			img.block(src='/y2018/m12/sale12/img/uptop.png', width='50', height='51')
			img.none(src='/y2018/m12/sale12/img/uptop-mb.png', width='30', height='31')
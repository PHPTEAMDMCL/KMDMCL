doctype html
html(lang="vi-VN")
	head
		title Mua online Samsung - nhận ngay quà Tết linh đình | Điện Máy Chợ Lớn
		meta(http-equiv='content-type' content='text/html; charset=utf-8')
		meta(name='author' content=' Siêu thị điện máy Chợ Lớn ')
		meta(name='viewport' content='width=device-width, initial-scale=1')
		meta(name='description' content='Mua online tv, tủ lạnh, máy giặt Samsung nhận ngay quà tết linh đình lên đến 4.690k kèm vé xem phim, bộ quà vip, kho ứng dụng, góp 0% áp dụng từ 15/12 -28/02/2019 tại Điện máy Chợ Lớn')

		meta(property='og:locale' content='vi_VN')
		meta(property='og:type' content='product')
		meta(property='og:url' content='http://khuyenmai.dienmaycholon.vn/2018/12/qua-tet-linh-dinh')
		meta(property='og:site_name' content='Siêu thị điện máy nội thất Chợ Lớn')
		meta(property='og:title' content='Mua online Samsung - nhận ngay quà Tết linh đình tại Siêu thị điện máy Chợ Lớn')
		meta(property='og:description' content='Mua online sản phẩm tv, tủ lạnh, máy giặt Samsung nhận ngay quà tết linh đình lên đến 4.690k kèm theo vé xem phim, bộ quà tặng VIP, kho giải trí ứng dụng, góp 0% áp dụng từ từ 15/12 - 28/02/2019 tại Siêu thị điện máy Chợ Lớn')
		meta(property='og:image' content='https://dienmaycholon.vn/dmcl/images/samsung-trian.jpg')
		meta(property='article:publisher' content='https://www.facebook.com/dienmaycholononline')
		link(type='image/x-icon' rel='Shortcut Icon' href='https://dienmaycholon.vn/public/default/img/favicon.ico')
		link(type='image/x-icon' rel='Shortcut Icon' href='https://dienmaycholon.vn/public/default/img/favicon.ico')
		link(href=asset("/y2018/m12/quatet/css/animate.css?version=".time()) type='text/css' rel='stylesheet')
		link(href=asset("/y2018/m12/quatet/css/bootstrap.min.css?version=".time()) type='text/css' rel='stylesheet')
		link(href=asset("/y2018/m12/quatet/css/samsung-tet.css?version=".time()) type='text/css' rel='stylesheet')

		script(type='text/javascript' src=asset('/y2018/m12/quatet/js/jquery.min.js'))
		script(type='text/javascript' src=asset('/y2018/m12/quatet/js/bootstrap.min.js'))
		script.
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-66144215-1', 'auto');
			ga('send', 'pageview');
		script(type='text/javascript').
			jQuery(document).ready(function($) {
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
		                      $.get("/api/2018/12/qua-tet-load?cate="+$(this).attr("cate")+"&page="+currentPage,function(result){
		                             $("body").css("cursor","auto");
		                            $(".my_box_content"+idx).children("ul").append(result);
		                        });
		                
		          });
			});
	body
		header
			.container_screen
				.header_col
					div.header_col_banner
						a(href="https://dienmaycholon.vn/samsung" class="logosamsung" target="_blank" title="samsung")
							img(src="/y2018/m12/quatet/img/logo-samsung.png" alt="logo samsung" class="animated fadeInUp")
							img(src="/y2018/m12/quatet/img/logo-dmcl.png" alt="logo điện máy Chợ Lớn" class="animated fadeInUp mobi_dmcl")
						img(src="/y2018/m12/quatet/img/online-uudai.png" alt="Mua online nhận nhiều ưu đãi" class="animated fadeInLeft")
						img(src="/y2018/m12/quatet/img/img-left.png" alt="rinh quà tết linh đình" class="animated fadeInLeft")
					div(class="header_col2")
						a(href="https://dienmaycholon.vn" class="logodmcl" target="_blank" title="Siêu thị điện máy Chợ Lớn")
							img(src="/y2018/m12/quatet/img/logo-dmcl.png" alt="logo điện máy Chợ Lớn" class="animated fadeInUp")
						img(src="/y2018/m12/quatet/img/img-right.png" alt="sắm công nghệ đỉnh" class="animated3 pulse")
		div.boxnav
			.boxnavscreen
				a(href="/2018/12/qua-tet-linh-dinh", class="current", title="quà tết linh đình" )
					span QUÀ TẾT LINH ĐÌNH
				a(href="/2018/12/samsung-online", title="Samsung tri ân khách hàng",target="_blank")
					span TRI ÂN KHÁCH HÀNG
				a(href="/2018/12/san-voucher-grab-reward", title="Săn voucher cùng grab reward",target="_blank")
					span SĂN VOUCHER CÙNG GRAB REWARD
		section.tab-content
			.container_screen.box_rule
				.bg_title
					h3 CHI TIẾT CHƯƠNG TRÌNH
				.bg_content
					p
						|	<strong>- Đối tượng áp dụng:</strong>  Tất cả khách hàng mua hàng tại siêu thị 	Điện Máy Chợ Lớn <br/>
						|	<strong>- Chi tiết chương trình:</strong> <br/>
						|  Từ 15/12 – 28/02 khi mua các sản phẩm có trong danh sách áp dụng sẽ được tặng kèm nhiều quà tặng hấp dẫn và giá trị khi mua tivi, tủ lạnh, máy giặt thuộc thương hiệu Samsung như: Kho ứng dụng giải trí (FPT Play, Fim+, ...), Điện thoại Samsung Galaxy J6+, Nồi chiên không dầu Lock & Lock, Bếp điện từ Super-Slim, Nồi lẩu điện Elmich, Bộ 4 hộp thủy tinh Lock&Lock, vé xem phim CGV cùng CGV gift Vip,...<br/>

						|	<strong>- Thời gian diễn ra chương trình: </strong><b>15/12 - 28/02</b><br/>
						| <b>*** Lưu ý</b><br/>
						|   1. Chương trình chỉ áp dụng cho sản phẩm có trong danh sách.<br/>
						|	2. Chương trình áp dụng mua online và mua trực tiếp tại hệ thống siêu thị Nội Thất – Điện Máy Chợ Lớn trên toàn quốc.<br/>
						|	<a href="tel:02838563388" title="Tư vấn mua hàng" class="text_center"><img src="/y2018/m12/quatet/img/hotline.jpg" alt="hotline"></a><br/>

				.bg_title
					h3 SẢN PHẨM ÁP DỤNG
			div#tab500voucher.tab-pane.active.container_screen
				ul(class="menunav")
					li.menunav_li.active(idx='1', cate='8')
						a(href='#tivi', title='tivi', data-toggle='tab') tivi
					li.menunav_li(idx='2',cate='18')
						a(href='#tulanh', title='tủ lạnh', data-toggle='tab') tủ lạnh
					li.menunav_li(idx='3',cate='3')
						a(href='#maygiat', title='máy giặt',  data-toggle='tab') máy giặt
				div.box_content.tab-content
					.tab-pane.active#tivi.my_box_content1
						ul.list_product
							@if(!empty($tivi))
							@foreach($tivi as $p)
							@if(!empty($p->Product()['name']) && !empty($p->Product()->Cate()['name']))
							li
								a.img_pro(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] , target="_blank")
									img(src='https://dienmaycholon.vn/public/picture/tmp/product_'.$p['cid_product'].'_220_220.jpg', alt=($p->Product()['name']))
									@if(!empty($p['extension']))
									span.icon11 {{$p['extension']}}
									@endif
								.info_price
									h3.info_name
										| {{$p->Product()['name'] }}
									strong {{App\MrData::toPrice($p['discount'])}}
								.box_pro_info
									.show_gift_promo
										img(src='/upload/promotion/'.$p->Promotion()['image'] alt='quà tặng samsung')
									.box_muangay
										a.add_muangay1(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] title='Mua ngay' target='_blank')
							@endif
							@endforeach
							@endif
						@if($tivi->hasMorePages())
						.boxseemore
							button.btn_seemore(type='button' , idx='1', cate='8' , lastpage=$tivi->lastPage() ,page=$tivi->currentPage())
								| Xem thêm sản phẩm Tivi khác
						@endif
					.tab-pane#tulanh.my_box_content2
						ul.list_product
							@if(!empty($tulanh))
							@foreach($tulanh as $p)
							@if(!empty($p->Product()['name']) && !empty($p->Product()->Cate()['name']))
							li
								a.img_pro(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] , target="_blank")
									img(src='https://dienmaycholon.vn/public/picture/tmp/product_'.$p['cid_product'].'_220_220.jpg', alt=($p->Product()['name']))
									@if(!empty($p['extension']))
									span.icon11 {{$p['extension']}}
									@endif
								.info_price
									h3.info_name
										| {{$p->Product()['name'] }}
									strong {{App\MrData::toPrice($p['discount'])}}
								.box_pro_info
									.show_gift_promo
										img(src='/upload/promotion/'.$p->Promotion()['image'] alt='quà tặng samsung')
									.box_muangay
										a.add_muangay1(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] title='Mua ngay' target='_blank')
							@endif
							@endforeach
							@endif
						@if($tulanh->hasMorePages())
						.boxseemore
							button.btn_seemore(type='button' , idx='2', cate='18' , lastpage=$tulanh->lastPage() ,page=$tulanh->currentPage())
								| Xem thêm sản phẩm tủ lạnh khác
						@endif
					.tab-pane#maygiat.my_box_content3
						ul.list_product
							@if(!empty($maygiat))
							@foreach($maygiat as $p)
							@if(!empty($p->Product()['name']) && !empty($p->Product()->Cate()['name']))
							li
								a.img_pro(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] , target="_blank")
									img(src='https://dienmaycholon.vn/public/picture/tmp/product_'.$p['cid_product'].'_220_220.jpg', alt=($p->Product()['name']))
									@if(!empty($p['extension']))
									span.icon11 {{$p['extension']}}
									@endif
								.info_price
									h3.info_name
										| {{$p->Product()['name'] }}
									strong {{App\MrData::toPrice($p['discount'])}}
								.box_pro_info
									.show_gift_promo
										img(src='/upload/promotion/'.$p->Promotion()['image'] alt='quà tặng samsung')
									.box_muangay
										a.add_muangay1(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] title='Mua ngay' target='_blank')
							@endif
							@endforeach
							@endif
						@if($maygiat->hasMorePages())
						.boxseemore
							button.btn_seemore(type='button' , idx='3', cate='3' , lastpage=$maygiat->lastPage() ,page=$maygiat->currentPage())
								| Xem thêm sản phẩm máy giặt khác
						@endif

		footer
			p Bản quyền © 2001 - 2018 thuộc về Công ty TNHH Cao Phong
		#bttop
			img.block(src='/y2018/m12/quatet/img/uptop.png', width='50', height='51')
			img.none(src='/y2018/m12/quatet/img/uptop-mb.png', width='30', height='31')
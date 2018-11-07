doctype html
html(lang="vi-VN")
	head
		title 11 tháng 11 - Độc thân sung sướng - Mua online giảm đến 20% | Điện Máy Chợ Lớn
		meta(http-equiv='content-type' content='text/html; charset=utf-8')
		meta(name='author' content=' Siêu thị điện máy Chợ Lớn ')
		meta(name='viewport' content='width=device-width, initial-scale=1')
		meta(name='description' content=' Độc thân sung sướng - mua online sản phẩm tv, máy lạnh, tủ lạnh, máy giặt, gia dụng giảm đến 20% áp dụng duy nhất ngày 11 tháng 11')
		meta(name='Author' content='Siêu thị Điện máy Chợ Lớn')
		meta(name='robots' content='noindex')
		meta(name='googlebot' content='noindex')

		meta(property='og:locale' content='vi_VN')
		meta(property='og:type' content='product')
		meta(property='og:url' content='')
		meta(property='og:site_name' content='Siêu thị điện máy nội thất Chợ Lớn')
		meta(property='og:title' content='Ngày 11 tháng 11 - Mua online giảm đến 20% tại Siêu thị điện máy Chợ Lớn')
		meta(property='og:description' content='Độc thân sung sướng - mua online sản phẩm tv, máy lạnh, tủ lạnh, máy giặt, gia dụng giảm đến 20% áp dụng duy nhất ngày 11 tháng 11')
		meta(property='og:image' content='https://dienmaycholon.vn/dmcl/images/11-11-800-416.jpg')
		meta(property='article:publisher' content='https://www.facebook.com/dienmaycholononline')
		link(type='image/x-icon' rel='Shortcut Icon' href='https://dienmaycholon.vn/public/default/img/favicon.ico')

		link(href="/y2018/m11/single/css/app.css" type='text/css' rel='stylesheet')

		script(type='text/javascript' src='/y2018/m11/single/js/app.js')
		script.
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-66144215-1', 'auto');
			ga('send', 'pageview');


	body
        header
            .container_screen
                .header_col
					p(class="header_col_banner")
						a(href="https://dienmaycholon.vn/" class="logodmcl" target="_blank" title="Siêu thị điện máy Chợ Lớn")
							img(src="/y2018/m11/single/img/logo-dmcl.png" alt="logo Siêu thị điện máy Chợ Lớn" class="animated fadeInLeft")
						
						img(src="/y2018/m11/single/img/img-left.png" alt="siêu giảm giá" class="animated fadeInLeft")
					
					a(class="header_col2" href="javascript:;" title="chi tiết chi trình")

						img(src="/y2018/m11/single/img/doc-than-11-11.png" alt="ngày độc thân giá sốc" class="animated fadeInRight")
					nav
						ul(class="menunav")
							$number =1;
							
							@foreach($get as $key=> $value)
							$current_tab_dt = '';
							@if($number ==1)
							$current_tab_dt = 'current_tab_dt';
							@endif
							li(class='menunav_li')(idx=$number++)(class=$current_tab_dt)
								a(href="javascript:;" title=$key) {{$key}}
							@endforeach
							
							
		section
			.container_screen
				$number =1;
				
				@foreach($get as $key => $values)
					$_hiddenbox = 'display:none';
					$fadeInLeft = '';
				@if($number ==1)
					$fadeInLeft = 'wow fadeInLeft';
					$_hiddenbox = '';
				@endif
				div(class='box_content my_box_content'+$number++ )(style=$_hiddenbox)
					ul.list_product
						@foreach($values as $k => $v)
						
						li
							a.img_pro(href='https://dienmaycholon.vn/'+$v['namecate']+'/'+$v['name'] title=$v['name'])
								img(src='https://static.dienmaycholon.vn/tmp/product_'+$v['myid']+'_220_220.jpg' alt='#')
								i.iconx
							h3.info_name
								| {{$v['name']}}
							.info_price
								strong {{number_format($v['saleprice'])}} Đ
							.box_pro_info
								.show_gift_promo
									p
										| Giá độc thân &nbsp;
										span {{$v['discountonline']}}
								.box_muangay
									a.add_muangay(href='https://dienmaycholon.vn/'+$v['namecate']+'/'+$v['name'] title='Mua ngay') MUA NGAY
						@endforeach
					


					.boxseemore
						 a.btn_seemore(title='Xem thêm sản phẩm' href='https://dienmaycholon.vn/'+$key target='_blank')
						    | Xem thêm sản phẩm {{$key}} khác
				@endforeach
			
		footer
			p Bản quyền © 2001 - 2018 thuộc về Công ty TNHH Cao Phong
		

			   		
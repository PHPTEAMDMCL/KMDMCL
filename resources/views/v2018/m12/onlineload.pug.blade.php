@if(!empty($data_list))
@foreach($data_list as $p)
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
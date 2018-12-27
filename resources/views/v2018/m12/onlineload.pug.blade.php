@if(!empty($data_list))
@foreach($data_list as $p)
@if(!empty($p->Product()['name']) && !empty($p->Product()->Cate()['name']))
li
	a.img_pro(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] , target="_blank")
		img(src='https://dienmaycholon.vn/public/picture/tmp/product_'.$p['cid_product'].'_220_220.jpg', alt=($p->Product()['name']))
		@if(!empty($p['percent']))
		span.iconpercent
			b GIẢM &nbsp;
			| {{$p['percent']}} %
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
			a.add_muangay1(href="https://dienmaycholon.vn/gio-hang/".$p->Product()['alias'] title='Mua ngay' target='_blank')
@endif
@endforeach
@endif
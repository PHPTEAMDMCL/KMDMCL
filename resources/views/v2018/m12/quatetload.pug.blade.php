@if(!empty($data_list))
@foreach($data_list as $p)
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
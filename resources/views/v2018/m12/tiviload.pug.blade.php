@if(!empty($data_list))
@foreach($data_list as $p)
@if(!empty($p->Product()['name']) && !empty($p->Product()->Cate()['name']))
li
	a.img_pro(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] , target="_black")
		img(src='https://dienmaycholon.vn/public/picture/tmp/product_'.$p['cid_product'].'_220_220.jpg', alt='#')
	.info_price
		h3.info_name
			| {{$p->Product()['name'] }}
		strong {{App\MrData::toPrice($p['discount'])}}
	.box_pro_info
		.show_gift_promo
			@if($p['gift'])
			| Tặng bộ quà trị giá <span>{{App\MrData::toPrice($p['gift'])}}</span>
			@endif
		.box_muangay
			a.add_muangay(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] title='Mua ngay' target='_blank')
@endif
@endforeach
@endif
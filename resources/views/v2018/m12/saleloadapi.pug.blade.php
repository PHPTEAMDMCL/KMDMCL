@if(!empty($data_list))
@foreach($data_list as $p)
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
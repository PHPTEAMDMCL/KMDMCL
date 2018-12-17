            @if(!empty($data_list))
            @foreach($data_list as $p)
            @if(!empty($p->Product()['name']) && !empty($p->Product()->Cate()['name']))
            li
                
                a.img_pro(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] , target="_black" )
                  img(src="https://dienmaycholon.vn/public/picture/tmp/product_".$p['cid_product']."_220_220.jpg")
                h3.info_name {{$p->Product()['name']}}
                .info_price
                  strong {{App\MrData::toPrice($p['saleprice'])}}
                p.notepercent
                  span Giảm thêm 
                  strong {{$p['percent']}} %
                .box_pro_info2
                  .show_gift_promo
                    p
                      | giá friday  
                      span {{$p['price']}} Đ
                  .box_muangay
                    a.add_muangay2(href='https://dienmaycholon.vn/gio-hang/'.$p->Product()['alias'], title='Mua ngay', target='_blank')
                    a.add_muangay1(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'], title='Xem chi tiết', target='_blank')
            @endif
            @endforeach
            @endif
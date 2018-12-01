              @if(!empty($data_list))
              @foreach($data_list as $p)
              @if(!empty($p->Product()['name']) && !empty($p->Product()->Cate()['name']))
              li
                a.img_pro(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] , target="_black")
                  img(src='https://dienmaycholon.vn/public/picture/tmp/product_'.$p['cid_product'].'_220_220.jpg', alt='#')
                  @if(App\MrData::Percent($p['discount'],$p['saleprice']) > 0)
                  b.icon11 -{{App\MrData::Percent($p['discount'],$p['saleprice'])}}%
                  @endif
                  h3.info_name
                    |  {{$p->Product()['name']}}
                  .info_price
                    strong {{App\MrData::toPrice($p['saleprice'])}}
                    p.price_fire
                      | Giá rực lửa: 
                      b {{App\MrData::toPrice($p['discount'])}}
                .box_pro_info
                  .show_gift_promo
                    @if($p['gift'])
                    p
                      | Tặng bộ quà trị giá 
                      span  {{App\MrData::toPrice($p['gift'])}}
                    @endif
                  .box_muangay
                    a.add_muangay(href='https://dienmaycholon.vn/gio-hang/'.$p->Product()['alias'], title='Mua ngay', target='_blank')
              @endif
              @endforeach
              @endif
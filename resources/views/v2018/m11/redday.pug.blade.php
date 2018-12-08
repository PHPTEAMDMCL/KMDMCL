doctype html
html
  head
    meta(http-equiv='content-type', content='text/html; charset=utf-8')
    meta(name='author', content=' Siêu thị điện máy Chợ Lớn ')
    title Ngày rực lửa -  Giảm giá kinh hoàng đến 50% | dienmaycholon.vn 
    meta(name='viewport', content='width=device-width, initial-scale=1')
    meta(name='description', content='Ngày rực lửa sự kiện giảm giá kinh hoàng trong năm giảm đến 50% tv, máy giặt, máy lạnh, tủ lạnh, di dộng, nội thất')
    meta(name='keywords', content='ngày rực lửa, giảm 50%, giảm giá kinh hoàng, giảm giá, giảm 10%, giảm 20%, coupon, mã code, ưu đãi lớn, tivi, máy giặt, tủ lạnh, máy lạnh')
    meta(content='noodp,noydir', name='robots')
    meta(name='Author', content='Siêu thị Điện máy Chợ Lớn')
    meta(property='og:locale', content='vi_VN')
    meta(property='og:type', content='article')
    meta(property='og:url', content='/')
    meta(property='og:site_name', content='Siêu thị điện máy nội thất CHỢ LỚN')
    meta(property='og:title', content='Ngày rực lửa -  Giảm giá kinh hoàng đến 50%')
    meta(property='og:description', content='Ngày rực lửa sự kiện giảm giá kinh hoàng trong năm - giảm đến 50% tv, máy giặt, máy lạnh, tủ lạnh, di dộng, nội thất tại Siêu thị điện máy Chợ Lớn ! ')
    meta(property='og:image', content='https://dienmaycholon.vn/dmcl/images/ngay-ruc-lua-face.jpg')
    meta(property='article:publisher', content='https://www.facebook.com/dienmaycholononline')
    link(type='image/x-icon', rel='Shortcut Icon', href='https://dienmaycholon.vn/public/default/img/favicon.ico')
    link(rel='stylesheet', type='text/css', href=asset('/y2018/m11/redday/css/fireday.css?version='.time()) )
    script(type='text/javascript', src=asset('/y2018/m11/redday/js/jquery.min.js') )
    script.
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-66144215-1', 'auto');
      ga('send', 'pageview');
    script(type='text/javascript').
      jQuery(document).ready(function($) {
      $(".tab_li_1").click(function(){
      $(this).parent().children(".current_tab_dt").removeClass("current_tab_dt");
      $(this).addClass("current_tab_dt");
      $(".box_cotent").hide();
      $(".my_box_content"+$(this).attr("idx")).show();
      });
      });
    script(type='text/javascript').
      jQuery(document).ready(function($){
         
          $(".btn_morepro").click(function(){
             $("body").css("cursor","wait");
             var lastpage= parseInt($(this).attr("lastpage"));
             var currentPage=parseInt($(this).attr("page"))+1;
             if(lastpage == currentPage){
                  $(this).hide();          
             }else{
                $(this).attr("page",currentPage);
             }
              if($(this).hasClass('is_main')) {
                        $.get("/api/2018/11/ngay-ruc-lua?main=1&page="+currentPage,function(result){
                            $("body").css("cursor","auto");
                            $(".boxlist_fire").append(result);
                        });
                }else{
                      var idx=$(this).attr("idx");
                      $.get("/api/2018/11/ngay-ruc-lua?cate="+$(this).attr("cate")+"&page="+currentPage,function(result){
                             $("body").css("cursor","auto");
                            $(".my_box_content"+idx).children("ul").append(result);
                        });
                }
          });
      });
  body
    header
      .content_tabs
        .info_program
          img.animated1.fadeInDown(src='/y2018/m11/redday/img/ngay-ruc-lua.png', alt='halloween')
          a.position_logo(href='https://dienmaycholon.vn/', title='Siêu thị điện máy Chợ Lớn')
            img.animated1.fadeInDown(src='/y2018/m11/redday/img/logo-dmcl.png', alt='logo điện máy Chợ Lớn')
        .box_left1
          img.animated1.fadeInLeft(src='/y2018/m11/redday/img/product-left.png', alt='demo sản phẩm ngày rực lửa')
          img.ab_50.animated.infinite.pulse(src='/y2018/m11/redday/img/giam-50.png', alt='giảm đến 50%')
        .box_right1
          .boxvideo
            iframe(width='100%', height='255', src='https://www.youtube.com/embed/8iMsRstKM_U?rel=0&autoplay=1', frameborder='0', allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture', allowfullscreen='')
          h3
            | Điện máy đại chiến thâm cung
    section.box_firefriday
      p
        i.icon_left.animated3.flash
        img.tit_50(src='/y2018/m11/redday/img/tit-50.png', alt='FIRE FRIDAY HÔM NAY SALE CHÁY GIÁ đến 50%')
        i.icon_right.animated3.flash
      ul.boxlist_fire
            @if(!empty($product_main))
            @foreach($product_main as $p)
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
      @if($product_main->hasMorePages())
      .boxseemore1
        button.btn_morepro.is_main(type='button' , lastpage=$product_main->lastPage() ,page=$product_main->currentPage())
      @endif
    section.box_tabs
      p.tit_top_pro
        img.animated3.pulse(src='/y2018/m11/redday/img/tit-top.png', alt='top sản phẩm khuyến mãi')
      .top_tabs
        ul.content_tabsli
          li.tab_li_1.current_tab_dt(idx='2', cate='8')
            a(href='javascript:;', title='TIVI' ) TIVI
          li.tab_li_1(idx='3' , cate='18')
            a(href='javascript:;', title='TỦ LẠNH' ) TỦ LẠNH
          li.tab_li_1(idx='4' , cate='3')
            a(href='javascript:;', title='MÁY GIẶT' ) MÁY GIẶT
          li.tab_li_1(idx='5' , cate='13')
            a(href='javascript:;', title='ĐIỆN THOẠI' ) ĐIỆN THOẠI
          li.tab_li_1(idx='6' ,cate='9' )
            a(href='javascript:;', title='GIA DỤNG' ) GIA DỤNG
          li.tab_li_1(idx='7', cate='10')
            a(href='javascript:;', title='NỘI THẤT' ) ĐỒ DÙNG GIA ĐÌNH
          li.tab_li_1(idx='1', cate='21')
            a(href='javascript:;', title='NỘI THẤT' ) NỘI THẤT
          
      .content_tabs
        .content_tabs1
          .box_orderby
            span.title_orderby Sắp xếp theo
            
        .cp_boxtabsfull
          
          .my_box_content2.box_cotent
            ul.list_product_fire
              @if(!empty($tivi))
              @foreach($tivi as $p)
              @if(!empty($p->Product()['name']) && !empty($p->Product()->Cate()['name']))
              li
                a.img_pro(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] , target="_black")
                  img(src='https://dienmaycholon.vn/public/picture/tmp/product_'.$p['cid_product'].'_220_220.jpg', alt='#')
                  @if(App\MrData::Percent($p['discount'],$p['saleprice']) > 0)
                  b.icon11 -{{App\MrData::Percent($p['discount'],$p['saleprice'])}}%
                  @endif
                  h3.info_name
                    | {{$p->Product()['name'] }}
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
            @if($tivi->hasMorePages())
            .boxseemore1
              button.btn_morepro(type='button' , idx='2', cate='8' , lastpage=$tivi->lastPage() ,page=$tivi->currentPage())
            @endif
          .my_box_content3.box_cotent
            ul.list_product_fire
              @if(!empty($tulanh))
              @foreach($tulanh as $p)
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
            @if($tulanh->hasMorePages())
            .boxseemore1
              button.btn_morepro(type='button' ,idx='3', cate='18' , lastpage=$tulanh->lastPage() ,page=$tulanh->currentPage())
            @endif
          .my_box_content4.box_cotent
            ul.list_product_fire
              @if(!empty($maygiat))
              @foreach($maygiat as $p)
              @if(!empty($p->Product()['name']) && !empty($p->Product()->Cate()['name']))
              li
                a.img_pro(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] , target="_black")
                  img(src='https://dienmaycholon.vn/public/picture/tmp/product_'.$p['cid_product'].'_220_220.jpg', alt='#')
                  @if(App\MrData::Percent($p['discount'],$p['saleprice']) > 0)
                  b.icon11 -{{App\MrData::Percent($p['discount'],$p['saleprice'])}}%
                  @endif
                  h3.info_name
                    | {{$p->Product()['name']}}
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
            @if($maygiat->hasMorePages())
            .boxseemore1
              button.btn_morepro(type='button' , idx='4', cate='3' , lastpage=$maygiat->lastPage() ,page=$maygiat->currentPage())
            @endif
          .my_box_content5.box_cotent
            ul.list_product_fire
              @if(!empty($dienthoai))
              @foreach($dienthoai as $p)
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
            @if($dienthoai->hasMorePages())
            .boxseemore1
              button.btn_morepro(type='button' ,idx='5', cate='13' , lastpage=$dienthoai->lastPage() ,page=$dienthoai->currentPage())
            @endif
          .my_box_content6.box_cotent
            ul.list_product_fire
              @if(!empty($giadung))
              @foreach($giadung as $p)
              @if(!empty($p->Product()['name']) && !empty($p->Product()->Cate()['name']))
              li
                a.img_pro(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] , target="_black")
                  img(src='https://dienmaycholon.vn/public/picture/tmp/product_'.$p['cid_product'].'_220_220.jpg', alt='#')
                  @if(App\MrData::Percent($p['discount'],$p['saleprice']) > 0)
                  b.icon11 -{{App\MrData::Percent($p['discount'],$p['saleprice'])}}%
                  @endif
                  h3.info_name
                    | {{$p->Product()['name']}}
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
            @if($giadung->hasMorePages())
            .boxseemore1
              button.btn_morepro(type='button' ,idx='6', cate='9' , lastpage=$giadung->lastPage() ,page=$giadung->currentPage())
            @endif
          .my_box_content1.box_cotent
            ul.list_product_fire
              @if(!empty($noithat))
              @foreach($noithat as $p)
              @if(!empty($p->Product()['name']) && !empty($p->Product()->Cate()['name']))
              li
                a.img_pro(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] , target="_black")
                  img(src='https://dienmaycholon.vn/public/picture/tmp/product_'.$p['cid_product'].'_220_220.jpg', alt='#')
                  @if(App\MrData::Percent($p['discount'],$p['saleprice']) > 0)
                  b.icon11 -{{App\MrData::Percent($p['discount'],$p['saleprice'])}}%
                  @endif
                  h3.info_name
                    | {{$p->Product()['name'] }}
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
            @if($noithat->hasMorePages())
            .boxseemore1
              button.btn_morepro(type='button' , idx='1', cate='21' , lastpage=$noithat->lastPage() ,page=$noithat->currentPage())
            @endif
          .my_box_content7.box_cotent
            ul.list_product_fire
              @if(!empty($noicomdien))
              @foreach($noicomdien as $p)
              @if(!empty($p->Product()['name']) && !empty($p->Product()->Cate()['name']))
              li
                a.img_pro(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] , target="_black")
                  img(src='https://dienmaycholon.vn/public/picture/tmp/product_'.$p['cid_product'].'_220_220.jpg', alt='#')
                  @if(App\MrData::Percent($p['discount'],$p['saleprice']) > 0)
                  b.icon11 -{{App\MrData::Percent($p['discount'],$p['saleprice'])}}%
                  @endif
                  h3.info_name
                    | {{$p->Product()['name'] }}
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
            @if($noithat->hasMorePages())
            .boxseemore1
              button.btn_morepro(type='button' , idx='1', cate='21' , lastpage=$noithat->lastPage() ,page=$noithat->currentPage())
            @endif
    footer
      p Bản quyền © 2001 - 2018 thuộc về Công ty TNHH Cao Phong
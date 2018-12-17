doctype html
head
  meta(http-equiv='content-type' content='text/html; charset=utf-8')
  meta(name='author' content=' Siêu thị điện máy Chợ Lớn ')
  title Tháng Samsung - Bí mật trong từng ô chữ | dienmaycholon.vn 
  meta(name='viewport' content='width=device-width, initial-scale=1')
  meta(name='description' content='Tháng samsung click chọn ô chữ bí bật sẽ nhận được giảm giá 3% - 10% ngẫu nhiên đầy bất ngờ')
  meta(name='keywords' content='giảm giá 5%, giảm 10%, giảm 3%, samsung coupon, mã code, ưu đãi lớn, tivi, máy giặt samsung, tủ lạnh samsung, máy lạnh, voucher')
  meta(content='INDEX,FOLLOW' name='robots')
  meta(name='Author' content='Siêu thị Điện máy Chợ Lớn')
  meta(property='og:locale' content='vi_VN')
  meta(property='og:type' content='article')
  meta(property='og:url' content='http://khuyenmai.dienmaycholon.vn/2018/11/bi-mat-samsung')
  meta(property='og:site_name' content='Siêu thị điện máy nội thất CHỢ LỚN')
  meta(property='og:title' content='Tháng Samsung - Bí mật trong từng ô chữ')
  meta(property='og:description' content='Tháng samsung - click chọn ô chữ bí bật sẽ nhận được giảm giá đến 10% máy giặt,tủ lạnh tại Siêu thị điện máy Chợ Lớn ! ')
  meta(property='og:image' content='https://dienmaycholon.vn/dmcl/images/bi-mat-samsung.jpg')
  meta(property='article:publisher' content='https://www.facebook.com/dienmaycholononline')
  link(type='image/x-icon' rel='Shortcut Icon' href='https://dienmaycholon.vn/public/default/img/favicon.ico')
  link(rel='stylesheet' type='text/css' href=asset('/y2018/m11/bimat/css/bi-mat-samsung.css?version='.time()))
  script(type='text/javascript' src=asset('/y2018/m11/bimat/js/jquery.min.js'))
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
    $('.text_closepopup').click(function(){
    $(".popup_general").hide();
    return false;
    });
    $('.popup_hidden_stock').click(function() {
    $(".popup_general").hide();
    return false;
    });
    });
header
  .content_tabs
    .info_program
      a.position_logo(href='https://dienmaycholon.vn/' title='Siêu thị điện máy Chợ Lớn' target='_blank')
        img.animated1.fadeInDown(src='/y2018/m11/bimat/img/logo-dmcl.png' alt='logo điện máy Chợ Lớn')
      img.animated3.pulse(src='/y2018/m11/bimat/img/bi-mat-samsung.png' alt='bí mật samsung trong từng ô chữ')
    .box_left1
      img.animated1.fadeInLeft(src='/y2018/m11/bimat/img/product-left.png' alt='demo sản phẩm samsung')
    .box_right1
      .boxvideo
        img.animated1.fadeInRight(src='/y2018/m11/bimat/img/product-right.png' alt='giảm giá từ 3-10%')
    .top_tabs
      ul.content_tabsli
        li.tab_li_1(idx='1' , cate='18')
          a(href='javascript:;', title='TỦ LẠNH' ) TỦ LẠNH
        li.tab_li_1(idx='2' , cate='3')
          a(href='javascript:;', title='MÁY GIẶT' ) MÁY GIẶT

    .animation-wrapper
      .particle.particle-1
section.box_tabs
  .content_tabs
    .cp_boxtabsfull
      .my_box_content1.box_cotent
        ul.list_product_fire
          @if(!empty($tulanh))
          @foreach($tulanh as $p)
          @if(!empty($p->Product()['name']) && !empty($p->Product()->Cate()['name']))
          li
            a.img_pro(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] , target="_black")
              img(src='https://dienmaycholon.vn/public/picture/tmp/product_'.$p['cid_product'].'_220_220.jpg', alt='#')
              h3.info_name
                | {{$p->Product()['name']}}
              .info_price
                @if($p['saleprice'] !== $p['discount'] )
                strong {{App\MrData::toPrice($p['saleprice'])}}
                @endif
                span {{App\MrData::toPrice($p['discount'])}}
            .box_pro_info
              .show_gift_promo
                @if($p['gift'])
                p
                  | Tặng bộ quà giá trị 
                  span {{App\MrData::toPrice($p['gift'])}}
                @endif
              .box_muangay
                a.add_muangay(href='https://dienmaycholon.vn/gio-hang/'.$p->Product()['alias'], title='Mua ngay', target='_blank')
          @endif
          @endforeach
          @endif
        .boxseemore1.boxseemore111
          a(href="https://dienmaycholon.vn/tu-lanh-samsung" title="Xem thêm tủ lạnh Samsung khác" class="title_a" target="_blank") 
            span Xem thêm sản phẩm tủ lạnh khác
      .my_box_content2.box_cotent
        ul.list_product_fire
          @if(!empty($maygiat))
          @foreach($maygiat as $p)
          @if(!empty($p->Product()['name']) && !empty($p->Product()->Cate()['name']))
          li
            a.img_pro(href="https://dienmaycholon.vn/".$p->Product()->Cate()['alias']."/".$p->Product()['alias'] , target="_black")
              img(src='https://dienmaycholon.vn/public/picture/tmp/product_'.$p['cid_product'].'_220_220.jpg', alt='#')
              h3.info_name
                | {{$p->Product()['name']}}
              .info_price
                @if($p['saleprice'] !== $p['discount'] )
                strong {{App\MrData::toPrice($p['saleprice'])}}
                @endif
                span {{App\MrData::toPrice($p['discount'])}}
            .box_pro_info
              .show_gift_promo
                @if($p['gift'])
                p
                  | Tặng bộ quà giá trị 
                  span {{App\MrData::toPrice($p['gift'])}}
                @endif
              .box_muangay
                a.add_muangay(href='https://dienmaycholon.vn/gio-hang/'.$p->Product()['alias'], title='Mua ngay', target='_blank')
          @endif
          @endforeach
          @endif
        .boxseemore1.boxseemore111
          a(href="https://dienmaycholon.vn/may-giat-samsung" title="Xem thêm máy giặt Samsung khác" class="title_a" target="_blank") 
            span Xem thêm sản phẩm máy giặt khác

section.box_popup.box_popupvoucher
  .popup_outside_stock.popup_general(style='display: none;')
    .popup_hidden_stock
    .popup_position_stock
      .popup_content_stock
        .close_comment
          span.text_closepopup
            i.closepopup
        .body_popup
          p.text_center
            img(src='img/img-main-popup.png' alt='gift main')
          p.p_title
            | Chúc mừng bạn nhận được code giảm 5%
          .introduce2
            p.pinfo
              | DMCL123456789
            p.photline
              a(href='tel:02838563388' title='Tư vấn mua hàng' class='text_center')
                img(src='img/hotline.png' alt='hotline')

footer
  p B&#x1EA3;n quy&#x1EC1;n &copy; 2001 - 2018 thu&#x1ED9;c v&#x1EC1; C&ocirc;ng ty TNHH Cao Phong
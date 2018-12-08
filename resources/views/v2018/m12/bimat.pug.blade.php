doctype html
head
  meta(http-equiv='content-type' content='text/html; charset=utf-8')
  meta(name='author' content=' Siêu thị điện máy Chợ Lớn ')
  title Mua samsung - nhận quà tết đẳng cấp| dienmaycholon.vn 
  meta(name='viewport' content='width=device-width, initial-scale=1')
  meta(name='description' content='Mua samsung - nhận quà tết đẳng cấp: samsung galaxy a6, nồi chiên cao cấp, mua online giảm từ 3 - 7% các sản phẩm tủ lạnh, máy giặt samsung tại siêu thị điện máy chợ lớn')
  meta(name='keywords' content='giảm giá 5%, giảm 7%, giảm 3%, samsung coupon, mã code, ưu đãi lớn, tivi, máy giặt samsung, tủ lạnh samsung, máy lạnh, voucher, quà tết samsung, quà đẳng cấp')
  meta(content='INDEX,FOLLOW' name='robots')
  meta(name='Author' content='Siêu thị Điện máy Chợ Lớn')
  meta(property='og:locale' content='vi_VN')
  meta(property='og:type' content='article')
  meta(property='og:url' content='http://khuyenmai.dienmaycholon.vn/2018/12/qua-tet-samsung')
  meta(property='og:site_name' content='Siêu thị điện máy nội thất CHỢ LỚN')
  meta(property='og:title' content='Mua samsung - nhận quà tết đẳng cấp')
  meta(property='og:description' content='Mua samsung - nhận quà tết đẳng cấp: dt samsung galaxy a6, nồi chiên cao cấp, đặc biệt mua online giảm từ 3 - 7% các sản phẩm tủ lạnh, máy giặt tại siêu thị điện máy chợ lớn đến 28/02/2019! ')
  meta(property='og:image' content='https://dienmaycholon.vn/dmcl/images/bi-mat-samsung.jpg')
  meta(property='article:publisher' content='https://www.facebook.com/dienmaycholononline')
  link(type='image/x-icon' rel='Shortcut Icon' href='https://dienmaycholon.vn/public/default/img/favicon.ico')
  link(rel='stylesheet' type='text/css' href=asset('/y2018/m12/bimat/css/bi-mat-samsung.css?version='.time()))
  script(type='text/javascript' src=asset('/y2018/m12/bimat/js/jquery.min.js'))
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
    $('.search_maxcoupon').click(function(){
    $("body,html").animate({scrollTop:0},800);
    $(".popup_outside_search").show();
    return false;
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
        img.animated1.fadeInDown(src='/y2018/m12/bimat/img/logo-dmcl.png' alt='logo điện máy Chợ Lớn')
    .text_left
      img.animated1.fadeInLeft(src='/y2018/m12/bimat/img/text-top.png' alt='quà tết samsung đẳng cấp')
    .text_right
      img.animated3.pulse(src='/y2018/m12/bimat/img/text-top-right.png' alt='nhân đôi quà tặng')
    .box_left1
      img.animated1.fadeInLeft(src='/y2018/m12/bimat/img/qua-tang-samsung.png' alt='quà tặng samsung j4 - nồi chiên')
    .box_right1
      .boxvideo
        img.animated1.fadeInRight(src='/y2018/m12/bimat/img/qua-tang-online.png' alt='quà tặng online giảm giá từ 3-7%')
    a.hotline(href='tel:02838563388')
      img.animated1.fadeInUp(src='/y2018/m12/bimat/img/hotline-top.png' alt='hotline Điện máy chợ lớn')
section.box_tabs
  .content_tabs
    .top_tabs
      ul.content_tabsli
        
        li.tab_li_1.current_tab_dt(idx='1' , cate='18')
          a(href='javascript:;', title='TỦ LẠNH' ) TỦ LẠNH
        li.tab_li_1(idx='2' , cate='3')
          a(href='javascript:;', title='MÁY GIẶT' ) MÁY GIẶT
        li.tab_li_1(idx='3')
          a(href='javascript:;' title='HƯỚNG DẪN THAM DỰ' class='search_maxcoupon') HƯỚNG DẪN THAM DỰ
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

section.box_popup.search_maxcoupon
  .popup_outside_search.popup_general
    .popup_hidden_stock
    .popup_position_stock
      .popup_content_stock
        .close_comment
          span.text_closepopup
            i.closepopup
        .body_popup
          p.p_title
            | THỂ LỆ CHƯƠNG TRÌNH
          .introduce2
            p.pinfo
              |     Chương trình mua online Samsung nhận Coupon giảm giá như sau: <br>
              |     <span>● Bước 1:</span> Truy cập vào trang chi tiết sản phẩm mà khách hàng chọn mua.<br>
              |     <span>● Bước 2:</span> Khách hàng điền đầy đủ thông tin: Tên + Số Điện Thoại vào ô thông tin.<br>
              |     <span>● Bước 3:</span> Khách hàng chọn nhấn vào 1 trong 3 phong bao lì xì sẽ hiện ra giá trị giảm giá.<br>
              |     <span>● Bước 4:</span> Giữ và sử dụng mã code được nhận hoàn tất đặt hàng để nhận khuyến mãi hoặc liên hệ 
              |      Hotline: 028-38563388 để hỗ trợ chi tiết.<br><br>
              |      <span>(*) Lưu ý:</span><br>
              |      - Sản phẩm tham gia chương trinh bao gồm tủ lạnh &amp; máy giặt samsung<br>
              |      - Mã Coupon chỉ áp dụng giảm giá Online. <br>
              |      - Giá trị mã coupon giảm đến 300.000Đ - 500.000Đ - 700.000Đ theo xác suất ngẫu nhiên xuất hiện <br>
              |      - Mỗi SĐT tham gia được 1 lần/1 mã Coupon/ 1 mã SP/ 1 Model<br>
              |      <span>(**)</span> Chương trình áp dụng đến hết 28/02/2019<br>
            p.photline
              a(href='tel:02838563388' title='Tư vấn mua hàng' class='text_center')
                img(src='/y2018/m12/bimat/img/hotline.png' alt='hotline')

footer
  p Bản quyền &copy; 2001 - 2018 thuộc về công ty TNHH Cao Phong
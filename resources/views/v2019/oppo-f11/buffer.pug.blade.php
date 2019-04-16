doctype html
html(lang="vi-VN")
  head
    meta(http-equiv='content-type', content='text/html; charset=utf-8')
    meta(name='author', content=' Siêu thị điện máy Chợ Lớn ')
    title Đặt ngay Oppo F11 và F11 Pro - nhận ngay quà tặng hấp dẫn | dienmaycholon.vn 
    meta(name='viewport', content='width=device-width, initial-scale=1')
    meta(name='description', content='Đặt trước sản phẩm Oppo F11 và F11 Pro nhận ngay quà tặng hấp dẫn Loa Bluetooth Havi, Trả góp 0%, tặng thêm bảo hành cho sản phẩm F11 Pro')
    meta(name='Author', content='Siêu thị Điện máy Chợ Lớn')

    meta(property='og:locale', content='vi_VN')
    meta(property='og:type', content='article')
    meta(property='og:url', content='http://khuyenmai.dienmaycholon.vn/2019/dat-hang-oppo-f11')
    meta(property='og:site_name', content='Siêu thị điện máy nội thất CHỢ LỚN')
    meta(property='og:title', content='Đặt ngay Oppo F11 và F11 Pro')
    meta(property='og:description', content='Đặt trước sản phẩm Oppo F11 và F11 Pro nhận ngay quà tặng hấp dẫn Loa Bluetooth Havi, Trả góp 0%, tặng thêm bảo hành cho sản phẩm F11 Pro tại Siêu thị Điện máy Chợ Lớn từ 29/03 - 19/04/2019 ! ')
    meta(property='og:image', content='https://dienmaycholon.vn/dmcl/images/oppo-f11.jpg')
    meta(property='article:publisher', content='https://www.facebook.com/dienmaycholononline')

    link(type='image/x-icon', rel='Shortcut Icon', href='https://dienmaycholon.vn/public/default/img/favicon.ico')
    link(href="css/bootstrap.min.css" type='text/css' rel='stylesheet')
    link(href="css/animate.css" type='text/css' rel='stylesheet')
    link(href="css/f11.css" type='text/css' rel='stylesheet')

    script(type='text/javascript' src='js/jquery.min.js')
    script(type='text/javascript' src='js/wow.min.js')
    script(type='text/javascript' src='js/bootstrap.min.js')
    script(type='text/javascript' src='js/sendcustomer.js')
    script(type='text/javascript').
      jQuery(document).ready(function($) {
      /*if($("div").hasClass("box_preorder")){
        $("body,html").animate({scrollTop:$(".box_preorder").offset().top+"px"},1000);
      };*/
      new WOW().init();
      $(".btn_preorderclick").click(function(){
        var div_store1=$("#tabContent-3").position();
        $("body , html").animate({scrollTop: (div_store1.top) },700); 
        return false;
      });
      $('.menu_top > li > a').click(function(event) {
          var target = $(this).attr('href');
        $('html, body').animate({scrollTop: $(target).offset().top}, 1000);
        event.preventDefault();
      });
      $(window).scroll(function(){if($(this).scrollTop()>500){$('#bttop').show();}else{$('#bttop').hide();}});$('#bttop').click(function(){$('body,html').animate({scrollTop:500},1000);});
      });
    script.
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-66144215-1', 'auto');
      ga('send', 'pageview');

  body
    header
      .content_tabs
        .box_left
          a.position_logo2(href='https://dienmaycholon.vn/', title='Siêu thị điện máy Chợ Lớn', target='_blank')
            img.animated.fadeInUp(src='img/logo-dmcl.png', alt='logo điện máy Chợ Lớn')
          img.animated.fadeInLeft(src='img/img-left.png', alt='Galaxy M50')
        .box_right
          a.position_logo(href='https://dienmaycholon.vn/', title='Siêu thị điện máy Chợ Lớn', target='_blank')
            img.animated.fadeInUp(src='img/logo-dmcl.png', alt='logo điện máy Chợ Lớn')
          img.animated.fadeInRight.text-left.mar_20(src='img/tit-h2.png', alt='Oppo F11')
          img.animated.fadeInRight.mar_20(src='img/tbl-timer.png', alt='Thời gian đặt mua Oppo F11')
          img.animated.fadeInUp(src='img/gift-main.png', alt='Bộ quà tặng hấp dẫn khi mua Oppo F11')
          p.timer Áp dụng từ 
            span 29/03 - 19/04/2019
          a.btn_preorder.btn_preorderclick Đặt trước ngay
    nav
      p.text-center.p_line
        img.animated.fadeInUp(src='img/line.png', alt='line')
      ul.menu_top
        li
          a(href='#tabContent-1' title='tính năng')
            | tính năng
        li
          a(href='#tabContent-2' title='thông số kỹ thuật')
            | thông số kỹ thuật
        li
          a(href='#tabContent-3' title='Đặt hàng')
            | Đặt hàng
    section.black#tabContent-1
      div.boxdemo
        p
          img(src="img/camera-48mp.jpg" alt="Camera sau 48MP" class="wow fadeInRight")
    section.black
      div.boxdemo
        p
          img(src="img/sac-nhanh.jpg" alt="Hỗ trợ sạc nhanh 3.0" class="wow fadeInLeft")
    section.black
      div.boxdemo
        p
          img(src="img/tang-camera.jpg" alt="Camera tăng cường ở trung tâm" class="wow fadeInUp")
    section.black
      div.boxdemo
        p
          img(src="img/hieu-suat-vuot-troi.jpg" alt="Hiệu suất vượt trội" class="wow fadeInDown")
    section.lamwhite.lam#tabContent-2
      div.boxdemo.boxdemo_info
        .row
          .col-lg-6.col-md-6.col-sm-12
            ul.nav.nav-tabs(role='tablist')
              li.active(role='presentation')
                a(href='#home1' aria-controls='home1' role='tab' data-toggle='tab') OPPO F11 Pro
              li(role='presentation')
                a(href='#profile1' aria-controls='profile1' role='tab' data-toggle='tab') OPPO F11
          .col-lg-6.col-md-6.col-sm-12
            h2.h2info Thông số kỹ thuật dự kiến
        .tab-content
          #home1.tab-pane.active(role='tabpanel')
            .row
              .col-lg-6.col-md-6.col-sm-12.flex_two.wow.fadeInLeft
                img(src="img/f11-pro-bot.jpg" alt="F11 Pro")
                .info_price
                  span Giá dự kiến
                  br
                  strong 8.990.000 đ
                  br
                  a(href='#tabContent-3' title='#')
                    img(src="img/dat-truoc-ngay.png" alt="Đặt trước ngay")
              .col-lg-6.col-md-6.col-sm-12.nonepd.wow.fadeInRight
                img(src="img/f11-pro-info.jpg" alt="Thông số kỹ thuật F11 Pro")

          #profile1.tab-pane(role='tabpanel')
            .row
              .col-lg-6.col-md-6.col-sm-12.flex_two
                img(src="img/f11-bot.jpg" alt="F11 Pro")
                .info_price
                  span Giá dự kiến
                  br
                  strong 7.490.000 đ
                  br
                  a(href='#tabContent-3' title='#')
                    img(src="img/dat-truoc-ngay.png" alt="Đặt trước ngay")
              .col-lg-6.col-md-6.col-sm-12.nonepd
                img(src="img/f11-info.jpg" alt="Thông số kỹ thuật F11 Pro")

    section.box_tabs
      .box_preorder#tabContent-3.wow.zoomIn
        .content_fixed
          form#tabContent-1.info_get(action='', id='main_form', method='', name='')
            h3
              | Đặt hàng
            h4.ssn-tit Thông tin người nhận
            input(type='hidden' value!=csrf_token() name='_token')
            input#name.data_frm.data_frm2(type="text" name="name" placeholder="Họ tên" required="required")
            input#email.data_frm.data_frm2(type="text" name="email" placeholder="Email của bạn")
            input#phone.data_frm.data_frm2(type="text" name="phone" placeholder="Số điện thoại" required="required" pattern="[0-9]*")
            h4.ssn-tit Bạn chọn mua OPPO
            ul.ssn-nav.clearfix.ssn-c33
              li
                .radio
                  label.container
                    input(type="radio" name="nameproduct" id="f11-pro" value="f11pro" checked="checked")
                    span.checkmark
                    | F11 PRO
              li
                .radio
                  label.container
                    input(type="radio" name="nameproduct" id="f11" value="f11")
                    span.checkmark
                    | F11
              
            .box_datmua
              button.btn_preorder1(type='submit')
                img(src='img/dat-truoc-ngay.png', alt='mua ngay')
          .info_get.box_rule
            h3
              | THỂ LỆ CHƯƠNG TRÌNH
            article
              p
                span I. NỘI DUNG CHƯƠNG TRÌNH
                br
                |               Đặt gạch trước Oppo F11/ F11 Pro mới nhận ngay ưu đãi:
                br
                |               Bộ quà tặng đặc biệt với:
                br
                |               + Loa Bluetooth Havit
                br
                |               + Trả góp lãi suất 0% qua Công ty tài chính (ACS, HC) hoặc thẻ tín dụng ngân hàng
                br
                |               + Tặng 2 năm bảo hành ( áp dụng cho Oppo F11 Pro)
                br
                span II. THỜI GIAN ÁP DỤNG
                br
                |               - Oppo F11 Pro: Từ 29/03/2019 đến 11/04/2019
                br
                |               - Oppo F11: Từ  29/03/2019 đến 19/04/2019
                br
                |
                span III. THỜI GIAN TRẢ HÀNG - MỞ BÁN 
                br
                |               * Oppo F11 Pro: Từ 12/04
                br
                |               * Oppo F11:  Từ 20/04
                br
                |
                span IV. CÁC BƯỚC THAM GIA
                br
                |               Bước 1:  Chọn phiên bản sản phẩm.
                br
                |               Bước 2:  Điền đầy đủ và chính xác thông tin khách hàng.
                br
                |               Bước 3:  Click chọn “ĐẶT TRƯỚC NGAY”.
                br
                |               Bước 4: Nhân viên Siêu thị Điện Máy - Nội Thất Chợ Lớn sẽ liên hệ lại để tư vấn chương trình khuyến mại và hướng dẫn khách hàng mua Online.
                br
                |               (*)Thông tin chi tiết liên hệ Hotline: 
                a(href='tel:028.38563388', title='Hotline Siêu thị điện máy Chợ Lớn') 028.38563388
                |  để được hỗ trợ.
    
    footer
      p Bản quyền © 2001 - 2019 thuộc về Công ty TNHH Cao Phong
    #bttop
      img.block(src='img/uptop.png', width='50', height='51')
      img.none(src='img/uptop-mb.png', width='30', height='31')

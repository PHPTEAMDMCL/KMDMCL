doctype html
html(lang="vi-VN")
  head
    meta(http-equiv='content-type', content='text/html; charset=utf-8')
    meta(name='author', content=' Siêu thị điện máy Chợ Lớn ')
    title Đặt ngay Samsung TV Mới 4K - nhận ngay quà tặng khủng | dienmaycholon.vn 
    meta(name='viewport', content='width=device-width, initial-scale=1')
    meta(name='description', content='Đặt ngay Samsung TV Mới 4K - nhận ngay quà tặng lên đến 5 triệu tại Siêu thị điện máy
    Chớ Lớn')
    meta(name='Author', content='Siêu thị Điện máy Chợ Lớn')

    meta(property='og:locale', content='vi_VN')
    meta(property='og:type', content='article')
    meta(property='og:url', content='http://khuyenmai.dienmaycholon.vn/2019/')
    meta(property='og:site_name', content='Siêu thị điện máy nội thất CHỢ LỚN')
    meta(property='og:title', content='Đặt ngay Samsung TV Mới 4K - nhận ngay quà tặng khủng')
    meta(property='og:description', content='Đặt ngay Samsung TV Mới 4K - nhận ngay quà tặng lên đến 5 triệu tại Siêu thị điện máy Chợ Lớn từ 18/03 - 07/04/2019 ! ')
    meta(property='og:image', content='https://dienmaycholon.vn/dmcl/images/tv-4k-2019.jpg')
    meta(property='article:publisher', content='https://www.facebook.com/dienmaycholononline')

    link(type='image/x-icon', rel='Shortcut Icon', href='https://dienmaycholon.vn/public/default/img/favicon.ico')
    link(href="css/bootstrap.min.css" type='text/css' rel='stylesheet')
    link(href="css/owl.carousel.min.css" type='text/css' rel='stylesheet')
    link(href="css/owl.theme.default.min.css" type='text/css' rel='stylesheet')
    link(href="css/animate.css" type='text/css' rel='stylesheet')
    link(href="css/tv-4k.css" type='text/css' rel='stylesheet')

    script(type='text/javascript' src='js/jquery-3.3.1.min.js')
    script(type='text/javascript' src='js/owl.carousel.min.js')
    script(type='text/javascript' src='js/wow.min.js')
    script(type='text/javascript' src='js/bootstrap.min.js')
    script(type='text/javascript').
      jQuery(document).ready(function($) {
      new WOW().init();
      $('.boxpro_product').owlCarousel({
          loop: false,
          margin: 20,
          nav: true,
          navText: ["<i class='prevslider'></i>","<i class='nextslider'></i>"],
          responsive:{
              0:{
                  items:2
              },
              768:{
                  items:2
              },
              1000:{
                  items:3
              }
          }
      });
      $('nav > a').click(function(event) {
          var target = $(this).attr('href');
        $('html, body').animate({scrollTop: $(target).offset().top - 50}, 1000);
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
      .container
        .row
          a(class="col-sm-12 col-md-12 col-lg-12 col-xl-12 logo" href="https://dienmaycholon.vn/" title="Siêu thị điện máy Chợ Lớn")
            img.animated.fadeInDown(src='img/logo.png', alt='Logo DMCL')
    section
      .container
        .row
          nav(class="col-sm-12 col-md-12 col-lg-12 col-xl-12 modelsamsung")
#MENUCATEKMDMCL
    section.s_body
      .container
        .row#RU8000
          div(class="col-sm-12 col-md-12 col-lg-12 col-xl-12 boxpro")
            #KMDANHMUCSANPHAM1
            .row
              div(class="col-sm-12 col-md-12 col-lg-12 col-xl-12 boxpro_product owl-carousel")
#KMLISTSANPHAM1

        .row#RU7400
          div(class="col-sm-12 col-md-12 col-lg-12 col-xl-12 boxpro")
            #KMDANHMUCSANPHAM2
            .row
              div(class="col-sm-12 col-md-12 col-lg-12 col-xl-12 boxpro_product owl-carousel")
#KMLISTSANPHAM2

        .row#RU7300
          div(class="col-sm-12 col-md-12 col-lg-12 col-xl-12 boxpro")
            #KMDANHMUCSANPHAM3
            .row
              div(class="col-sm-12 col-md-12 col-lg-12 col-xl-12 boxpro_product2")
#KMLISTSANPHAM3

        .row#RU7200
          div(class="col-sm-12 col-md-12 col-lg-12 col-xl-12 boxpro")
            #KMDANHMUCSANPHAM4
            .row
              div(class="col-sm-12 col-md-12 col-lg-12 col-xl-12 boxpro_product owl-carousel")
#KMLISTSANPHAM4

    footer
      p Bản quyền © 2001 - 2019 thuộc về Công ty TNHH Cao Phong
    #bttop
      img.block(src='img/uptop.png', width='50', height='51')
      img.none(src='img/uptop-mb.png', width='30', height='31')

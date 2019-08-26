<!DOCTYPE html>
<html lang="vi-VN">
    <head>
        <title>Tháng ưu đãi Samsung - giảm thêm đến 3 triệu kèm nhiều quà hấp dẫn | Điện Máy Chợ Lớn</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="author" content=" Siêu thị điện máy Chợ Lớn ">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Tháng ưu đãi Samsung - giảm thêm đến 3 triệu tặng kèm lò vi sóng hoặc thùng bia, trả góp 0%, tặng thêm 1 năm bảo hành (áp dụng tùy theo sản phẩm) khi mua các sản phẩm tivi, máy lạnh, máy giặt, tủ lạnh, di động, gia dụng Samsung tại siêu thị điện máy Chợ Lớn.">
        <meta property="og:locale" content="vi_VN">
        <meta property="og:type" content="product">
        <meta property="og:url" content="http://khuyenmai.dienmaycholon.vn/chuongtrinhdacbiet/thang-samsung-2019">
        <meta property="og:site_name" content="Siêu thị điện máy nội thất Chợ Lớn">
        <meta property="og:title" content="Tháng ưu đãi Samsung - giảm thêm đến 3 triệu kèm nhiều quà hấp dẫn Siêu thị điện máy Chợ Lớn">
        <meta property="og:description" content="Tháng ưu đãi Samsung - giảm thêm đến 3 triệu tặng kèm lò vi sóng hoặc thùng bia, trả góp 0%, tặng thêm 1 năm bảo hành (áp dụng tùy theo sản phẩm) khi mua các sản phẩm tivi, máy lạnh, máy giặt, tủ lạnh, di động, gia dụng Samsung tại siêu thị điện máy Chợ Lớn.">
        <meta property="og:image" content="https://dienmaycholon.vn/dmcl/images/thang-samsung-2019.jpg">
        <meta property="article:publisher" content="https://www.facebook.com/dienmaycholononline">
        <link type="image/x-icon" rel="Shortcut Icon" href="https://dienmaycholon.vn/public/default/img/favicon.ico">
        <link href="http://khuyenmai.dienmaycholon.vn/y2019/thang-samsung-2019/css/animate.css" type="text/css" rel="stylesheet">
        <link href="http://khuyenmai.dienmaycholon.vn/y2019/thang-samsung-2019/css/thang-samsung-2019.css" type="text/css" rel="stylesheet">
        <script type="text/javascript" src="http://khuyenmai.dienmaycholon.vn/y2019/thang-samsung-2019/js/jquery.min.js"></script>
        <script type="text/javascript" src="http://khuyenmai.dienmaycholon.vn/y2019/thang-samsung-2019/js/index-samsung.js"></script>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-66144215-1', 'auto');
            ga('send', 'pageview');
        </script>
    </head>
    <body>
        <header>
            <div class="container_screen">
                <div class="header_col">
                    <div class="header_col_banner">
                        <a class="logodmcl" href="https://dienmaycholon.vn/" target="_blank" title="Siêu thị điện máy Chợ Lớn">
                            <img class="animated fadeInLeft" src="http://khuyenmai.dienmaycholon.vn/y2019/thang-samsung-2019/img/logo-samsung.png" alt="logo samsung">
                        </a>
                        <img class="animated fadeInLeft text_fix1" src="http://khuyenmai.dienmaycholon.vn/y2019/thang-samsung-2019/img/img-left.png" alt="siêu giảm giá">
                    </div>
                    <div class="header_col2 info_program">
                        <h1>THÁNG KHUYẾN MÃI  <br /><span>SAMSUNG</span></h1>
                        <p>
                          <img src="http://khuyenmai.dienmaycholon.vn/y2019/thang-samsung-2019/img/gio-to-giam-gia-2.png" alt="quà tặng samsung" class="animated3 pulse">
                          <span>*Áp dụng tùy sản phẩm</span>
                        </p>
                        <img class="animated fadeInLeft text_fix2" src="http://khuyenmai.dienmaycholon.vn/y2019/thang-samsung-2019/img/img-left.png" alt="siêu giảm giá">    
                    </div>
                </div>
            </div>
        </header>
        <nav>
            <div class="container_screen">
                <ul class="menunav">
                    <?php
                        $number = 1;
                        foreach ($danhsachsanpham as $key=>$product_info) 
                        {
                            $alias = App\MrData::toAlias($key);
                            $current_tab = '';
                            if($number == 1)
                            {
                                $current_tab = 'current_tab_'.$alias;
                            }
                    ?>
                    <li class="menunav_li" idx="<?php echo $number;?>"><i class="icon <?php echo $alias;?>"></i><a href="#<?php echo $alias;?>" title="<?php echo $key;?>"><?php echo $key;?></a></li>
                    <?php
                            $number++;
                        }
                    ?>
                </ul>
            </div>
        </nav>
        <section>
            <div class="container_screen">
                <?php
                $number = 1;
                foreach ($danhsachsanpham as $keyparent=>$sanphantheodanhmuc) 
                {
                    $namecate = strtoupper($keyparent);
                ?>
                <div class="box_content my_box_content<?php echo $number;?>">
                    <div class="bannertop">
                        <a href="https://dienmaycholon.vn/<?php echo App\MrData::toAlias($keyparent);?>?g=model-2019" target="_blank" title="<?php echo $namecate;?> 2019">
                            <img class="animated fadeInUp" src="http://khuyenmai.dienmaycholon.vn/y2019/thang-samsung-2019/img/<?php echo App\MrData::toAlias($keyparent);?>-banner-top.jpg" alt="<?php echo $namecate;?> 2019">
                        </a>
                    </div>
                    <h2 class="bg_cate"><?php echo $namecate;?></h2>
                    <ul class="list_product">
                        <?php
                        foreach ($sanphantheodanhmuc as $key=>$product_info) 
                        {
                            $pro_real     = App\Model\Read\Promotion::getChiTietSanpham($product_info->cid_product);
                            $namedmcha    = App\Model\Read\Promotion::getDanhMucChiTietSanpham($pro_real->cid_cate);
                            if(!empty($namedmcha->alias))
                            {
                                $pro_real->namecate = $namedmcha->alias;
                            }
                            else
                            {
                                $pro_real->namecate = App\MrData::toAlias($key);
                            }
                            $_price_pro   = (!empty($product_info->price))?$product_info->price:$product_info->discount;
                            $price_pro    = number_format($_price_pro,0,".",".")." Đ";
                            $_saleprice   = $product_info->saleprice;
                            $saleprice    = number_format($_saleprice,0,".",".")." Đ";
                            $phantramgiam = 0;
                            if(!empty($_saleprice))
                            {
                              $phantramgiam =  round(($product_info->saleprice - $_price_pro)/$product_info->saleprice*100);
                            }
                            $img_pro      = "https://static.dienmaycholon.vn/tmp/product_".$product_info->cid_product."_220_220.jpg";
                            $link_pro     = "https://dienmaycholon.vn/".$pro_real->namecate.'/'.$pro_real->alias;
                            $tensanpham   = $pro_real->name;
                            if(!$pro_real->is_company)
                            {
                                $phantramgiam = 0;
                            }
                        ?>
                        <li>
                            <a class="img_pro" href="<?php echo $link_pro;?>" title="<?php echo $tensanpham;?>" target="_blank"><img src="<?php echo $img_pro;?>" alt="<?php echo $tensanpham;?>"></a>
                            <div class="info_price">
                                <h3 class="info_name"><?php echo $tensanpham;?></h3>
                                <?php 
                                if($phantramgiam>0)
                                {
                                ?>
                                <span>Giá hãng:</span><strong><?php echo $saleprice;?></strong>
                                <label class="discount_sock">-<?php echo $phantramgiam;?>%</label>
                                <?php
                                }
                                ?>
                            </div>
                            <div class="box_pro_info">
                                <div class="show_gift_promo">
                                    <p>Giá online:<span><?php echo $price_pro;?></span>
                                </div>
                                <div class="box_muangay"><a class="add_muangay3" href="<?php echo $link_pro;?>" title="Mua ngay" target="_blank">MUA NGAY</a></div>
                            </div>
                        </li>
                        <?php
                        }
                        ?>
                    </ul>
                    <div class="boxseemore"><a class="btn_seemore" href="javascript:;" title="Xem thêm sản phẩm <?php echo $namecate;?> khác">Xem thêm sản phẩm <?php echo $namecate;?> khác</a></div>
                </div>
                <?php
                        $number++;
                    }
                ?>
            </div>
        </section>
        <footer>
            <p>Bản quyền © 2001 - 2019 thuộc về Công ty TNHH Cao Phong</p>
        </footer>
        <div id="bttop"><img class="block" src="http://khuyenmai.dienmaycholon.vn/y2019/thang-samsung-2019/img/uptop.png" width="50" height="51"><img class="none" src="http://khuyenmai.dienmaycholon.vn/y2019/thang-samsung-2019/img/uptop-mb.png" width="30" height="31"></div>
    </body>
</html>
<!DOCTYPE html>
<html lang="vi-VN">
    <head>
        <title>Tất cả đều rẻ - Sale hàng hiệu giảm đến 50% tv, tủ lạnh, máy lạnh, máy giặt, gia dụng | Điện Máy Chợ Lớn</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="author" content=" Siêu thị điện máy Chợ Lớn ">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Tất cả đều rẻ - Sale hàng hiệu giảm giá đến 50% các sản phẩm tv, máy lạnh, máy giặt, tủ lạnh, gia dụng, di dộng tại Siêu thị điện máy Chợ Lớn">
        <meta content="INDEX,FOLLOW" name="robots">
        <meta property="og:locale" content="vi_VN">
        <meta property="og:type" content="product">
        <meta property="og:url" content="http://khuyenmai.dienmaycholon.vn/chuongtrinhdacbiet/tat-ca-deu-re">
        <meta property="og:site_name" content="Siêu thị điện máy nội thất Chợ Lớn">
        <meta property="og:title" content="Tất cả đều rẻ - Sale hàng hiệu đến 50% tại Siêu thị điện máy Chợ Lớn">
        <meta property="og:description" content="Tất cả đều rẻ mua hàng giảm giá đến 50% các sản phẩm tv, máy lạnh, máy giặt, tủ lạnh, gia dụng, di dộng tại Siêu thị điện máy Chợ Lớn">
        <meta property="og:image" content="https://dienmaycholon.vn/dmcl/images/tat-ca-re.jpg">
        <meta property="article:publisher" content="https://www.facebook.com/dienmaycholononline">
        <link type="image/x-icon" rel="Shortcut Icon" href="https://dienmaycholon.vn/public/default/img/favicon.ico">

        <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;amp;subset=vietnamese" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap&subset=vietnamese" rel="stylesheet">
        <link href="http://khuyenmai.dienmaycholon.vn/y2019/tat-ca-deu-re/css/animate.css" type="text/css" rel="stylesheet">
        <link href="http://khuyenmai.dienmaycholon.vn/y2019/tat-ca-deu-re/css/stock.css" type="text/css" rel="stylesheet">
        <script type="text/javascript" src="http://khuyenmai.dienmaycholon.vn/y2019/tat-ca-deu-re/js/jquery.min.js"></script>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-66144215-1', 'auto');
            ga('send', 'pageview');
        </script>
        <script type="text/javascript" src="http://khuyenmai.dienmaycholon.vn/y2019/tat-ca-deu-re/js/stock.js"></script>
    </head>
    <body>
        <header>
            <div class="container_screen bg_test">
                <div class="header_col">
                    <div class="header_col2">
                        <a href="https://dienmaycholon.vn/tivi-led/smart-tivi-lg-4k-43-inch-43uk6200pta" title="Smart Tivi LG 4K 43 Inch 43UK6200PTA" target="_blank" class="img_left">
                            <img class="animated fadeInLeft" src="http://khuyenmai.dienmaycholon.vn/y2019/tat-ca-deu-re/img/tv-re.png" alt="Smart Tivi LG 4K 43 Inch 43UK6200PTA" />
                        </a>
                        <p class="img_right">
                            <a class="logodmcl" href="https://dienmaycholon.vn/" target="_blank" title="Siêu thị điện máy Chợ Lớn">
                                <img class="animated fadeInDown" src="http://khuyenmai.dienmaycholon.vn/y2019/tat-ca-deu-re/img/logo-dmcl.png" alt="logo Siêu thị điện máy Chợ Lớn">
                            </a>
                            <img class="animated fadeInRight" src="http://khuyenmai.dienmaycholon.vn/y2019/tat-ca-deu-re/img/tat-ca-deu-re.png" alt="Tất cả đều rẻ giảm đến 50% tv, gia dụng, tủ lạnh, máy lạnh, máy giặt" />
                        </p>
                        <p class="p_branch">
                            <img class="animated fadeInDown" src="http://khuyenmai.dienmaycholon.vn/y2019/tat-ca-deu-re/img/branch.png" alt="nhãn hàng tv nổi tiếng" />
                        </p>
                    </div>
                </div>
            </div>
        </header>
        <section class="sec1">
            <nav>
                <ul class="menunav">
                    <?php
                        $number = 1;
                        foreach ($danhsachsanpham as $key=>$product_info) 
                        {
                            $alias = App\MrData::toAlias($key);
                            $current_tab = '';
                            if($number == 1)
                            {
                                $current_tab = 'current_tab_dt';
                            }
                    ?>
                    <li class="menunav_li <?php echo $current_tab;?>" idx="<?php echo $number;?>"><i class="icon <?php echo $alias;?>"></i><a href="#<?php echo $alias;?>" title="<?php echo $key;?>"><?php echo $key;?></a></li>
                    <?php
                            $number++;
                        }
                    ?>
                </ul>
            </nav>
            <!-- option 1 nếu show 1 box banner chung -->
            <!-- end option 1 nếu show 1 box banner chung -->
            <div class="container_screen">
                <?php
                $number = 1;
                foreach ($danhsachsanpham as $keyparent=>$sanphantheodanhmuc) 
                {
                    $namecate = strtoupper($keyparent);
                ?>
                <div class="box_content my_box_content<?php echo $number;?>">
                    <!-- option 2 nếu show box banner theo tab -->
                    <ul class="box_banner">
                    <?php
                        $_link_img = "http://khuyenmai.dienmaycholon.vn/y2019/thang-samsung-2019/img/".App\MrData::toAlias($keyparent).'-banner-top-1.jpg';
                        $pathIn = PATH_HTML.'y2019/sinh-nhat-20-nam/img/'.App\MrData::toAlias($keyparent)."-banner-top-1.jpg";
                        if(is_file($pathIn)){
                            $_number = 0;
                            while (true) {
                                $_link_img = "http://khuyenmai.dienmaycholon.vn/y2019/sinh-nhat-20-nam/img/".App\MrData::toAlias($keyparent)."-banner-top-".$_number.".jpg";
                                $pathIncheck = PATH_HTML.'y2019/sinh-nhat-20-nam/img/'.App\MrData::toAlias($keyparent).'-banner-top-'.$_number.'.jpg';
                                if(is_file($pathIncheck)){
                                    echo '<li><a target="_blank" href="#" class="linkbanner"><img src="'.$_link_img.'" alt="banner 1" /></a></li>';
                                }
                                else
                                {
                                    break;
                                }
                                if($_number>10)
                                {
                                   break;    
                                }
                                $_number++;
                            }
                        }
                        else
                        {
                            $_number = 0;
                            while (true) 
                            {
                                $_link_img = "http://khuyenmai.dienmaycholon.vn/y2019/sinh-nhat-20-nam/img/layout-banner-top-".$_number.".jpg";
                                $pathIncheck = PATH_HTML.'y2019/sinh-nhat-20-nam/img/layout-banner-top-'.$_number.'.jpg';
                                if(is_file($pathIncheck)){
                                    echo '<li><a target="_blank" href="#" class="linkbanner"><img src="'.$_link_img.'" alt="banner 1" /></a></li>';
                                }
                                else
                                {
                                    break;
                                }
                                if($_number>10)
                                {
                                   break;    
                                }
                                $_number++;
                            }
                        }
                    ?>   
                    </ul>
                    <!-- end  option 2 nếu show box banner theo tab -->
                    <ul class="list_product">
                        <?php
                        foreach ($sanphantheodanhmuc as $key=>$product_info) 
                        {
                            $pro_real     = App\Model\Read\Promotion::getChiTietSanpham($product_info->cid_product);
                            $is_red_day = $pro_real->is_red_day;
                            $is_million = $pro_real->is_million;
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
                            $phantramgiaonline = 'nữa';
                            if($product_info->price>0)
                            {
                                if($product_info->price<$product_info->discount)
                                {
                                  $_phantramgiaonline =  round(($product_info->discount - $_price_pro)/$product_info->discount*100);
                                  if($_phantramgiaonline>10)
                                  {
                                    $phantramgiaonline = $_phantramgiaonline.'%';
                                  }
                                }
                            }
                            $img_pro      = "https://static.dienmaycholon.vn/tmp/product_".$product_info->cid_product."_220_220.jpg";
                            $link_pro     = "https://dienmaycholon.vn/".$pro_real->namecate.'/'.$pro_real->alias;
                            $tensanpham   = $pro_real->name;
                            $has_docquyenonline = '';
                            if($product_info->price>0)
                            {
                                $has_docquyenonline = 'has_docquyenonline';
                            }
                            
                        ?>
                        <li> 
                            <a class="img_pro" href="<?php echo $link_pro;?>" title="<?php echo $tensanpham;?>" target="_blank">
                                <img src="<?php echo $img_pro;?>" alt="<?php echo $tensanpham;?>">
                                <?php
                                if($is_red_day==4) 
                                {
                                ?>
                                <img src="https://dienmaycholon.vn/public/picture/icon/icon_desktop_4_1551494900.png" class="icon_left">
                                <?php
                                }
                                ?>
                                <?php
                                if($is_million==2) 
                                {
                                ?>
                                <img src="https://dienmaycholon.vn/public/picture/icon/icon_desktop_1_1559113401.png" class="icon_left">
                                <?php
                                }
                                ?>
                            </a>
                            <div class="info_price">
                                <a href="<?php echo $link_pro;?>" title="<?php echo $tensanpham;?>" target="_blank">
                                    <h3 class="info_name"><?php echo $tensanpham;?></h3>
                                </a>
                                <div class="showprice">
                                    <span>Giá online: <?php echo $price_pro;?></span>
                                    <?php
                                    if($phantramgiam>0)
                                    {
                                    ?>
                                        <b class="notepercent">
                                            -<?php echo $phantramgiam;?>%
                                        </b>
                                    <?php   
                                    }
                                    ?>
                                    
                                </div>
                                <div class="show_desc <?php echo $has_docquyenonline;?>">
                                    <?php
                                    if(0>0)
                                    {
                                    ?>
                                    <b class="notepercent2">
                                        Độc quyền online rẻ hơn <?php echo $phantramgiaonline;?>
                                    </b>
                                    <?php   
                                    }
                                    ?>
                                    <?php
                                    if($product_info->saleprice > 0)
                                    {
                                    ?>
                                    <span class="price_strike">Giá hãng: <?php echo $saleprice;?> </span>
                                    <?php   
                                    }
                                    ?>
                                    <?php echo $product_info->note;?>
                                </div>
                            </div>
                            <div class="box_pro_info">
                                <div class="box_muangay">
                                    <a class="add_muangay1" href="<?php echo $link_pro;?>" title="Mua ngay" target="_blank">ĐẶT MUA ONLINE</a>
                                </div>
                            </div>
                        </li>
                        <?php
                        }
                        ?>
                    </ul>
                    <div class="boxseemore"><button class="btn_seemore" type="button"> <span>XEM THÊM <b class="b_num"></b> SẢN PHẨM <?php echo $namecate;?> KHÁC</span></button></div>
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
        <div id="bttop"><img class="block" src="http://khuyenmai.dienmaycholon.vn/y2019/tat-ca-deu-re/img/uptop.png" width="50" height="51"><img class="none" src="http://khuyenmai.dienmaycholon.vn/y2019/tat-ca-deu-re/img/uptop-mb.png" width="30" height="31"></div>
    </body>
</html>
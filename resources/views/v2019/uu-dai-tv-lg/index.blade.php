<!DOCTYPE html>
<html lang="vi-VN">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content=" Siêu thị điện máy Chợ Lớn ">
    <title>Ưu đãi lớn khi mua TV LG quà tặng đến 7 triệu - và hỗ trợ tiền điện 1 năm| Điện Máy Chợ Lớn</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ưu đãi lớn khi mua TV LG tặng bộ quà tặng đến 7 triệu, kèm thêm PMH 1 triệu hỗ trợ 1 năm tiền điện tại Siêu thị điện máy Chợ Lớn">
    <meta name="keywords" content="tivi LG giảm giá, tv lg giá rẻ, ưu đãi tv lg, mua tv lg, dien may cho lon, bộ quà tv LG">
    <meta content="INDEX,FOLLOW" name="robots">
    <meta property="og:locale" content="vi_VN">
    <meta property="og:type" content="article">
    <meta property="og:url" content="http://khuyenmai.dienmaycholon.vn/chuongtrinhdacbiet/uu-dai-tv-lg">
    <meta property="og:site_name" content="Siêu thị điện máy nội thất CHỢ LỚN">
    <meta property="og:title" content="Ưu đãi lớn khi mua TV LG quà tặng đến 7 triệu - và hỗ trợ tiền điện 1 năm kèm PMH 1 triệu">
    <meta property="og:description" content="Ưu đãi lớn khi mua TV LG bộ quà tặng đến 7 triệu, kèm thêm PMH 1 triệu hỗ trợ 1 năm tiền điện áp dụng tại Siêu thị điện máy Chợ Lớn">
    <meta property="og:image" content="https://dienmaycholon.vn/dmcl/images/uu-dai-lg.jpg">
    <meta property="article:publisher" content="https://www.facebook.com/dienmaycholononline">
    <link type="image/x-icon" rel="Shortcut Icon" href="https://dienmaycholon.vn/public/default/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="http://khuyenmai.dienmaycholon.vn/y2019/uu-dai-tv-lg/css/tv-lg.css">
    <script type="text/javascript" src="http://khuyenmai.dienmaycholon.vn/y2019/uu-dai-tv-lg/js/jquery.min.js"></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-66144215-1', 'auto');
        ga('send', 'pageview');
    </script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
        $(".tab_li_1").click(function(){
        $(this).parent().children(".current_tab_dt").removeClass("current_tab_dt");
        $(this).addClass("current_tab_dt");
        $(".box_cotent").hide();
        $(".my_box_content"+$(this).attr("idx")).show();
        });
        $(".box_cotent").children('.list_product_fire').children('li').slice(0, 4).show();
        $(".title_a").on('click', function (e) {
            e.preventDefault();
            $(this).parent().parent().children('.list_product_fire').children('li:hidden').slice(0, 8).slideDown();
            if(($(this).parent().parent().children('.list_product_fire').children('li:hidden')).length == 0) {
                $(this).hide();
            };
        });
        });
    </script>
</head>
<body>
<header>
    <div class="content_tabs">
        <a class="position_logo" href="https://dienmaycholon.vn/" title="Siêu thị điện máy Chợ Lớn" target="_blank">
            <img class="animated1 fadeInDown" src="http://khuyenmai.dienmaycholon.vn/y2019/uu-dai-tv-lg/img/logo-dmcl.png" alt="logo điện máy Chợ Lớn">
        </a>
        <div class="text_left">
            <img class="animated1 fadeInLeft" src="http://khuyenmai.dienmaycholon.vn/y2019/uu-dai-tv-lg/img/product-left.png" alt="Samsung Galaxy giá rẻ">
        </div>
        <div class="text_right">
            <img class="animated3 pulse" src="http://khuyenmai.dienmaycholon.vn/y2019/uu-dai-tv-lg/img/text-top-right.png" alt="ưu đãi samsung galaxy giảm đến 41%">
        </div>
    </div>
</header>
<section class="box_tabs">
    <div class="content_tabs">
        <div class="top_tabs">
            <ul class="content_tabsli">
                <li class="tab_li_1 current_tab_dt" idx="1"><a href="javascript:;" title="SẢN PHẨM ÁP DỤNG">SẢN PHẨM ÁP DỤNG</a></li>
            </ul>
        </div>
        <div class="cp_boxtabsfull">
            <div class="my_box_content1 box_cotent">
                <ul class="list_product_fire">
                    <?php
                    $number = 1;
                    $quakhung = array();
                    $giasoc   = array();
                    foreach ($danhsachsanpham as $key=>$sanphantheodanhmuc) 
                    {
                        if (strpos($key, 'qua-khung') !== false) {
                            $new_name   = str_replace("qua-khung","",$key);
                            $quakhung[$new_name] = $sanphantheodanhmuc;
                        }
                        elseif (strpos($key, 'gia-soc') !== false) {
                            $new_name = str_replace("gia-soc","",$key);
                            $giasoc[$new_name] = $sanphantheodanhmuc;
                        }
                    }
                    foreach ($danhsachsanpham as $key=>$sanphantheodanhmuc) 
                    {
                        $namecate = strtoupper($key);
                    ?>
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
                        ?>
                    <li>
                        <a class="img_pro" href="<?php echo $link_pro;?>" title="<?php echo $tensanpham;?>" target="_blank">
                            <img src="<?php echo $img_pro;?>" alt="<?php echo $tensanpham;?>">
                            <h3 class="info_name"><?php echo $tensanpham;?></h3>
                            <?php
                            if($phantramgiam>0)
                            {
                            ?>
                                <span class="icon11"><b>GIẢM SỐC</b>-<?php echo $phantramgiam;?>%</span>
                            <?php   
                            }
                            ?>
                            <div class="info_price">
                                <?php
                                if($phantramgiam>0)
                                {
                                ?>
                                    <strong><?php echo $saleprice;?></strong>
                                <?php   
                                }
                                ?>
                                <span><?php echo $price_pro;?></span>
                            </div>
                        </a>
                        <article><?php echo $product_info->note;?></article>
                        <div class="box_pro_info">
                            <div class="box_muangay">
                                <a class="add_muangay" href="<?php echo $link_pro;?>" title="Mua ngay" target="_blank"></a>
                            </div>
                        </div>
                    </li>
                        <?php
                        }
                        ?>
                    <?php
                        $number++;
                    }
                    ?>
                </ul>
                <div class="boxseemore1 boxseemore111">
                    <a class="title_a" href="javascript:;" title="Xem thêm tivi LG khác" target="_blank"> <span>Xem thêm sản phẩm tivi LG khác</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
    <p>Bản quyền &copy; 2001 - 2019 thuộc về công ty TNHH Cao Phong</p>
</footer>
</body>
</html>
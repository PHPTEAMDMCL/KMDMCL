<!DOCTYPE html><head><meta http-equiv="content-type" content="text/html; charset=utf-8"><meta name="author" content=" Siêu thị điện máy Chợ Lớn "><title>Mua Samsung Galaxy - ưu đãi quà tặng lên đến 3 triệu| Điện Máy Chợ Lớn</title><meta name="viewport" content="width=device-width, initial-scale=1"><meta name="description" content="Mua Samsung Galaxy - ưu đãi quà tặng lên đến 3 triệu tại siêu thị điện máy chợ lớn áp dụng trong tháng 06 - 2019"><meta name="keywords" content="giảm giá 10% galaxy, giảm 20% samsung, giảm 40% Galaxy, giảm giá samsung galaxy, phiếu mua hàng 500k"><meta content="INDEX,FOLLOW" name="robots"><meta property="og:locale" content="vi_VN"><meta property="og:type" content="article"><meta property="og:url" content="http://khuyenmai.dienmaycholon.vn/chuongtrinh/galaxy-thang-4"><meta property="og:site_name" content="Siêu thị điện máy nội thất CHỢ LỚN"><meta property="og:title" content="Mua Samsung Galaxy - ưu đãi quà tặng lên đến 3 triệu"><meta property="og:description" content="Mua Samsung Galaxy - ưu đãi quà tặng lên đến 3 triệu tại Siêu thị điện máy Chợ Lớn áp dụng trong tháng 06 - 2019 "><meta property="og:image" content="https://dienmaycholon.vn/dmcl/images/galaxy-08-04-19.jpg"><meta property="article:publisher" content="https://www.facebook.com/dienmaycholononline"><link type="image/x-icon" rel="Shortcut Icon" href="https://dienmaycholon.vn/default/img/favicon.ico"><link rel="stylesheet" type="text/css" href="http://khuyenmai.dienmaycholon.vn/y2019/uu-dai-samsung-mung-ky-niem-50-nam/css/samsung-galaxy.css"><script type="text/javascript" src="http://khuyenmai.dienmaycholon.vn/y2019/uu-dai-samsung-mung-ky-niem-50-nam/js/jquery.min.js"></script><script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-66144215-1', 'auto');
ga('send', 'pageview');</script><script type="text/javascript">jQuery(document).ready(function($) {
$(".tab_li_1").click(function(){
$(this).parent().children(".current_tab_dt").removeClass("current_tab_dt");
$(this).addClass("current_tab_dt");
$(".box_cotent").hide();
$(".my_box_content"+$(this).attr("idx")).show();
});
});</script></head><header><div class="content_tabs"><div class="text_left"><img class="animated1 fadeInLeft" src="http://khuyenmai.dienmaycholon.vn/y2019/uu-dai-samsung-mung-ky-niem-50-nam/img/product-left.png" alt="Samsung Galaxy giá rẻ"></div><div class="text_right"><img class="animated3 pulse" src="http://khuyenmai.dienmaycholon.vn/y2019/uu-dai-samsung-mung-ky-niem-50-nam/img/text-top-right.png" alt="ưu đãi samsung galaxy giảm đến 41%"></div></div></header><section class="box_tabs"><div class="content_tabs"><div class="top_tabs"><ul class="content_tabsli"><li class="tab_li_1 current_tab_dt" idx="1"><a href="javascript:;" title="SẢN PHẨM ÁP DỤNG">SẢN PHẨM ÁP DỤNG</a></li></ul></div><div class="cp_boxtabsfull"><div class="my_box_content1 box_cotent"><ul class="list_product_fire">
  <?php
  foreach ($danhsachsanpham as $key=>$sanphantheodanhmuc) {
    foreach ($sanphantheodanhmuc as $key=>$product_info) 
    { 
      $pro_real     = App\Model\Read\Promotion::getChiTietSanpham($product_info->cid_product);
      $namedmcha    = App\Model\Read\Promotion::getDanhMucChiTietSanpham($pro_real->cid_cate);
      $pro_real->namecate = $namedmcha->alias;
      $_price_pro   = (!empty($product_info->price))?$product_info->price:$product_info->discount;
      $price_pro    = number_format($_price_pro,0,".",".")." Đ";
      $_saleprice   = $product_info->saleprice;
      $saleprice    = number_format($_saleprice,0,".",".")." Đ";
      $phantramgiam = 0;
      if($_saleprice>$_price_pro and !empty($_saleprice))
      {
        $phantramgiam = (($product_info->saleprice - $_price_pro)/1000)."K";
      }
      $img_pro      = "https://static.dienmaycholon.vn/tmp/product_".$product_info->cid_product."_220_220.jpg";
      $link_pro     = "https://dienmaycholon.vn/".$pro_real->namecate.'/'.$pro_real->alias;
      $tensanpham   = $pro_real->name;
      $phantramgiam = $product_info->percent;
  ?>
  <li><a class="img_pro" href="<?php echo $link_pro;?>" title="<?php echo $tensanpham;?>" target="_blank">
    <img src="<?php echo $img_pro;?>" alt="<?php echo $tensanpham;?>">
    <?php
    if(!empty($product_info->note)):
    ?>  
    <img src="http://khuyenmai.dienmaycholon.vn/y2019/tat-ca-deu-re/img/frame-is-event-250-2.png" alt="quà tặng lớn" class="frame_3QV8">
    <div class="psb_2">
        <?php echo $product_info->note;?>
    </div>
    <?php
    else:
    ?>
    <img src="http://khuyenmai.dienmaycholon.vn/y2019/tat-ca-deu-re/img/frame-is-event-250-1.png" alt="quà tặng lớn" class="frame_3QV8">
    <?php 
    endif;
    ?>
    <h3 class="info_name"><?php echo $tensanpham;?></h3>
    <div class="galaxy"><img src="http://khuyenmai.dienmaycholon.vn/y2019/uu-dai-samsung-mung-ky-niem-50-nam/img/galaxy.png" alt="Quà tặng GALAXY" /></div>
    <?php 
    if(!empty($phantramgiam))
    {
    ?>
    <span class="icon11"><b>GIẢM SỐC</b>- <?php echo $phantramgiam;?></span>
    <?php
    }
    ?>
    <div class="info_price">
      <?php
      if($_saleprice>$_price_pro)
      {
      ?>
        <strong><?php echo $saleprice;?></strong>
      <?php
      }
      ?>
      <span><?php echo $price_pro;?></span></div></a><article><?php echo $product_info->note;?></article><div class="box_pro_info"><div class="box_muangay"><a class="add_muangay" href="<?php echo $link_pro;?>" title="Mua ngay" target="_blank"></a></div></div></li>
  <?php
    }
  }
  ?>
</ul><div class="boxseemore1 boxseemore111"><a class="title_a" href="https://dienmaycholon.vn/dien-thoai-di-dong" title="Xem thêm tủ lạnh Samsung khác" target="_blank"> <span>Xem thêm sản phẩm điện thoại khác</span></a></div></div></div></div></section><footer><p>Bản quyền &copy; 2001 - 2019 thuộc về công ty TNHH Cao Phong</p></footer>
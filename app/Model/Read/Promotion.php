<?php

namespace App\Model\Read;

use Illuminate\Database\Eloquent\Model;
use DB;
class Promotion extends Model
{
    //
    protected $connection = 'mysql2';
    protected $table="pro_promotion_product";
    protected $primary='id';
    public $timestamps=false;

    protected static function getRecordByNumber($tenchuongtrinh)
    {
        $_sql_promo = "SELECT number_cate FROM promotion WHERE name_promo like '".$tenchuongtrinh."'";
        $result = DB::connection("mysql")->select($_sql_promo);
        $data = array();
        foreach ($result[0] as $value) {
            if(!empty($value))
            {
                $_array_data = json_decode($value);
                foreach ($_array_data as $key => $datapro) {
                    $data[$key]['name'] =  $datapro;
                    $sql='SELECT * FROM '.$tenchuongtrinh.' WHERE soloai like '.$key;
                    $data[$key]['data'] =  DB::connection("mysql")->select($sql);
                }
            }
        }
        return $data;
    }

    protected static function getDanhMucChuongTrinh($tenchuongtrinh)
    {
        $_sql_promo = "SELECT * FROM categories WHERE name_promotion like '".$tenchuongtrinh."' ORDER BY id ASC";
        $result = DB::connection("mysql")->select($_sql_promo);
        return $result;
    }

    protected static function getDanhMucCon($code,$tenchuongtrinh)
    {
        $_sql_promo = "SELECT * FROM catechild WHERE cid_categories like '".$code."' AND name_promotion like '".$tenchuongtrinh."' ORDER BY id ASC";
        $result = DB::connection("mysql")->select($_sql_promo);
        return $result;
    }

    protected static function getSanPhamChuongTrinh($tenchuongtrinh)
    {
        $_sql_promo = "SELECT * FROM product_detail WHERE name_promotion like '".$tenchuongtrinh."' ORDER BY id ASC";
        $result = DB::connection("mysql")->select($_sql_promo);
        return $result;
    }

    protected static function getSanPhamDanhMuc($code,$tenchuongtrinh)
    {
        $_sql_product = "SELECT * FROM product_detail WHERE cid_catechild like '".$code."' AND name_promotion like '".$tenchuongtrinh."' ORDER BY id ASC";
        $result = DB::connection("mysql")->select($_sql_product);
        return $result;
    }

    protected static function getChiTietSanPhamChuongTrinh($id)
    {
        $_sql_promo = "SELECT * FROM product_detail WHERE cid_product like '".$id."' ORDER BY id ASC";
        $result = DB::connection("mysql")->select($_sql_promo);
        return $result;
    }

    protected static function themChuongTrinhKhuyenMai($name_promo,$date_time,$note='')
    {
        $_sql_promo = "SELECT name_promo FROM promotion WHERE name_promo like '".$name_promo."'";
        $result1 = DB::connection("mysql")->select($_sql_promo);
        if(count($result1)==0)
        {
            $_sql_promo = "INSERT INTO promotion (name_promo, date_time, note) VALUES ('".$name_promo."','".$date_time."','".$note."')";
            $result = DB::connection("mysql")->insert($_sql_promo);
        }
    }

    protected static function themDanhMucChuongTrinh($name_promotion,$name,$content,$cid_cate,$code)
    {
        $cid_cate = (!empty($cid_cate))? $cid_cate : 0;
        $_sql_promo = "INSERT INTO categories (name_promotion, name, cid_cate, content, code) VALUES ('".$name_promotion."','".$name."',".$cid_cate.",'".$content."','".$code."')";
        $result = DB::connection("mysql")->insert($_sql_promo);
    }

    protected static function themDanhMucCon($code,$name_promotion,$cid_child,$cid_categories,$name,$layout)
    {
        $_sql_promo = "INSERT INTO catechild (code, name_promotion, cid_child, cid_categories, name, layout) VALUES ('".$code."','".$name_promotion."','".$cid_child."','".$cid_categories."','".$name."','".$layout."')";
        $result = DB::connection("mysql")->insert($_sql_promo);
    }

    protected static function themChiTietSanPham($name_promotion,$sap_code,$cid_catechild='',$name='',$promo='',$price=0,$layout='',$attribute='',$discount=0,$image='',$link_pro='')
    {
        $_sql_promo = "INSERT INTO product_detail (name_promotion, sap_code, name, discount, price, image, link, attribute, promo, cid_catechild, layout) VALUES ('".$name_promotion."','".$sap_code."','".$name."','".$discount."','".$price."','".$image."','".$link_pro."','".$attribute."','".$promo."','".$cid_catechild."','".$layout."')";
        $result = DB::connection("mysql")->insert($_sql_promo);
    }

    protected static function capNhatChiTietSanPham($name_promotion,$id,$name='',$discount=0,$price=0,$image='',$link_pro='',$phantram=0,$attribute='',$price_sale=0)
    {
        $_capnhat_sanpham = "UPDATE product_detail SET name = '".$name."', discount = '".$discount."', price = '".$price."', image = '".$image."', link = '".$link_pro."', phan_tram = '".$phantram."', attribute = '".$attribute."', price_sale = '".$price_sale."' WHERE id like '".$id."'";
        header('Content-Type: text/html; charset=UTF-8');
        $result = DB::connection("mysql")->update($_capnhat_sanpham);
    }

    protected static function xoaBuocHai($name_promotion)
    {
        $_sql_product   = "DELETE FROM product_detail WHERE name_promotion like '".$name_promotion."'";
        $result = DB::connection("mysql")->delete($_sql_product);
        $_sql_catechild = "DELETE FROM catechild WHERE name_promotion like '".$name_promotion."'";
        $result = DB::connection("mysql")->delete($_sql_catechild);
        $_sql_cate      = "DELETE FROM categories WHERE name_promotion like '".$name_promotion."'";
        $result = DB::connection("mysql")->delete($_sql_cate);
    }

    protected static function xoaBuocBa($name_promotion)
    {
        $_sql_product = "DELETE FROM product_detail WHERE name_promotion like '".$name_promotion."'";
        $result = DB::connection("mysql")->delete($_sql_product);
    }

    protected static function layThongTinSanPham($sap_code)
    {
        $sqlpro="SELECT DISTINCT a.id AS myid,a.name,a.sap_code,a.cid_series,a.isprice,a.is_icon,a.is_model,a.is_price,a.is_flash_sale,a.is_sale,a.new_description, b.description, check_coupon(a.id,a.cid_cate,2) AS coupons, check_coupon(a.id,a.cid_cate,1) AS discountcoupons, b.discount, b.saleprice, b.is_promotion, b.id AS cid_res, c.name AS namecate 
            FROM 
                        ( pro_product AS a INNER JOIN pro_supplier_product AS b ON a.id = b.cid_product 
                        INNER JOIN pro_categories AS c ON c.id= a.cid_cate )
            WHERE a.sap_code = ".$sap_code." ORDER BY b.discount ASC";
        $data =  DB::connection("mysql2")->select($sqlpro);
        return $data;
    }

    protected static function themKhachHangDatMua($title,$name,$email,$phone,$product,$color = '')
    {
        $_sql_promo = "INSERT INTO y2019_order (title, name, email, phone, product, color) VALUES ('".$title."','".$name."','".$email."','".$phone."','".$product."','".$color."')";
        $result = DB::connection("mysql")->insert($_sql_promo);
        return 1;
    }

    protected static function getDanhSachChuongTrinh()
    {
        $_sql_promo = "SELECT * FROM promotion ORDER BY id DESC";
        $result = DB::connection("mysql")->select($_sql_promo);
        return $result;
    }

    protected static function updateActionStepThree($name_promotion)
    {
        $_update_promo = "UPDATE promotion SET action = 1 WHERE name_promo like '".$name_promotion."'";
        $result = DB::connection("mysql")->update($_update_promo);
    }

    protected static function updateMenuPromotion($name_promotion,$menu_categories = 0)
    {
        $_update_promo = "UPDATE promotion SET menu_categories = '".$menu_categories."' WHERE name_promo like '".$name_promotion."'";
        $result = DB::connection("mysql")->update($_update_promo);
    }

    protected static function updateUnactionStepThree($name_promotion)
    {
        $_update_promo = "UPDATE promotion SET action = 0 WHERE name_promo like '".$name_promotion."'";
        $result = DB::connection("mysql")->update($_update_promo);
    }

    protected static function getPromotion($name_promotion)
    {
        $_select_promo = "SELECT * FROM promotion WHERE name_promo like '".$name_promotion."' ORDER BY id ASC";
        $result = DB::connection("mysql")->select($_select_promo);
        return $result;
    }

    protected static function getAttributeProduct($id)
    {
        $_select_promo="SELECT val FROM aa_comp_attr WHERE cid_product=$id LIMIT 0,2";
        $result = DB::connection("mysql2")->select($_select_promo);
        return $result;
    }

    protected static function checkChuongTrinh($name_promotion)
    {
        $_sql_promo = "SELECT id FROM promotion WHERE action = 1 and date_time >= '".date("Y-m-d H:i:s")."' and name_promo like '".$name_promotion."' ORDER BY id DESC";
        $result = DB::connection("mysql")->select($_sql_promo);
        return count($result);
    }

    protected static function getSanphamChuongTrinhDacBiet($name_promotion)
    {
        $_sql_promo = "SELECT * FROM promotion_product WHERE name_promotion like '".$name_promotion."' ORDER BY id DESC";
        $result = DB::connection("mysql")->select($_sql_promo);
        return $result;
    }
    protected static function getSanphamChuongTrinhDacBietNew($name_promotion)
    {
        $_sql_promo = "SELECT * FROM promotion_product WHERE name_promotion like '".$name_promotion."' ORDER BY id ASC";
        $data = DB::connection("mysql")->select($_sql_promo);
        $result = array();
        foreach ($data as $element) {
            $result[$element->cid_cate][] = $element;
        }
        return $result;
    }
    protected static function getChiTietSanpham($cid_product)
    {
        $_sql_promo = "SELECT * FROM pro_product WHERE id like '".$cid_product."'";
        $result = DB::connection("mysql2")->select($_sql_promo);
        return $result[0];
    }
    protected static function getDanhMucChiTietSanpham($id)
    {
        $_sql_promo = "SELECT alias FROM pro_categories WHERE id like '".$id."'";
        $result = DB::connection("mysql2")->select($_sql_promo);
        return $result[0];
    }
}
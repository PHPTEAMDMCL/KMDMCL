@extends('admin.layout.masterAdmin')
@section('content')
<script type="text/javascript">
  function changeoder(srt)
  {
    var id = $(srt).data('id');
    var oder = $(srt).val();
    $.ajax({
      type:"POST",
      url:"/admin/uudaiacb/changeoder",
      data:{id:id,oder:oder,_token:'<?php echo csrf_token();?>'},
      success:function(rel)
      {
        alert('Vị trí đã cập nhật');
        $("#oder"+id).html(oder);
      }
    });
  }
  function thaychuongtrinh()
  {
    $("#chuongtrinh").submit();
  }
  function xoasanpham()
  {
    return confirm("Bạn có chắc xóa sản phẩm?");
  }
</script>
<div class="box span12">
  <form action="/admin/uudaiacb/thaychuongtrinh" id="chuongtrinh" name="" class="form-horizontal" method="post">  
    <div class="control-group">
      <label class="control-label" for="selectError">Chương trình</label>
      <input type='hidden' name='_token' value="<?php echo csrf_token();?>" />
      <div class="controls">
        <select onchange="thaychuongtrinh();" name="tenchuongtrinh" id="selectError" data-rel="chosen">
          <option value="giai-phong-hang-ton-giam-gia-lon" <?php echo ("giai-phong-hang-ton-giam-gia-lon" == $tenchuongtrinh)?  'selected="selected"':'' ?>>giải phóng hàng tồn giảm giá lớn</option>
          <option value="sale-hang-hieu-50" <?php echo ("sale-hang-hieu-50" == $tenchuongtrinh)?  'selected="selected"':'' ?>>sale hàng hiệu 50 %</option>
          <option value="qua-tang-samsung" <?php echo ("qua-tang-samsung" == $tenchuongtrinh)?  'selected="selected"':'' ?>>Quà tặng samsung</option>
          <option value="uu-dai-tv-lg" <?php echo ("uu-dai-tv-lg" == $tenchuongtrinh)?  'selected="selected"':'' ?>>Ưu đãi tivi LG</option>
          <option value="sinh-nhat-20-nam" <?php echo ("sinh-nhat-20-nam" == $tenchuongtrinh)?  'selected="selected"':'' ?>>Giải phóng hàng tồn</option>
          <option value="uu-dai-acb" <?php echo ("uu-dai-acb" == $tenchuongtrinh)?  'selected="selected"':'' ?>>Ưu đãi acb</option>
          <option value="thang-samsung-2019" <?php echo ("thang-samsung-2019" == $tenchuongtrinh)?  'selected="selected"':'' ?>>Tháng samsung 2019</option>
        </select>
      </div>
    </div>
  </form>
  <div class="box-header" data-original-title="">
    <h2><i class="halflings-icon white user"></i><span class="break"></span><?php echo $tenchuongtrinh;?></h2>
    <div class="box-icon">
      <a style="text-decoration: none;" title="Tạo trang đệm" href="/admin/uudaiacb/taotrangdem"><i style="color:white;" class="icon-plus"></i></a>
      <a style="text-decoration: none;" title="Cập nhật giá" href="/admin/uudaiacb/lists?change_value=1&nhom=1"><i style="color:white;" class="icon-money"></i></a>
      <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
      <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
    </div>
  </div>
  <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable">
      <thead>
        <tr>
          <th class="sorting_desc">STT</th>
          <th>Danh mục</th>
          <th>Sản phẩm</th>
          <th>Giá</th>
          <th>Phần trăm</th>
        </tr>
      </thead>   
      <tbody>
      <?php
      if(count($data_list)>0)
      {
      	foreach ($data_list as $ln) 
        {
          $ln = (array) $ln;
          $product_name = App\Model\Read\Product::where("id","LIKE",$ln['cid_product'])->first();
      ?>
      	<tr>
          <td><div style="display: none;" id="oder<?php echo $ln['id'];?>"><?php echo $ln['oder'];?></div><input onchange="changeoder(this)" data-id="<?php echo $ln['id'];?>" type="text" name="oder" style="width: 30px;" value="<?php echo $ln['oder'];?>" /></td>
          <td><?php echo $ln['cid_cate'];?></td>
          <td><?php echo $product_name['name'];?></td>
          <td><?php echo $ln['price'];?></td>
          <td><?php echo $ln['percent'];?></td>
          <td>
            <a class="btn btn-success" title="Cập nhật file" href="/admin/uudaiacb/edit/<?php echo $ln['id'];?>">
              <i class="icon-print"></i>  
            </a>
            <a class="btn btn-danger" href="/admin/uudaiacb/removed/<?php echo $ln['id'];?>?_token=<?php echo csrf_token();?>" onclick="return xoasanpham();" title="Xóa" href="#">
              <i class="icon-trash"></i>
            </a>
          </td>
        </tr>
      <?php		
      	}
      }
      ?>
      </tbody>
    </table>            
  </div>
</div>
@endsection
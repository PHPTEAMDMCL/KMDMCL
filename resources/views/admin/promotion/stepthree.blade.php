@extends('admin.layout.masterAdmin')
@section('content')
<style>
.form-horizontal .control-label
{
	width: 330px;
}
.form-horizontal .controls 
{
	padding-left: 155px;
}
.row-fluid .span12 
{
	width: auto;
}
.form-horizontal .form-actions {
    padding-left: 462px;
}
.box
{
	padding-bottom: 21px;
}
.promotiondmcl
{
	margin-left: 0px !important;
}
#content
{
	overflow: scroll;
}
</style>
<form action="/admin/promotion/stepthree/<?php echo $tenchuongtrinh;?>" name="" class="form-horizontal" method="post" enctype="multipart/form-data">
	<input type='hidden' name='_token' value="<?php echo csrf_token();?>" />
	<button type="submit" class="btn btn-primary">Qua bước cuối</button>
	<?php
	$_number = 1;
	foreach ($data as $key => $_data) {
	?>
	<div class="box span12 promotiondmcl">
		<div class="box-header" data-original-title="">
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>Thông tin sản phẩm danh mục <?php echo $key;?></h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
			</div>
		</div>
		<div class="box-content">
			<table class="table table-striped table-bordered bootstrap-datatable ">
		      <thead>
		        <tr>
		          <th>Tên sản phẩm (#KMDMCLTENSANPHAM)</th>
		          <th>Giá sản phẩm (#KMDMCLGIASANPHAM)</th>
		          <th>Giá khuyến mãi (#KMDMCLGIAKHUYENMAI)</th>
		          <th>Hình ảnh (#KMDMCLHINHSANPHAM)</th>
		          <th>Link (#KMDMCLLINKSANPHAM)</th>
		          <th>Attribute (#KMDMCLTHUOCTINH)</th>
		          <th>Phần trăm giảm (#KMDMCLKHUYENMAI)</th>
		        </tr>
		      </thead>   
		      <tbody>
		      <?php
		      foreach ($_data as $product) 
		      {
		      ?>
		        <tr>
		          <input type="hidden" name="id[]" value="<?php echo $product['id'];?>" />
		          <td><input type="" name="name[]" value="<?php echo $product['name'];?>"></td>
		          <td><input type="" name="discount[]" value="<?php echo $product['discount'];?>"></td>
		          <td><input type="" name="price[]" value="<?php echo $product['price'];?>"></td>
		          <td><input type="" name="image[]" value="<?php echo $product['image'];?>"></td>
		          <td><input type="" name="link_pro[]" value="<?php echo $product['link_pro'];?>"></td>
		          <td><input type="" name="attribute[]" value="<?php echo $product['attribute'];?>"></td>
		          <td><input type="" name="phantram[]" value="<?php echo $product['phantram'];?>"></td>
		        </tr>
		      <?php
		      }
		      ?>
		      </tbody>
		    </table> 
		</div>
	</div>
	<?php
	$_number++;
	}
	?>
</form>
@endsection
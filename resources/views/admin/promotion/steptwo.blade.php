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
	width: 95%;
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
textarea
{
	width: 438px;
}
</style>
<form action="/admin/promotion/steptwo/<?php echo $tenchuongtrinh;?>" name="" class="form-horizontal" method="post">
	<?php
	$number_cate 		= $data['number_cate'];
	$number_listproduct = $data['number_listproduct'];
	?>
	<div class="box span12 promotiondmcl">
		<div class="box-header" data-original-title="">
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>Thông tin chung</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
			</div>
		</div>
		<div class="box-content">
				<fieldset>
					<div class="control-group">
					  	<label class="control-label">Template tag danh mục: </label>
					  	<div class="controls">
					  		<textarea id="templatetagdanhmuc" name="templatetagdanhmuc" rows="3"></textarea>
				  			<input type='hidden' name='_token' value="<?php echo csrf_token();?>" />
					  	</div>
				  	</div>
				  	<div class="control-group">
					  	<label class="control-label">Template danh mục: </label>
					  	<div class="controls">
					  		<textarea id="templatedanhmuc" name="templatedanhmuc" rows="3"></textarea>
					  	</div>
				  	</div>
				  	<div class="control-group">
					  	<label class="control-label">Template sản phẩm: </label>
					  	<div class="controls">
					  		<textarea id="templatesanpham" name="templatesanpham" rows="3"></textarea>
					  	</div>
				  	</div>
				  	<div class="form-actions">
					  <button type="submit" class="btn btn-primary">Qua bước ba</button>
					</div>
				</fieldset>
		</div>
	</div>
	<?php
	for ($i=0; $i < $number_cate; $i++) { 
	?>
	<div class="box span12 promotiondmcl">
		<div class="box-header" data-original-title="">
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>Thông tin danh mục sản phẩm <?php echo $i+1;?></h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
			</div>
		</div>
		<div class="box-content">
				<fieldset>
				  	<div class="control-group">
					  	<label class="control-label">Tên danh mục : </label>
					  	<div class="controls">
					  		<input type="text" name="tendanhmuc<?php echo $i;?>" class="span8 typeahead" id="tendanhmuc<?php echo $i;?>">
					  	</div>
				  	</div>
				  	<div class="control-group">
					  	<label class="control-label">Mã danh mục : </label>
					  	<div class="controls">
					  		<input type="text" name="cid_cate<?php echo $i;?>" class="span8 typeahead" id="cid_cate<?php echo $i;?>">
					  	</div>
				  	</div>
				  	<div class="control-group">
					  	<label class="control-label">Template danh mục riêng: </label>
					  	<div class="controls">
					  		<textarea id="templatedanhmucrieng<?php echo $i;?>" name="templatedanhmucrieng<?php echo $i;?>" rows="5"></textarea>
					  	</div>
				  	</div>
				</fieldset>
		</div>
	</div>
	<?php
	}
	?>
	<?php
	for ($i=0; $i < $number_listproduct; $i++) { 
	?>
	<div class="box span12 promotiondmcl">
		<div class="box-header" data-original-title="">
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>Thông tin sản phẩm <?php echo $i+1;?></h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
			</div>
		</div>
		<div class="box-content">
				<fieldset>
				  	<div class="control-group">
					  	<label class="control-label">Danh sách sản phẩm : </label>
					  	<div class="controls">
					  		<textarea id="danhsachsanpham<?php echo $i;?>" name="danhsachsanpham<?php echo $i;?>" rows="3"></textarea>
					  	</div>
				  	</div>
				  	<div class="control-group">
					  	<label class="control-label">Template sản phẩm riêng: </label>
					  	<div class="controls">
					  		<textarea id="templatesanphamrieng<?php echo $i;?>" name="templatesanphamrieng<?php echo $i;?>" rows="3" cols="50"></textarea>
					  	</div>
				  	</div>
				</fieldset>
		</div>
	</div>
	<?php
	}
	?>
</form>
@endsection
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
<form action="/admin/promotion/updateproduct/<?php echo $tenchuongtrinh;?>" name="" class="form-horizontal" method="post">
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
					  		<textarea id="templatetagdanhmuc" name="templatetagdanhmuc" rows="3">
					  			<?php 
					  			if(!empty($data['promotion'][0]->menu_categories))
					  			{
					  				echo $data['promotion'][0]->menu_categories;
					  			}
					  			?>
					  		</textarea>
				  			<input type='hidden' name='_token' value="<?php echo csrf_token();?>" />
					  	</div>
				  	</div>
				  	<div class="form-actions">
					  <button type="submit" class="btn btn-primary">Cập nhật</button>
					</div>
				</fieldset>
		</div>
	</div>
	<?php
	if(count($data['list_cate'])>0)
	{
		$i=0;
		foreach ($data['list_cate'] as $value)
		{ 
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
					  		<input type="text" value="<?php echo $value->name;?>" name="tendanhmuc<?php echo $i;?>" class="span8 typeahead" id="tendanhmuc<?php echo $i;?>">
					  	</div>
				  	</div>
				  	<div class="control-group">
					  	<label class="control-label">Mã danh mục : </label>
					  	<div class="controls">
					  		<input type="text" value="<?php echo $value->cid_cate;?>" name="cid_cate<?php echo $i;?>" class="span8 typeahead" id="cid_cate<?php echo $i;?>">
					  	</div>
				  	</div>
				  	<div class="control-group">
					  	<label class="control-label">Template danh mục riêng: </label>
					  	<div class="controls">
					  		<textarea id="templatedanhmucrieng<?php echo $i;?>" name="templatedanhmucrieng<?php echo $i;?>" rows="3"><?php echo $value->content;?></textarea>
					  	</div>
				  	</div>
				</fieldset>
		</div>
	</div>
	<?php
			$i++;
		}
	}
	?>
	<?php
	if(count($data['list_product'])>0)
	{
		$i=0;
		foreach ($data['list_product'] as $value)
		{ 
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
					  		<textarea id="danhsachsanpham<?php echo $i;?>" name="danhsachsanpham<?php echo $i;?>" rows="3"><?php echo $value->sap_code;?></textarea>
					  	</div>
				  	</div>
				  	<div class="control-group">
					  	<label class="control-label">Template danh mục riêng: </label>
					  	<div class="controls">
					  		<textarea id="templatesanphamrieng<?php echo $i;?>" name="templatesanphamrieng<?php echo $i;?>" rows="3"><?php echo $value->note;?></textarea>
					  	</div>
				  	</div>
				</fieldset>
		</div>
	</div>
	<?php
			$i++;
		}
	}
	?>
</form>
@endsection
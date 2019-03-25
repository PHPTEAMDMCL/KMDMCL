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
</style>
<form action="/admin/promotion/stepfinish/<?php echo $tenchuongtrinh;?>" name="" class="form-horizontal" method="post" enctype="multipart/form-data">
	<input type='hidden' name='_token' value="<?php echo csrf_token();?>" />
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
				  	<div class="form-actions">
					  <button type="submit" class="btn btn-primary">Tạo Chương trình</button>
					</div>
				</fieldset>
		</div>
	</div>
</form>
@endsection
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
    padding-left: 500px;
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
<form action="/admin/uudaiacb/thaychuongtrinh" name="" class="form-horizontal" method="post">
	<div class="box span12 promotiondmcl">
		<div class="box-content">
			<fieldset>
				<div class="control-group">
					<label class="control-label" for="selectError">Chương trình</label>
					<div class="controls">
					  <select name="tenchuongtrinh" id="selectError" data-rel="chosen">
						<option value="uu-dai-acb">Ưu đãi acb</option>
						<option value="thang-samsung-2019">Tháng samsung 2019</option>
					  </select>
					</div>
				</div>
				<?php
				if(!empty(session('success')))
				{
					echo '<center><strong style="color:red">'.session('success').'</strong></center>';
				}
				?>
			  	<input type='hidden' name='_token' value="<?php echo csrf_token();?>" />
			  	<div class="form-actions">
				  <button type="submit" class="btn btn-primary">Thực hiện</button>
				</div>
			</fieldset>
		</div>
	</div>
</form>
@endsection
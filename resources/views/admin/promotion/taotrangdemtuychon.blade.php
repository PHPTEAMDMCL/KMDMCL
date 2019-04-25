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
<form action="/admin/promotion/taotrangdemtuychon" name="" class="form-horizontal" method="post">
	<div class="box span12 promotiondmcl">
		<div class="box-content">
			<fieldset>
				<div class="control-group">
				  	<label class="control-label">Link : </label>
				  	<div class="controls">
				  		<input type="text" name="link" class="span8 typeahead">
				  	</div>
			  	</div>
			  	<div class="control-group">
				  	<label class="control-label">Tên chương trình: </label>
				  	<div class="controls">
				  		<input type="text" name="tenchuongtrinh" class="span8 typeahead">
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
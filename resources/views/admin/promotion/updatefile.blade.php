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
    padding-left: 378px;
}
.box
{
	padding-bottom: 21px;
}
</style>
<form action="/admin/promotion/updatefile/<?php echo $tenchuongtrinh;?>" name="" class="form-horizontal" method="post" enctype="multipart/form-data">
	<div class="box span12">
		<div class="box-header" data-original-title="">
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>Cập nhật chương trình</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
			</div>
		</div>
		<div class="box-content">
				<fieldset>
					<input type='hidden' name='_token' value="<?php echo csrf_token();?>" />
				  	<div class="control-group">
					  	<label class="control-label">Thời gian kết thúc chương trình : </label>
					  	<div class="controls">
					  		<input type="text" autocomplete="off" name="date_time" class="input-xlarge datepicker" id="date_time">
					  	</div>
				  	</div>
				  	<div class="control-group hidden-phone">
						<label class="control-label">Ghi chú :</label>
						<div class="controls">
							<textarea class="cleditor" id="note" name="note" rows="3"></textarea>
						</div>
					</div>
				  	<div class="control-group">
					  	<label class="control-label">file html : </label>
					  	<input type="file" name="fuFileAttach" id="fuFileAttach" class="input-file uniform_on">
				  	</div>
				  	<div class="control-group">
					  	<label class="control-label">file css : </label>
					  	<input type="file" name="fuFileCss[]" id="fuFileCss" class="input-file uniform_on" webkitdirectory directory multiple>
				  	</div>
				  	<div class="control-group">
					  	<label class="control-label">file js : </label>
					  	<input type="file" name="fuFileJs[]" id="fuFileJs" class="input-file uniform_on" webkitdirectory directory multiple>
				  	</div>
				  	<div class="control-group">
					  <label class="control-label">file hình : </label>
					  <input type="file" name="fuFileImage[]" id="fuFileImage" class="input-file uniform_on" webkitdirectory directory multiple>
				  	</div>
				  	<div class="form-actions">
					  <button type="submit" class="btn btn-primary">Cập nhật</button>
					</div>
				</fieldset>
		</div>
	</div>
</form>
@endsection
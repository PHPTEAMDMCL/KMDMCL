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
					  	<option value="giai-phong-hang-ton-giam-gia-lon">
					  		giải phóng hàng tồn giảm giá lớn
					  	</option>
					  	<option value="galaxy-gia-soc-mung-vu-lan">Galaxy giá sốc mừng vu lan</option>
					  	<option value="dac-quyen-samsung-qled-8k">Đặc quyền samsung qled 8k</option>
					  	<option value="uu-dai-samsung-mung-ky-niem-50-nam">Mừng kỷ niệm 50 năm samsung ưu đãi khủng</option>
					  	<option value="lg-chao-mung-luot-khach-55tr">LG chào mừng lượt khách 55 triệu</option>
					  	<option value="giai-phong-hang-ton-lg">Giải phóng hàng tồn LG</option>
					  	<option value="tat-ca-deu-re">Tất cả đều rẻ</option>
					  	<option value="sale-hang-hieu-50">sale hàng hiệu 50 %</option>
					  	<option value="sinh-nhat-20-nam">Sinh Nhật Vàng 20 năm</option>
						<option value="uu-dai-acb">Ưu đãi acb</option>
						<option value="thang-samsung-2019">Tháng samsung 2019</option>
						<option value="qua-tang-samsung">Quà tặng samsung</option>
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
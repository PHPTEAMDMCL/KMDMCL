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
	?>
	<div class="box span12 promotiondmcl">
		<div class="box-header" data-original-title="">
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>Thông tin chung</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
				<a class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
			</div>
		</div>
		<div class="box-content">
				<fieldset>
					<div class="control-group">
					  	<label class="control-label">Template menu: </label>
					  	<div class="controls">
					  		<textarea id="templatetagdanhmuc" name="templatetagdanhmuc" rows="3"></textarea>
				  			<input type='hidden' name='_token' value="<?php echo csrf_token();?>" />
					  	</div>
				  	</div>
				  	<div class="control-group">
					  	<label class="control-label">Template chung của danh mục cha: </label>
					  	<div class="controls">
					  		<textarea id="templatechungdanhmuccha" name="templatechungdanhmuccha" rows="3"></textarea>
					  	</div>
				  	</div>
				  	<div class="form-actions">
					  <button type="submit" class="btn btn-primary">Qua bước ba</button>
					</div>
				</fieldset>
		</div>
	</div>
	<?php
	for ($i=1; $i <= $number_cate; $i++) { 
	?>
	<div class="box span12 promotiondmcl">
		<div class="box-header" data-original-title="">
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>Thông tin danh mục sản phẩm <?php echo $i;?></h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
				<a class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
			</div>
		</div>
		<div class="box-content">
			<fieldset>
			  	<div class="control-group">
				  	<label class="control-label">Tên danh mục cha : </label>
				  	<div class="controls">
				  		<input type="text" name="tendanhmuc<?php echo $i;?>" class="span8 typeahead" id="tendanhmuc<?php echo $i;?>">
				  	</div>
			  	</div>
			  	<div class="control-group">
				  	<label class="control-label">Mã danh mục cha : </label>
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
			  	<div class="control-group">
				  	<label class="control-label">Template chung danh mục con: </label>
				  	<div class="controls">
				  		<textarea id="templatechungdanhmuccon<?php echo $i;?>" name="templatechungdanhmuccon<?php echo $i;?>" rows="5"></textarea>
				  	</div>
			  	</div>
			  	<input type='hidden' name='Tong_danhmuccon<?php echo $i;?>' id='Tong_danhmuccon<?php echo $i;?>' value="0" />
			  	<div class="vungthem_danhmuccon">
				  	<div class="control-group" id="danhmuccon_goc<?php echo $i;?>0" value="0" style="display:none">
					  	<div class="box span12 promotiondmcl">
					  		<div class="box-header" data-original-title="">
								<h2><i class="halflings-icon white edit"></i><span class="break"></span class="ten-danh-muc"><strong class="sttdm">Thông tin danh mục con số 0</strong></h2>
								<div class="box-icon">
									<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
									<a class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
								</div>
							</div>
						  	<div class="box-content">
								<fieldset>
									<div class="control-group">
									  	<label class="control-label">Tên danh mục con : </label>
									  	<div class="controls">
									  		<input type="text" name="tendanhmuccon0" class="tendanhmuccon span8 typeahead">
									  	</div>
								  	</div>
								  	<div class="control-group">
									  	<label class="control-label">Mã danh mục con : </label>
									  	<div class="controls">
									  		<input type="text" name="madanhmuccon0" class="madanhmuccon span8 typeahead">
									  	</div>
								  	</div>
								  	<div class="control-group">
									  	<label class="control-label">Template riêng: </label>
									  	<div class="controls">
									  		<textarea name="templateriengdanhmuccon0" class="templateriengdanhmuccon" rows="5"></textarea>
									  	</div>
								  	</div>
								  	<div class="control-group">
									  	<label class="control-label">Template chung sản phẩm: </label>
									  	<div class="controls">
									  		<textarea name="templatechungsanpham0" class="templatechungsanpham" rows="5"></textarea>
									  	</div>
								  	</div>
								  	<input type='hidden' name='Tong_sanpham<?php echo $i;?>' class='Tong_sanpham' value="0" />
								  	<div class="vungthem_sanpham">
									  	<div class="sanpham_goc control-group" id="sanpham_goc" value="0" style="display:none">
										  	<div class="box span12 promotiondmcl">
										  		<div class="box-header" data-original-title="">
													<h2><i class="halflings-icon white edit"></i><span class="break"></span class="ten-danh-muc"><strong class="sttsp">Thông tin sản phẩm số 0</strong></h2>
													<div class="box-icon">
														<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
														<a class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
													</div>
												</div>
											  	<div class="box-content">
													<fieldset>
														<div class="control-group">
														  	<label class="control-label">Tên sản phẩm : </label>
														  	<div class="controls">
														  		<input type="text" name="tensanpham0" class="tensanpham span8 typeahead">
														  	</div>
													  	</div>
													  	<div class="control-group">
														  	<label class="control-label">Mã sản phẩm con : </label>
														  	<div class="controls">
														  		<input type="text" name="masanpham0" class="masanpham span8 typeahead" >
														  	</div>
													  	</div>
													  	<div class="control-group">
														  	<label class="control-label">Giá khuyến mãi : </label>
														  	<div class="controls">
														  		<input type="text" name="giakhuyenmaisanpham0" class="giakhuyenmaisanpham span8 typeahead" >
														  	</div>
													  	</div>
													  	<div class="control-group">
														  	<label class="control-label">Ghi chú: </label>
														  	<div class="controls">
														  		<textarea name="ghichusanpham0" class="ghichusanpham" rows="5"></textarea>
														  	</div>
													  	</div>
													  	<div class="control-group">
														  	<label class="control-label">Template riêng: </label>
														  	<div class="controls">
														  		<textarea name="templateriengsanpham0" class="templateriengsanpham" rows="5"></textarea>
														  	</div>
													  	</div>
													</fieldset>
												</div>
											</div>
										</div>
									</div>
								  	<div class="form-actions">
										<a onclick="themsanpham(this)" name="0" class="themsanpham btn btn-primary danhmuccha">Thêm sản phẩm</a>
									</div>
								</fieldset>
							</div>
						</div>
					</div>
				</div>
			  	<div class="form-actions">
					<a onclick="themdanhmuccon(<?php echo $i;?>)" class="btn btn-primary danhmuccha">Thêm danh muc con</a>
				</div>
			</fieldset>
		</div>
	</div>
	<?php
	}
	?>
</form>
<script type="text/javascript">
	function themdanhmuccon(stt)
	{
		var div_dmc = $('div[id^="danhmuccon_goc'+stt+'0"]');
		so_dmc = parseInt($("#Tong_danhmuccon"+stt).val()) + 1;
		var klon_dmc = div_dmc.clone().prop('id', 'danhmuccon_goc'+stt+so_dmc);
		klon_dmc.css('display','');		
		klon_dmc.attr("value", so_dmc);
		klon_dmc.find(".tendanhmuccon").prop('name', 'tendanhmuccon'+stt+so_dmc);
		klon_dmc.find(".madanhmuccon").prop('name', 'madanhmuccon'+stt+so_dmc);		
		klon_dmc.find(".templatechungsanpham").prop('name', 'templatechungsanpham'+stt+so_dmc);
		klon_dmc.find(".templateriengdanhmuccon").prop('name', 'templateriengdanhmuccon'+stt+so_dmc);
		klon_dmc.find(".sttdm").html('Thông tin danh mục con số ' + so_dmc);
		klon_dmc.find(".themsanpham").prop('name', stt+''+so_dmc);
		klon_dmc.find(".Tong_sanpham").prop('name', 'Tong_sanpham' + stt + so_dmc);
		klon_dmc.find(".Tong_sanpham").prop('id', 'Tong_sanpham' + stt + so_dmc);
		klon_dmc.find(".sanpham_goc").prop('id', 'sanpham_goc' + stt + so_dmc);
		klon_dmc.find(".vungthem_sanpham").prop('class', 'vungthem_sanpham' + stt + so_dmc);
		$(".vungthem_danhmuccon").append(klon_dmc);
		$("#Tong_danhmuccon"+stt).val(so_dmc);
	}

	function themsanpham(root)
	{
		var stt = $(root).attr('name');
		var div_sp = $('div[id^="sanpham_goc'+stt+'"]:last');
		so_sp = parseInt($("#Tong_sanpham"+stt).val()) + 1;
		var klon_sp = div_sp.clone().prop('id', 'sanpham_goc'+so_sp);
		klon_sp.css('display','');		
		klon_sp.find(".tensanpham").prop('name', 'tensanpham'+stt+so_sp);
		klon_sp.find(".masanpham").prop('name', 'masanpham'+stt+so_sp);		
		klon_sp.find(".giakhuyenmaisanpham").prop('name', 'giakhuyenmaisanpham'+stt+so_sp);
		klon_sp.find(".ghichusanpham").prop('name', 'ghichusanpham'+stt+so_sp);
		klon_sp.find(".templateriengsanpham").prop('name', 'templateriengsanpham'+stt+so_sp);
		klon_sp.find(".sttsp").html('Thông tin sản phẩm số ' + so_sp);
		$(".vungthem_sanpham"+stt).append(klon_sp);
		$("#Tong_sanpham"+stt).val(so_sp);
	}
</script>
@endsection
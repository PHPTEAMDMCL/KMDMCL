@extends('admin.layout.masterAdmin')
@section('content')
ul.breadcrumb
  li
    i.icon-home
    a(href='/') Trang chủ
    i.icon-angle-right
  li
    a(href='/admin/samsungfour/lists') Danh sách sản phẩm 

.row-fluid
  .span12
   
    @if(session('success'))
    .box-content.alerts
      .alert.alert-success
      	button.close(type='button', data-dismiss='alert') ×
  		strong {{session('success')}}
    @endif
.row-fluid.sortable
  .box.span12
    .box-header
      h2
        i.halflings-icon.white.edit
        span.break
        | Nhập thông tin chương trình
      
    .box-content
			{!!Form::open(['method'=>'post'])!!}
	        fieldset
	        	.control-group
					label.control-lable Chọn danh mục
	        		{!!Form::text("cid_cate",$data['cid_cate'],[])!!}

				.control-group
	        		label.control-lable Nhập mã SAP của  sản phẩm 
	        		{!!Form::text("cid_product",$data->Product()['sap_code'],['autocomplete'=>'off'])!!}
	        	
	        		@if($errors->has("cid_product"))     		
	        		p(style='color:red') 
	        			| {{$errors->first("cid_product")}}
	        		@endif	 
	        	.control-group
	        		label.control-lable Giá khuyến mãi
	        		{!!Form::text("price",$data['price'],[])!!}
	        	.control-group
	        		label.control-lable Phần trăm giảm 
	        		{!!Form::text("percent",$data['percent'],[])!!}	 
	        	.control-group
	        		label.control-lable Ghi chú
	        		{!!Form::textarea("note",$data['note'],[])!!}    
	        	.control-group
	        		label.control-lable Thứ tự
	        		{!!Form::text("oder",$data['oder'],[])!!}   
	        	.control-group
	        		label.control-lable icon online
		        		@if($data['is_red_day']==1)
	        			label.radio
	                        input#optionsRadios1(type='radio', name='is_red_day', value='1' checked)
	                        | Không kích hoạt
	                    label.radio
	                      	input#optionsRadios2(type='radio', name='is_red_day', value='4')
	                      	| Kích hoạt
	                    @else
	                	label.radio
	                        input#optionsRadios1(type='radio', name='is_red_day', value='1')
	                        | Không kích hoạt
	                    label.radio
	                      	input#optionsRadios2(type='radio', name='is_red_day', value='4' checked)
	                      	| Kích hoạt
	                    @endif
	        	.control-group
	        		img(src='https://dienmaycholon.vn/public/picture/tmp/product_'.$data->Product()['id'].'_220_220.jpg')
	        		p {{$data->Product()['name']}}
				.form-actions
					button.btn.btn-primary(type='submit') Save changes
@endsection
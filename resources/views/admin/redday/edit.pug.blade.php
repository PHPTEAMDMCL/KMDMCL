@extends('admin.layout.masterAdmin')
@section('content')
ul.breadcrumb
  li
    i.icon-home
    a(href='/') Trang chủ
    i.icon-angle-right
  li
    a(href='/admin/redday/lists') Danh sách REDDAY 

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
	        		{!!Form::select("cid_cate",$cid_cate, (int)$data->Cate()['id'],[])!!}
	        		@if($errors->has("cid_cate"))
	        		p(style='color:red') 
	        				| {{$errors->first("cid_cate")}}
	        		@endif

				.control-group
	        		label.control-lable Nhập mã SAP của  sản phẩm 
	        		{!!Form::text("cid_product",$data->Product()['sap_code'],['autocomplete'=>'off'])!!}
	        	
	        		@if($errors->has("cid_product"))     		
	        		p(style='color:red') 
	        			| {{$errors->first("cid_product")}}
	        		@endif	 
	        	.control-group
	        		label.control-lable Giá Firday
	        		{!!Form::text("price",$data['price'],[])!!}
	        		p Khi bạn nhập giá trị này, sản phẩm sẽ nằm trên mục "FIRE FRIDAY HÔM NAY "
	        	.control-group
	        		label.control-lable Phần trăm giảm 
	        		{!!Form::text("percent",$data['percent'],[])!!}	        
	        	.control-group
	        		img(src='https://dienmaycholon.vn/public/picture/tmp/product_'.$data->Product()['id'].'_220_220.jpg')
	        		p {{$data->Product()['name']}}
				.form-actions
					button.btn.btn-primary(type='submit') Save changes
@endsection
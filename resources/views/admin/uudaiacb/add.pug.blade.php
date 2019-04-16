@extends('admin.layout.masterAdmin')
@section('content')
ul.breadcrumb
  li
    i.icon-home
    a(href='/') Trang chủ
    i.icon-angle-right
  li
    a(href='#') Thêm mới ưu đãi abc 

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
	        		{!!Form::text("cid_cate",null,[])!!}
				.control-group
	        		label.control-lable Nhập mã SAP của  sản phẩm 
	        		{!!Form::text("cid_product",null,['autocomplete'=>'off'])!!}
	        	
	        		@if($errors->has("cid_product"))     		
	        		p(style='color:red') 
	        			| {{$errors->first("cid_product")}}
	        		@endif	 
	        	.control-group
	        		label.control-lable Giá khuyến mãi
	        		{!!Form::text("price",null,[])!!}
	        		        
	        	.control-group
	        		label.control-lable Phần trăm giảm 
	        		{!!Form::text("percent",null,[])!!}
				.form-actions
					button.btn.btn-primary(type='submit') Save changes
@endsection
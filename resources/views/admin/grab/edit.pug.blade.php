@extends('admin.layout.masterAdmin')
@section('content')
ul.breadcrumb
  li
    i.icon-home
    a(href='/') Trang chủ
    i.icon-angle-right
  li
    a(href='/admin/grab/lists') Danh sách sản phẩm GRAB

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
			{!!Form::open(['method'=>'post','files'=>true])!!}
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
	        		img(src='https://dienmaycholon.vn/public/picture/tmp/product_'.$data->Product()['id'].'_220_220.jpg')
	        		p {{$data->Product()['name']}}
	        	.control-group
					label.control-lable Chọn danh mục
	        		{!!Form::select("cid_promotion",$cid_promotion, (int)$data->Promotion()['id'],[])!!}
	        		@if($errors->has("cid_promotion"))
	        		p(style='color:red') 
	        				| {{$errors->first("cid_promotion")}}
	        		@endif
	        		img(src='/upload/promotion/'.$data->Promotion()['image'])
				.form-actions
					button.btn.btn-primary(type='submit') Save changes
@endsection
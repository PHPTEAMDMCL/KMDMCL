@extends('admin.layout.masterAdmin')
@section('content')
ul.breadcrumb
  li
    i.icon-home
    a(href='/') Trang chủ
    i.icon-angle-right
  li
    a(href='/admin/techcombank/lists') Danh sách Techcombank 

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
					label.control-lable Chọn Voucher
	        		select(name='idvoucher')
	        			@if($data['idvoucher']==1)
	        			option(value='1' selected) 300k	
	        			option(value='2') 500k
	        			option(value='3') 1 Triệu        			
	        			option(value='4') 1.5 Triệu
	        			option(value='5') 2 Triệu
	        			@endif
	        			@if($data['idvoucher']==2)
	        			option(value='1') 300k	
	        			option(value='2' selected) 500k
	        			option(value='3') 1 Triệu        			
	        			option(value='4') 1.5 Triệu
	        			option(value='5') 2 Triệu
	        			@endif
	        			@if($data['idvoucher']==3)
	        			option(value='1') 300k	
	        			option(value='2') 500k
	        			option(value='3' selected) 1 Triệu        			
	        			option(value='4') 1.5 Triệu
	        			option(value='5') 2 Triệu
	        			@endif
	        			@if($data['idvoucher']==4)
	        			option(value='1') 300k	
	        			option(value='2') 500k
	        			option(value='3') 1 Triệu        			
	        			option(value='4' selected) 1.5 Triệu
	        			option(value='5') 2 Triệu
	        			@endif
	        			@if($data['idvoucher']==5)
	        			option(value='1') 300k	
	        			option(value='2') 500k
	        			option(value='3') 1 Triệu        			
	        			option(value='4') 1.5 Triệu
	        			option(value='5' selected) 2 Triệu
	        			@endif
	        		@if($errors->has("idvoucher"))
	        		p(style='color:red') 
	        				| {{$errors->first("idvoucher")}}
	        		@endif
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
	        		label.control-lable Chọn hình quà tặng
	        		{!! Form::file('picture',['class'=>'load_banner form-control is-invalid','accept'=>'image/*','id'=>'banner_name']) !!}
	        		br
	        		img(src='/upload/samsung/'+$data['image'] width='100')
				.form-actions
					button.btn.btn-primary(type='submit') Save changes
@endsection
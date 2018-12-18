@extends('admin.layout.masterAdmin')
@section('content')
ul.breadcrumb
  li
    i.icon-home
    a(href='/') Trang chủ
    i.icon-angle-right
  li
    a(href='#') Thêm mới Khuyến mãi

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
	        		label.control-lable Tên quà tặng 
	        		{!!Form::text("name",null,['autocomplete'=>'off'])!!}
	        	
	        		@if($errors->has("name"))     		
	        		p(style='color:red') 
	        			| {{$errors->first("name")}}
	        		@endif	 
	        	.control-group
	        		label.control-lable Chọn hình quà tặng
	        		{!! Form::file('picture',['accept'=>'image/*','id'=>'banner_name']) !!}
				.form-actions
					button.btn.btn-primary(type='submit') Save changes

@endsection
   	

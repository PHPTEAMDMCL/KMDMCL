@extends('admin.layout.masterAdmin')
@section('title')
| {{$title}}
@endsection
@section('content')
ul.breadcrumb
  li
    i.icon-home
    a(href='index.html') Trang chủ
    i.icon-angle-right
  li
    a(href='#') Thêm chương trình Landing Page

.row-fluid
  .span12
    @if($errors->has('name'))
    .box-content.alerts
      .alert.alert-error
      	button.close(type='button', data-dismiss='alert') ×
  		strong {{$errors->first("name")}}
    @endif
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
      form.form-horizontal(method='POST', action='/admin/landing/addlivepost')
        fieldset
          .control-group
            label.control-label(for='focusedInput') Tên chương trình
            .controls
              input#focusedInput.input-xlarge.focused(type='text', name='name', placeholder='Tên chương trình')
              input(type='hidden' value!=csrf_token() name='_token')
          .control-group
          	label.control-label Trạng thái
          	.controls
          	  label.radio
          	  	input#optionsRadios1(type='radio', name='status', value='0')
          	  	| Không kích hoạt
          	  label.radio
          	  	input#optionsRadios2(type='radio', name='status', value='1' checked='')
          	  	| Kích hoạt
          .form-actions
            button.btn.btn-primary(type='submit') Save changes
@endsection
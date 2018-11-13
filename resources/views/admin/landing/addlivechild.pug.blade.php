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
    a(href='#') Thêm chương trình con Landing Page

.row-fluid
  .span12
    @if($errors->has('title') || $errors->has('cid_live'))
    .box-content.alerts
      .alert.alert-error
      	button.close(type='button', data-dismiss='alert') ×
  		strong {{$errors->first("title")}} . {{$errors->first('cid_live')}}  
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
        | Nhập thông tin chương trình con
      
    .box-content
      form.form-horizontal(method='POST', action='/admin/landing/addlivechildpost')
        fieldset
          .control-group
            label.control-label(for='') Chương trình
            .controls
              select(name='cid_live')
                option(value='') Chọn
                @foreach($getlive as $sl)
                option(value=$sl['name']) {{$sl['name']}}
                @endforeach
          .control-group
            label.control-label(for='focusedInput') Tiêu đề
            .controls
              input#focusedInput.input-xlarge.focused(type='text', name='title', placeholder='Tiêu đề')
              input(type='hidden' value!=csrf_token() name='_token')
          .control-group
            .show-element
          .control-group
            .controls
          	  a.btn.btn-small.btn-success#btn-add Thêm Article
          .form-actions
            button.btn.btn-primary(type='submit') Save changes
script(src='/admin/js/main.js')

@endsection
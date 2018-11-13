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

.row-fluid.sortable
  .box.span12
    .box-header
      h2
        i.halflings-icon.white.edit
        span.break
        | Nhập thông tin chương trình con
      
    .box-content
      form.form-horizontal(method='POST', action='/admin/landing/editlivechildpost/'+$live['id'])
        fieldset
          .control-group
            label.control-label(for='') Chương trình
            .controls
              select(name='cid_live')
                option(value=$live['cid_live'] ) {{$live['cid_live']}}
          .control-group
            label.control-label(for='focusedInput') Tiêu đề
            .controls
              input#focusedInput.input-xlarge.focused(type='text', name='title', placeholder='Tiêu đề' value=$live['title'])
              input(type='hidden' value!=csrf_token() name='_token')
          .control-group
            @if($gift != 'null')
            @foreach($gift as $v)
            label.control-label(for='focusedInput') Thông tin
            .controls
              input#focusedInput(type='text', name='sap[]', placeholder='Mã Sap' value=$v['sap'])
              input#focusedInput(type='text', name='price[]', placeholder='Gía', style='margin:5px' value=$v['price'])
              input#focusedInput(type='text', name='text[]', placeholder='Mô tả' value=$v['text'])
              a.btn.btn-danger#delete1(href='/admin/landing/removegift/'+$v['id'] title='Xóa' style='margin:5px')
                    i.halflings-icon.white.trash
            @endforeach
            @endif
          .show-element
            
          .control-group
            .controls
          	  a.btn.btn-small.btn-success#btn-add Thêm Article
          .form-actions
            button.btn.btn-primary(type='submit') Save changes
script(src='/admin/js/main.js')
script.
   $(document).ready(function(){
   $("#delete1").click(function(){
   if(confirm("Bạn muốn tiếp tục?")){
   $.get($(this).attr("href"));
   $(this).parent().parent().remove();
   }
   return false;
   });
   });

@endsection
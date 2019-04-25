@extends('admin.layout.masterAdmin')
@section('content')
ul.breadcrumb
  li
    i.icon-home
    a(href='/') Trang chủ
    i.icon-angle-right
  li
    a(href='#') Danh sách Sản phẩm chạy
a.btn.btn-primary(href='/admin/uudaiacb/lists?change_value=1&nhom=1' style='float:right;margin-bottom:5px') Update Price
a.btn.btn-primary(href='/admin/uudaiacb/taotrangdem' style='float:right;margin-bottom:5px') Tạo trang đệm
.row-fluid.sortable
  .box.span12
    .box-header(data-original-title='')
      h2
        i.halflings-icon.white.user
        span.break
        | Danh sách chương trình (  Tổng ( {{$data_list->total() }}))
     
    .box-content
      table.table.table-striped.table-bordered.bootstrap-datatable.datatable
        thead
          tr
            th ID 
            th Danh mục 
            th Sản phẩm 
            th Giá 
            th Phần trăm 
            th Tuỳ chọn 
            
        tbody
          @if(count($data_list )>0)
          @foreach($data_list as $ln)
          tr
            td.center {{$ln['id']}}
            td.center {{$ln['cid_cate']}}
           	td.center  {{$ln->Product()['name']}}
            td.center {{$ln['price']}}  
            td.center {{$ln['percent']}}  
            td.center 
            	a.btn.btn-small.btn-primary(href="/admin/uudaiacb/edit/"+$ln['id']) EDIT 
            	p
            	a.click_remove.btn.btn-small.btn-success(href="/admin/uudaiacb/removed/"+$ln['id']+"?_token="+csrf_token()) REMOVED 
          @endforeach
          @endif
  nav
        {!!$data_list->render()!!}
script(src='/admin/js/main.js')
script.
	$(".click_remove").click(function(){
		if(confirm("Bạn muốn xoá ? ")){
			$.get($(this).attr("href"),function(){

			});
			$(this).parent().parent().remove();
			
		}
		return false;
	});
@endsection
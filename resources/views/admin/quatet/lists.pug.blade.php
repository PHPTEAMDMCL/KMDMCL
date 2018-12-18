@extends('admin.layout.masterAdmin')
@section('content')
ul.breadcrumb
  li
    i.icon-home
    a(href='/') Trang chủ
    i.icon-angle-right
  li
    a(href='#') Danh sách Sản phẩm Quà tết linh đình
  li(style='float:right')
    a(href='/2018/12/qua-tet-linh-dinh' style='color:red' target='_blank') Xem trang
a.btn.btn-primary(href='/admin/quatet/lists?change_value=1&nhom=1' style='float:right;margin-bottom:5px') Update Price
.row-fluid.sortable 
  .box.span12
    .box-header(data-original-title='')
      h2
        i.halflings-icon.white.user
        span.break
        | Danh sách chương trình Quà tết(  Tổng : {{count($data_list)}} )
     
    .box-content
      table.table.table-striped.table-bordered.bootstrap-datatable.datatable
        thead
          tr
            th ID 
            th Danh mục
            th Sản phẩm 
            th Gía thị trường
            th Gía bán
            th Quà tặng
            th Mở rộng
            th Tuỳ chọn 
            
        tbody
          @if(count($data_list )>0)
          @foreach($data_list as $ln)
          tr
            td.center {{$ln['id']}}
            td.center {{$ln->Cate()['name']}}
           
           	td.center {{$ln->Product()['name']}}
            td.center {{number_format($ln['saleprice'])}}
            td.center {{number_format($ln['discount'])}}
            td.center {{$ln->Promotion()['name']}}
            td.cente  {{$ln['extension']}}
            td.center 
            	a.btn.btn-small.btn-primary(href="/admin/quatet/edit/"+$ln['id']) EDIT 
            	p
            	a.click_remove.btn.btn-small.btn-success(href="/admin/quatet/removed/"+$ln['id']+"?_token="+csrf_token()) REMOVED 
          @endforeach
          @endif
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
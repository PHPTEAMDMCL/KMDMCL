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
    a(href='#') Danh sách chương trình Landing Page

.row-fluid.sortable
  .box.span12
    .box-header(data-original-title='')
      h2
        i.halflings-icon.white.user
        span.break
        | Danh sách chương trình
      .box-icon
        a.btn-setting(href='#')
          i.halflings-icon.white.wrench
        a.btn-minimize(href='#')
          i.halflings-icon.white.chevron-up
        a.btn-close(href='#')
          i.halflings-icon.white.remove
    .box-content
      table.table.table-striped.table-bordered.bootstrap-datatable.datatable
        thead
          tr
            th STT
            th Tên chương trình
            th Options
            th Phần tử con
            
        tbody
          @if(count($xx)>0)
          @foreach($xx as $lv)
          tr
            td.center {{$lv['id']}}
            td.center {{$lv['name']}}
            td.center
              a.btn.btn-info(href='/admin/landing/editlive/'+$lv['id'] title='Sửa')
                i.halflings-icon.white.edit

            td.center
              table.table.table-striped.table-bordered.bootstrap-datatable.datatable
                tr
                  th Tên 
                  th Tùy chọn
                @foreach($lv['child'] as $v)
                tr
                  td.center {{$v['title']}}
                  td.center
                    a.btn.btn-info(href='/admin/landing/editlivechild/'+$v['id'] title='Sửa' style='margin:5px')
                      i.halflings-icon.white.edit
                    a.btn.btn-danger#delete(href='/admin/landing/removelivechild/'+$v['id'] title='Xóa')
                      i.halflings-icon.white.trash
                @endforeach
            
                
          @endforeach
          @endif
script(src='/admin/js/main.js')

@endsection
@extends('admin.layout.masterAdmin')
@section('content')
<div class="box span12">
  <div class="box-header" data-original-title="">
    <h2><i class="halflings-icon white user"></i><span class="break"></span>Members</h2>
    <div class="box-icon">
      <a href="/admin/promotion/stepone"><i class="icon-plus"></i></a>
      <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
      <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
    </div>
  </div>
  <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable">
      <thead>
        <tr>
          <th class="sorting_desc">Stt</th>
          <th>Tên chương trình</th>
          <th>Ngày hết hạn</th>
          <th>Trang thái</th>
          <th>Thao tác</th>
        </tr>
      </thead>   
      <tbody>
      <?php
      foreach ($datas as $data) 
      {
        $newdate = date('d-m-Y', strtotime($data->date_time));
        if($data->action == 1)
        {
          $_label_action = 'success';
          $_text_action  = 'kích hoạt';
        }
        else
        {
          $_label_action = 'important';
          $_text_action  = 'không kích hoạt';
        }
      ?>
        <tr>
          <td><?php echo $data->id;?></td>
          <td><a target="_blank" href="/chuongtrinh/<?php echo $data->name_promo;?>"><?php echo $data->name_promo;?></a></td>
          <td class="center"><?php echo $newdate;?></td>
          <td class="center">
            <span style="width: 104px;" onclick="changeaction(this,'<?php echo $data->name_promo;?>')" class="label label-<?php echo $_label_action;?>"><?php echo $_text_action;?></span>
          </td>
          <td class="center">
            <a class="btn btn-success" title="Cập nhật file" href="/admin/promotion/updatefile/<?php echo $data->name_promo;?>">
              <i class="icon-print"></i>  
            </a>
            <a class="btn btn-info" title="Cập nhật danh mục và sản phẩm" href="/admin/promotion/updateproduct/<?php echo $data->name_promo;?>">
              <i class="icon-cogs"></i>  
            </a>
            <a class="btn btn-warning" title="Cập nhật chi tiết sản phẩm" href="/admin/promotion/stepthree/<?php echo $data->name_promo;?>">
              <i class="icon-edit"></i>  
            </a>
            <a class="btn btn-danger" onclick="updatepromotion('<?php echo $data->name_promo;?>')" title="Cập nhật số tiền sản phẩm" href="#">
              <i class="icon-money"></i> 
            </a>
          </td>
        </tr>
      <?php
      }
      ?>
      </tbody>
    </table>            
  </div>
</div>
<script type="text/javascript">
  function changeaction(ref,tenchuongtrinh) {
    $.ajax({
      type:"POST",
      url:"/admin/promotion/updateaction",
      data:{namelandingpage:tenchuongtrinh,_token:'<?php echo csrf_token();?>'},
      success:function(rel){
        $(ref).parent().html(rel);
      }
    });
  }
  function updatepromotion(tenchuongtrinh) {
    $.ajax({
      type:"POST",
      url:"/admin/promotion/updatepromotion",
      data:{namelandingpage:tenchuongtrinh,_token:'<?php echo csrf_token();?>'},
      success:function(rel){
        alert('Cập nhật thành công!');
      }
    });
  }
</script>
@endsection
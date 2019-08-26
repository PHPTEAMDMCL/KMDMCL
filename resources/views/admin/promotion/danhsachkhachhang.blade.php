@extends('admin.layout.masterAdmin')
@section('content')
<div class="box span12" style="min-height: 500px;">
  <div class="box-header" data-original-title="">
    <h2><i class="halflings-icon white user"></i><span class="break"></span>Danh sách khách hàng</h2>
    <div class="box-icon">
    </div>
  </div>
  <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable">
      <thead>
        <tr>
          <th class="sorting_desc">Tên</th>
          <th>Số điện thoại</th>
          <th>Email</th>
          <th>Sản phẩm</th>
          <th>Màu sắc</th>
          <th>Thời gian</th>
          <th>Tuỳ chọn</th>
        </tr>
      </thead>   
      <tbody>
      <?php
      if(count($data_list)>0)
      {
      	foreach ($data_list as $ln) 
        {
          $ln = (array) $ln;
          $date_bill= $ln['created_at'];                            
          $date_bill = strtotime($date_bill);
          $date_bill = date('H:i d-m-Y', $date_bill);
      ?>
      	<tr>
          <td><?php echo $ln['name'];?></td>
          <td><?php echo $ln['phone'];?></td>
          <td><?php echo $ln['email'];?></td>
          <td><?php echo $ln['product'];?></td>
          <td><?php echo $ln['color'];?></td>
          <td><?php echo $date_bill;?></td>
          <td>
            <?php
            if($ln['status'] == 0)
            {
            ?>
            <a class="btn btn-success" title="Cập nhật" onclick="updatekhachhang(this,<?php echo $ln['id'];?>)">
              <i class="icon-print"></i>  
            </a>
            <?php
            } 
            ?>
          </td>
        </tr>
      <?php		
      	}
      }
      ?>
      </tbody>
    </table>            
  </div>
</div>
<script type="text/javascript">
  function updatekhachhang(ref,id) {
    $.ajax({
      type:"POST",
      url:"/admin/promotion/updatedanhsachkhachhang",
      data:{id:id,_token:'<?php echo csrf_token();?>'},
      success:function(rel){
        $(ref).parent().html(rel);
      }
    });
  }
</script>
@endsection
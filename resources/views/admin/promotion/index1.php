<form action="/admin/promotion/index" name="" method="post" enctype="multipart/form-data">
  <input type='hidden' name='_token' value="<?php echo csrf_token();?>" />
  <label>Tên chương trình : </label>
  <input type="text" name="namelandingpage" id="namelandingpage"><br/><br/>
  <label>Thời gian chương trình : </label>
  <input type="text" name="date_time" id="date_time"><br/><br/>
  <label>cate1 : </label>
  <textarea name="cate1" id="cate1"></textarea><br/><br/>
  <label>productcate1 : </label>
  <input type="text" name="productcate1" id="productcate1"><br/><br/>
  <label>cate2 : </label>
  <textarea name="cate2" id="cate2"></textarea><br/><br/>
  <label>productcate2 : </label>
  <input type="text" name="productcate2" id="productcate2"><br/><br/>
  <label>cate3 : </label>
  <textarea name="cate3" id="cate3"></textarea><br/><br/>
  <label>productcate3 : </label>
  <input type="text" name="productcate3" id="productcate3"><br/><br/>
  <label>listproduct : </label>
  <textarea name="listproduct" id="listproduct"></textarea><br/><br/>
  <label>file html : </label>
  <input type="file" name="fuFileAttach" id="fuFileAttach" class="file_upload"><br/><br/>
  <label>file css : </label>
  <input type="file" name="fuFileCss[]" id="fuFileCss" class="file_upload" webkitdirectory directory multiple><br/><br/>
  <label>file js : </label>
  <input type="file" name="fuFileJs[]" id="fuFileJs" class="file_upload" webkitdirectory directory multiple><br/><br/>
  <label>file hình : </label>
  <input type="file" name="fuFileImage[]" id="fuFileImage" class="file_upload" webkitdirectory directory multiple><br/><br/>
  <button type="submit" class="btn_coupon">Enter</button>
</form>
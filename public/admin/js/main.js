$(document).ready(function(){
   $('#btn-add').unbind().click(function(){

	var html = '<div class="control-group"><label class="control-label" for="focusedInput">Thông tin</label><div class="controls"><input id="focusedInput" type="text" name="sap[]" placeholder="Mã Sap"><input id="focusedInput" type="text" name="price[]" placeholder="Gía" style="margin:5px"><input id="focusedInput" type="text" name="text[]" placeholder="Mô tả"><a class="btn btn-danger remove_slideshow" title="Xóa" style="margin:5px"><i class="halflings-icon white trash"></i></a></div></div>';
		

		$('.show-element').append(html);
	$(".remove_slideshow").click(function(){
        $(this).parent().parent().remove();
        
    	});
	});

   $("#delete").click(function(){
			if(confirm("Bạn muốn tiếp tục?")){
				$.get($(this).attr("href"));
				window.location.reload();
			}
			return false;
		});
});
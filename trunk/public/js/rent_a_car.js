$(document).ready(function(){
	
	$("#rent_a_car").click(function(){
		
		var allOk = true;
		
		$(".j_required").each(function(){
			
			if($(this).val().length <= 0){
				allOk = false;
				$(this).addClass('j_warning');
			}else $(this).removeClass('j_warning');
		});
		
		if(allOk) $("#form-rent_a_car").submit();
	});
});
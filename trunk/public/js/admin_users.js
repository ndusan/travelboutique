$(document).ready(function(){
	
	$("button[type='submit']").click(function(){
		
		var allOk = true;
		
		$("input[type='text']").each(function(){
			
			if($(this).val().length <= 0 && $(this).attr('id')!='password'){
				allOk = false;
				$(this).addClass("j_warning");
			}else $(this).removeClass("j_warning");
		});
		
		if(!allOk) return false;
	});
});
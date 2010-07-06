$(document).ready(function(){
	
	$("button[type='submit']").click(function(){
		
		var allOk = true;
		
		$("input[type='text'], input[type='file']").each(function(){
			
			if($(this).val().length <= 0){
				allOk = false;
				$(this).addClass("j_warning");
			}else $(this).removeClass("j_warning");
		});
		if(!allOk) return false;
	});
});
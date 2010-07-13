$(document).ready(function(){

	$(".tabs").find('a').click(function(){
		var id = $(this).attr('id');
		var currentId = id.substring(5, id.length);
		
		//Hide all tabs except current one
		$(".tabs").find('a').each(function(){
			var tmpId = $(this).attr('id');
			tmpId = tmpId.substring(5, tmpId.length);
		
			if($(this).attr('id') == id){
				//Hide
				$(this).addClass('active');
				
				$("#ul-" + tmpId).show();
			}else{
				//Show
				$(this).removeClass('active');
				$("#ul-" + tmpId).hide();
			}
		});
			
	});
	
	//News button
	$("#newsletters").click(function(){
		
		//Get and check data
		var email = $("input[name='email']").val();
		var emailRegEx = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;
		if(email.length <= 0 || email.search(emailRegEx) == -1){
			$("input[name='email']").addClass('j_warning');
			return false;
		}else{
			$.post(	'ajax-news/',
					{ 'email' : email},
					function(data){
						if(data == true){
							//Success
							$("input[name='email']").removeClass('j_warning').val('');
							return true;
						}else{
							//Error
							$("input[name='email']").addClass('j_warning');
							return false;
						}
					}
			);
		
		}
	});
	
});
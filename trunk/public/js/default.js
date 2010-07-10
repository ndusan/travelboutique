$(document).ready(function(){

	$(".tabs").each(function(){
		
		$(this).find('a').click(function(){
			var id = $(this).attr('id');
			var currentId = id.substring(5, id.length);
			
			//Hide all tabs except current one
			$(".tabs").find('a').each(function(){
				if($(this).attr('id') != id){
					//Hide
					$(this).removeClass('active');
				}else{
					//Show
					$(this).addClass('active');
					
				}
			});
			//Show / hide ul
			$("#ul").find('ul').each(function(){
				if($(this).attr('id') == "ul-" + currentId) $(this).show();
				else $(this).hide();
			});
			
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
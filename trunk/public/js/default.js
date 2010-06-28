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
	$("button[type='button']").click(function(){
		
		//Get and check data
		var email = $("input[name='email']").val();
		if(email.length <= 0) $("input[name='email']").addClass('j_warning');
		else{
			$.post(	'ajax-news/',
					{ 'email' : email},
					function(data){
						if(data == true){
							//Success
							
						}else{
							//Error
							
						}
					}
			);
		}
		return true;
	});
	
});
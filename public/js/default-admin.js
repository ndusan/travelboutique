$(document).ready(function(){
	
	$(".submenu-action").click(function(){
		
		var id = $(this).attr('id');
		id = id.substring(8, id.length);
		
		$("#" + id).slideToggle();
	});
});


function confirmDelete(who, where){
	
	if(confirm(who))
		document.location.href = where;
}
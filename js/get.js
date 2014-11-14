$(document).ready(function(){

	var output = $('#output').serialize();
	
	$.ajax({
		url: 'http://itbina360.net46.net/show.php',
		type: 'GET',
		data: output,
		success: function(data){
				$("#output").html(data);
			},
			error: function(){
				console.log(data);
				alert('There was an error adding your comment');
			}
	});
	return false;
});

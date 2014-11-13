$(document).ready(function() {
	$("#submit").click(function(){
            		
		var postData = $("#announceForm").serialize();

		$.ajax({
			type: 'POST',
			data: postData,
			url: 'http://itbina360.net46.net/save.php',
			cache: false,
			success: function(data){
				console.log(data);
				alert('Your comment was successfully added');
			},
			error: function(){
				console.log(data);
				alert('There was an error adding your comment');
			}
		});
		return false;
	});
});

$(document).ready(function() {

function profile(){
	console.log("Hello");
	$.ajax({
		url:'action.php',
		method:'POST',
		data:{ profile:1 },
		success:function(data){
			$('#profile').html(data);
		}
	})
}
profile();
});
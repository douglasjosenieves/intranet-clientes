<script type="text/javascript">
	
 
	

$(document).ready(function() {
 

 $('.salir').on('click', function(event) {
 	event.preventDefault();
 		
 	/* Act on the event */
 
$.ajax({
	url: 'envios/log-out.php',
	type: 'POST',
	
	data: {param1: 'value1'},
})
.done(function(data) {
	console.log("success");
	console.log(data);
	alert(data);
	location.reload();
})
.fail(function() {
	console.log("error");
})
.always(function() {
	console.log("complete");
});


 });
	

 

});
 
</script>
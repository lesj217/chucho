$(document).ready(function(){
	var list = '';
	$.ajax({
		type: 'POST',
		url: 'ajax.php?mode=list',
		data: {'list':list},
		beforeSend: function(){
			$('#datos').html('...')
		}
	})
	.done(function(resultado){
		$('#datos').html(resultado)
	})
	.fail(function(){
		alert('error')
	})

});

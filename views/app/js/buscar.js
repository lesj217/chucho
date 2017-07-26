$(document).ready(function(){
$('#buscar').focus()
$('#buscar').on('keyup', function(){
	var buscar = $('#buscar').val()
	$.ajax({
		type: 'POST',
		url: 'ajax.php?mode=buscar',
		data: {'buscar':buscar},
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
})
});

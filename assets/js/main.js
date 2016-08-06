$(function($){
	$( "form" ).on( "submit", function( event ) {
		event.preventDefault();
		var data = $(this).serialize();

		$.ajax
	    ({
			type: "POST",
			url: '../index.php',
			data: {data:data},
			dataType: 'html',
			cache: false,
			success: function(data){
				$('.out').html(data);
			},
			error: function(error){
				console.error('Не могу получить данные: ' + error);
			}
	    });
	});
});
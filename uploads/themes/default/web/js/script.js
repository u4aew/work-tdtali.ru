$(document).ready(function() {

	//E-mail Ajax Send
	$("form").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "GET",
			url: "http://cj62223.tmweb.ru/site/mail", //Change 
			data: th.serialize()
		}).done(function() {
			alert("Спасибо");
            setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});

});
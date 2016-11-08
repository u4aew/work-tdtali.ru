$(document).ready(function() {
	//E-mail Ajax Send
	$(".needMailForm").submit(function() { //Change
	

	if ($("#email").val() != "") {
	
	var th = $(this);
		$.ajax({
			type: "GET",
			url: "/site/mail", //Change
			data: th.serialize()+"&pageLink="+window.location,
		}).done(function() {
			$("#myModal").attr("data-needSuccess",true).modal("hide");
			$('#successModal').modal('show');
			setTimeout(function(){
				$('#successModal').modal('hide');
			}, 3000);
		});
		return false;
		
	}
		else {
			$('#message-alert-email').css('color','red').css('font-size',30).text('Введите E-mail');
            $('#email').css('border',"1px solid red");
            return false;
		}
		
		
	});

    $(".mobileneedMailForm").submit(function() {

        if ($("#emailmobile").val() != "")
        {
            var th = $(this);
            $.ajax({
                type: "GET",
                url: "/site/mail", //Change
                data: th.serialize()+"&pageLink="+window.location,
            }).done(function() {
                alert("Спасибо");
                setTimeout(function() {
                    // Done Functions
                    th.trigger("reset");
                }, 1000);
            });
            return false;
        }
        else {
			$(".js-alert-error").html('<span style="color:red;"> Укажите контактные данные </span>')
            $("#emailmobile").css("border", "3px solid red")
			return false;
        }
    });
});
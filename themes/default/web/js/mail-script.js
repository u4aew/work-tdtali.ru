$(document).ready(
    function () {
        $("#work-form").submit(
            function () {
                var dataform = $(this).serialize();
                $.ajax({
                    type: "GET",
                    url: "/mail123.php",
                    data: dataform
                }).done(
                    function () {
						$(".b-notwork-form").hide();
                        $("#work-form").trigger("reset");
						$("#work-form").hide();
                    }
                );
                return false;
            }
        )
    }
)









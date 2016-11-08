$(document).ready(function() {
$(window).resize(function () {
					$("#sidebar").height($("#sidebar").parent().height());
                     $("#block-phone-free").height($("#block-phone-free").parent().height() - $("#block-phone-free").css("padding-top").replace("px","") - $("#block-phone-free").css("padding-bottom").replace("px",""));
				}).resize();
				$(window).scroll(function () {
					$("#sidebar").height($("#sidebar").parent().height());
				});
				setInterval(1000, function () {
					$(window).resize()
				});
});
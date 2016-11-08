$(document).ready(
    setInterval(
        function () {
            var hours = moment().tz("asia/krasnoyarsk").hour() * 3600;
            var minute = moment().tz("asia/krasnoyarsk").minute() * 60;
            var timeNow = hours + minute + moment().tz("asia/krasnoyarsk").second();
            if (timeNow >= 32400 && timeNow <= 75600) {
            }
            else {
                $(".b-notwork-form").show();
                $(".b-order-cform").show();
                var diffTime = 86400 - timeNow + 32400;
                var time = new Date(diffTime * 1000).toUTCString().split(/ /)[4];
                $("#time").text(time);
                $("#EmailNotwork").show();
                $("#AdresSidebar").hide();
                $(".js-hide-number-siderbar").hide();
				$(".b-notwork-form").css("border","10px solid #28d828");
            }
        }, 1000)
)
$(document).ready(
    function () {
        var heightPhone = $("#block-phone-free").height();
        var heightHeader = $("#header").height();
        $("#header-fixed").height(heightPhone);
        $("#header").height(heightPhone);
        var widthSiderbar = $(".navigation").width();
        $(".navigation__fixed").width(widthSiderbar);
        $(window).resize(
            function () {
                var heightHeaderRS = $("#block-phone-free").height();
                $("#header-fixed").height(heightHeaderRS);
                $("#header").height(heightHeaderRS);
                var widthSiderbar = $(".navigation").width();
                $(".navigation__fixed").width(widthSiderbar);

            }
        )
    }
)





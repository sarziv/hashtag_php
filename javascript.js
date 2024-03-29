$(document).ready(function () {
    $("ul > li > ul").hide();

    $("ul > li").each(function (i) {

        if ($(this).children("ul").length > 0) {
            $(this).css("cursor", "pointer").children("ul").before($("<sup class='toggler' />").text('▶'));
        } else if ($(this).children("li").length > 0) {
            $(this).css("cursor", "pointer").children("li").before($("<sup class='' />").text(''));
        }
        ;
    });

    $("ul > li > .toggler").click(function (e) {
        e.stopPropagation();
        // was visible
        if (!$(this).siblings("ul").is(":visible")) {
            $(this).text(" ▼");
            $(this).parent("li").children("ul").show();
        } else {
            $(this).text(" ▶");
            $(this).parent("li").children("ul").hide();
        }
        ;
    });
});
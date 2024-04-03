
$("#dp-next").click(function () {
    //var total = $(".dp_item").length;
    $("#dp-slider .dp_item:first-child").addClass("fadeSlideOut").hide().appendTo("#dp-slider").show();
    $.each($('.dp_item'), function (index, dp_item) {
        $(dp_item).attr('data-position', index + 1);
    });
});

$("#dp-prev").click(function () {
    //var total = $(".dp_item").length;
    $("#dp-slider .dp_item:last-child").removeClass("fadeSlideOut").hide().prependTo("#dp-slider").show().addClass("fadeSlideIn");
    $.each($('.dp_item'), function (index, dp_item) {
        $(dp_item).attr('data-position', index + 1);
    });
});

$("body").on("click", "#dp-slider .dp_item:not(:first-child)", function () {
    var get_slide = $(this).attr('data-class');
    console.log(get_slide);
    $("#dp-slider .dp_item[data-class=" + get_slide + "]").removeClass("fadeSlideOut").hide().prependTo("#dp-slider").show().addClass("fadeSlideIn");
    $.each($('.dp_item'), function (index, dp_item) {
        $(dp_item).attr('data-position', index + 1);
    });
});
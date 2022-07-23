function run(v) {
    // clone the array (before "animate()" modifies it), and reverse it
    var reversed = JSON.parse(JSON.stringify(v)).reverse();

    $(v[0]).animate(v[1], {
        duration: 1000,
        step: function(val) {
            $elm.css("transform", `translateX(${val}px)`);
        },
        done: {}
    })
};

jQuery(document).ready(function($) {
    var wid2 = $(window).width() / 1.5
    $(".dropdown-menu").css(
        "min-width", wid2 + "px"
    )
    $(".hex-area").css(
        "height", $("body").height() / 2
    )
    $(".hex-area").css(
        "top", $("body").height() / 4
    )
    var mr = $(".dropdown-menu").css("margin-right");
    if (mr > -70) {
        $(".dropdown-menu").css("margin-right", -70);
    }



    var w1 = $(".card-list").width();
    var translated = 0;

    $(".previous").click(function() {
        var tmp = $(this).attr("alt");
        var old_translate = translated
        w1 = $("#album" + tmp).width()
        translated -= w1
        console.log("#album" + tmp)
        $elm = $("#album" + tmp)
        if (translated < 0) {
            translated = w1
        }
        run([{ x: old_translate }, { x: translated }])
    })
    $(".next").click(function() {
        var tmp = $(this).attr("alt");
        var old_translate = translated
        w1 = $("#album" + tmp).width()
        translated += w1
        console.log($("#album1").html())
        $elm = $("#album" + tmp)
        if (translated > w1) {
            translated = w1
        }
        run([{ x: old_translate }, { x: translated }])
    })
    $(".sign-content").css(
        "min-width", "325px"
    )
    $("#LastProduct2 li").css(
        "width", $(window).width() / 4
    )
    $("#LastProduct2 li").css(
        "flex", "0 0 25%"
    )
    $("#LastProduct2 li").css(
        "padding-left", "15px"
    )
    $("#LastProduct2 li").css(
        "padding-right", "15px"
    )
    $("#LastProduct22 li").css(
        "width", $(window).width() / 4
    )
    $("#LastProduct22 li").css(
        "flex", "0 0 25%"
    )
    // $("#LastProduct22 li").css(
    //     "padding-left", "15px"
    // )
    // $("#LastProduct22 li").css(
    //     "padding-right", "15px"
    // )
});
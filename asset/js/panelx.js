jQuery(document).ready(function($) {
    $(".rowpanel div").click(function() {
        var attr = $(this).attr("alt");
        console.log(attr)
        window.open(WebsiteAddress + attr)
    })
    var left_margin_dis = true
    var right_margin_dis = true
    $(".circleright").hide()
    $(".cirecleleft2").hide()
    $('.circle1').click(function() {
        let spWidth = $('.sidepanel').width();
        $(".circleright").toggle();
        $(".cirecleleft").toggle();
        if (left_margin_dis) {
            $('.sidepanel').animate({
                "margin-left": -1 * spWidth + 5
            }, 500)
        } else {
            $('.sidepanel').animate({
                "margin-left": 0
            }, 500)
        }
        left_margin_dis = !left_margin_dis
    });
    $('.circle2').click(function() {
        let spWidth = $('.sidepanel2').width();
        $(".cirecleright2").toggle();
        $(".cirecleleft2").toggle();
        if (right_margin_dis) {
            $('.sidepanel2').animate({
                "margin-right": -1 * spWidth + 5
            }, 500)
        } else {
            $('.sidepanel2').animate({
                "margin-right": 0
            }, 500)
        }
        right_margin_dis = !right_margin_dis
    });
})
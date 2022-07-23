        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();

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

        function run2(v) {
            // clone the array (before "animate()" modifies it), and reverse it
            var reversed = JSON.parse(JSON.stringify(v)).reverse();

            $(v[0]).animate(v[1], {
                duration: 1000,
                step: function(val) {
                    $elm2.css("transform", `translateX(${val}px)`);
                },
                done: {}
            })
            $elm2.css("opacity", 1)
        };
        jQuery(document).ready(function($) {
            var WebsiteAddress = "http://localhost:8080/Litaxs.com/"
            var WebsiteAddress = "http://localhost:8080/Litaxs.com/"
            var background_Array = ["asset/img/wheat-slider1.jpg"]
            background_Array.push("asset/img/benjamin-slider2.jpg")
            $("#product1").hide()

            $(".menu a i").hover(function() {
                    var txt = $(this).attr("alt")
                    $(this).after('<p class="text-white mt-2" style="border:none !important;">' + txt + '</p>')
                },
                function() {
                    $(this).next('p').remove()
                });
            $(".site-nav ul li").hover(function() {
                var str = $(this).attr("alt");
                str = "." + str
                $(str).css("visibility", "visible")
            }, function() {
                var str = $(this).attr("alt");
                str = "#" + str
                $(str).delay("slow").css("visibility", "hidden")
            })
            $(".menu-all div").hover(function() {
                $(this).css("visibility", "visible")
            }, function() {
                setTimeout(function() {
                    $(this).css("visibility", "hidden")
                }, 1000)
            })
            $(".overlay-layer").css(
                "height", $(".siginin-layer").css("height")
            )
            $("#signInbtn").click(function() {
                $elm = $("#layer-content");
                var ww = $("#layer-content").width() / 2
                var wid_screen2 = $("body").width() / 2
                run([{ x: 0 }, { x: -1 * ww }])
                console.log(-1 * ww)
                $("#signInbtn").addClass("d-none")
                $("#loginInbtn").removeClass("d-none")
                $elm2 = $("#login-layer");
                run2([{ x: 0 }, { x: wid_screen2 + $("#login-layer").width() }])
            })
            $("#loginInbtn").click(function() {
                $elm = $("#layer-content");
                var ww = $("#layer-content").width() / 2
                run([{ x: -1 * ww }, { x: 0 }])
                var wid_screen2 = $("body").width() / 2
                $("#loginInbtn").addClass("d-none")
                $("#signInbtn").removeClass("d-none")
                $elm2 = $("#login-layer");
                run2([{ x: wid_screen2 + $("#login-layer").width() }, { x: 0 }])
                $("#login-layer").css("opacity", 0)
            })
            $(".chooser div input").hover(function() {
                console.log("sdsf")
                var stralt = $(this).attr("alt")
                $(".chooser").after('<p class="text-dark text-ylw2 ml-2" style="font-size:12px;margin-top: 60px;position: absolute;z-index: 66;">' + stralt + '</p>');
            }, function() {
                $(".chooser").next('p').remove();
            })


            $(".chooser div input").click(function(e) {
                var stralt = $(this).attr("alt")
                if (stralt.localeCompare("ورود کاربران") == 0) {
                    if (ruller_state == 1) {
                        $("#ruller").removeClass("end-middle");
                        $("#ruller").removeClass("first-middle");
                        $("#ruller").addClass("middle-first");
                    }
                    if (ruller_state == 2) {
                        $("#ruller").removeClass("first-end");
                        $("#ruller").removeClass("middle-end");
                        $("#ruller").addClass("end-first");
                    }
                    ruller_state = 0;
                }
                if (stralt.localeCompare("ورود رانندگان") == 0) {
                    if (ruller_state == 0) {
                        $("#ruller").removeClass("end-first");
                        $("#ruller").removeClass("middle-first");
                        $("#ruller").addClass("first-middle");
                    }
                    if (ruller_state == 2) {
                        $("#ruller").removeClass("first-end");
                        $("#ruller").removeClass("middle-end");
                        $("#ruller").addClass("end-middle");
                    }
                    ruller_state = 1;
                }
                if (stralt.localeCompare("ورود فروشندگان") == 0) {
                    if (ruller_state == 0) {
                        $("#ruller").removeClass("end-first");
                        $("#ruller").removeClass("middle-first");
                        $("#ruller").addClass("first-end");
                    }
                    if (ruller_state == 1) {
                        $("#ruller").removeClass("end-middle");
                        $("#ruller").removeClass("first-middle");
                        $("#ruller").addClass("middle-end");
                    }
                    ruller_state = 2;
                }
            });

            $(".forgot").click(function() {
                console.log("saf")
                $(".forget-card").fadeOut(400);
            })
            $(".to-login").click(function() {
                $(".forget-card").fadeIn();
            })
            $(".to-login2").click(function() {
                window.open(WebsiteAddress + "register.php")
            })

        });
        // const signUpButton = document.getElementById('signUpbtn');
        // const signInButton = document.getElementById('signInbtn');
        // const container = document.getElementById('container');

        // signUpButton.addEventListener('click', () => {
        //     container.classList.add("right-panel-active");
        // });

        // signInButton.addEventListener('click', () => {
        //     container.classList.remove("right-panel-active");
        // });
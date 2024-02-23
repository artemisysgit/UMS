// AOS animation

AOS.init({
});


// hamburger menu

$(document).ready(function () {
    $(".hamburger").click(function () {
        $(this).toggleClass("is-active");
        $('.menu-toggle').toggleClass('active');
        $('.main-menu').toggleClass('menu-active');
    });
});


// banner-slider with progress bar

$(document).ready(function () {
    var time = 3;
    var $bar, $slick, isPause, tick, percentTime;

    $slick = $(".slider");
    $slick.slick({
        draggable: true,
        adaptiveHeight: false,
        dots: false,
        mobileFirst: true,
        fade: true,
        arrows: false,
        pauseOnDotsHover: true
    });

    $bar = $(".slider-progress .progress");
    $barRound = $(".progress");

    $(".slider-wrapper").on({
        mouseenter: function () {
            isPause = true;
        },
        mouseleave: function () {
            isPause = false;
        }
    });

    function startProgressbar() {
        resetProgressbar();
        percentTime = 0;
        isPause = false;
        tick = setInterval(interval, 10);
    }
    var $rbar = $(".progress circle");
    var rlen = 2 * Math.PI * $rbar.attr("r");
    function interval() {
        percentTime += 1 / (time + 0.1);
        $bar.css({
            width: percentTime + "%"
        });
        $rbar.css({
            "stroke-dasharray": rlen,
            "stroke-dashoffset": rlen * (1 - percentTime / 100)
        });

        if (percentTime >= 100) {
            $slick.slick("slickNext");
            startProgressbar();
        }
    }

    function resetProgressbar() {
        $bar.css({
            width: 0 + "%"
        });
        clearTimeout(tick);
    }

    startProgressbar();
});  // circle bar



// slider_animation

$(".slider").on("beforeChange", function () {

    $('.slider_animation').removeClass('animated zoom-ani').hide();
    setTimeout(() => {
        $('.slider_animation').addClass('animated zoom-ani').show();
    }, 300);

})


// nav tab

function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";

    get_data_by_course_type(cityName);
}

function get_data_by_course_type(e)
{
    var csrf_token = $('meta[name="csrf_token"]').attr('content');

    var opts = {
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        arrows: false,
        slidesToScroll: 1,
        infinite: true,
        swipeToSlide: true,
        prevArrow: '<div class="a-left control-c prev slick-prev"><img src="assets/website/assets/images/news/move-right.png" alt=""></div>',
        nextArrow: '<div class="a-right control-c next slick-next"><img src="assets/website/assets/images/news/move-right (1).png" alt=""></div>',
        dots: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 2,
                    arrows: false,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                    slidesToScroll: 1
                }
            }
        ]
    };

    $.ajax({

        type:'POST',
        url: BASE_URL + "ajax-filter-course",
        headers: {'X-CSRF-Token': csrf_token},
        data:{type:e},
        success:function(data){

            $('.courses-slider').slick('unslick');
            $(".course_div").html(data);
            $('.courses-slider').slick(opts);
            resize_div_same_size('courses-slide-main');
        }

    });
}


// courses-slider

$('.courses-slider').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    arrows: false,
    slidesToScroll: 1,
    infinite: true,
    swipeToSlide: true,
    prevArrow: '<div class="a-left control-c prev slick-prev"><img src="assets/images/news/move-right.png" alt=""></div>',
    nextArrow: '<div class="a-right control-c next slick-next"><img src="assets/images/news/move-right (1).png" alt=""></div>',
    dots: true,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 769,
            settings: {
                slidesToShow: 2,
                arrows: false,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                arrows: false,
                slidesToScroll: 1
            }
        }
    ]
});


// slider refresh

$('.tablinks').on('click', function () {
    $('.courses-slider').slick('refresh');
});



// date picker

$(document).ready(function () {
    $("#datepicker").datepicker({
        dateFormat:'dd-mm-yy',
        changeMonth:true,
        changeYear:true,
        yearRange: "-100:+0",
    });

    $('#date-icon').click(function () {
        $("#datepicker").datepicker('show');
    })
});



//  review slider

$('.reviews-slider').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    arrows: true,
    slidesToScroll: 1,
    infinite: true,
    swipeToSlide: true,
    prevArrow: '<div class="a-left control-c prev slick-prev"><img src="assets/images/reviews/move-right.png" alt=""></div>',
    nextArrow: '<div class="a-right control-c next slick-next"><img src="assets/images/reviews/move-left.png" alt=""></div>',
    dots: true,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
            }
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 769,
            settings: {
                slidesToShow: 2,
                arrows: true,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                arrows: true,
                slidesToScroll: 1
            }
        }
    ]
});



//  parents-testimonial-slider

$('.parents-testimonial-slider').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    arrows: true,
    slidesToScroll: 1,
    infinite: true,
    swipeToSlide: true,
    prevArrow: '<div class="a-left control-c prev slick-prev"><img src="assets/images/reviews/move-right.png" alt=""></div>',
    nextArrow: '<div class="a-right control-c next slick-next"><img src="assets/images/reviews/move-left.png" alt=""></div>',
    dots: true,
    responsive: [
        {
            breakpoint: 1030,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: true,
                arrows: false,
            }
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
                dots: true,
                arrows: false,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 769,
            settings: {
                slidesToShow: 2,
                arrows: false,
                dots: true,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                arrows: false,
                dots: true,
                slidesToScroll: 1
            }
        }
    ]
});


//  news-slider

$('.news-slider').slick({
    dots: true,
    infinite: false,
    speed: 300,
    slidesToShow: 3,
    arrows: false,
    slidesToScroll: 1,
    infinite: true,
    swipeToSlide: true,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 769,
            settings: {
                slidesToShow: 2,
                arrows: false,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                arrows: false,
                slidesToScroll: 1
            }
        }
    ]
});



//  scrollToTop

document.addEventListener("DOMContentLoaded", () => {
    const scrollToTopBtn = document.querySelector(".scrollToTop");
    const rootElement = document.documentElement;
    const bodyElement = document.body;
    const progressBar = document.getElementById("progress-bar");
    const pathLength = document
        .querySelector("#progress-bar > svg > path")
        .getTotalLength();

    scrollToTopBtn.addEventListener("click", () => {
        rootElement.scrollTo({ top: 0, behavior: "smooth" });
    });

    document.addEventListener("scroll", () => {
        const scrollAmount = pathLength / 100;
        const scrollPosition = Math.round(
            ((rootElement.scrollTop || bodyElement.scrollTop) /
                ((rootElement.scrollHeight || bodyElement.scrollHeight) -
                    innerHeight)) *
            100 *
            scrollAmount
        );

        if (scrollPosition > 5) {
            scrollToTopBtn.classList.add("showBtn");
            progressBar.style.setProperty("--scrollAmount", scrollPosition + "px");
        } else {
            scrollToTopBtn.classList.remove("showBtn");
        }
    });
});



//   Resources




//  professor-slider

$('.professor-slider').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    arrows: true,
    slidesToScroll: 1,
    infinite: true,
    swipeToSlide: true,
    prevArrow: '<div class="a-left control-c prev slick-prev"><img src="assets/images/reviews/move-right.png" alt=""></div>',
    nextArrow: '<div class="a-right control-c next slick-next"><img src="assets/images/reviews/move-left.png" alt=""></div>',
    dots: true,
    responsive: [
        {
            breakpoint: 1030,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                arrows: false,
            }
        },
        {
            breakpoint: 993,
            settings: {
                slidesToShow: 2,
                dots: true,
                arrows: false,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 769,
            settings: {
                slidesToShow: 2,
                dots: true,
                arrows: false,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                arrows: false,
                dots: true,
                slidesToScroll: 1
            }
        }
    ]
});



// Sticky div on scroll

function sticky_relocate() {
    var window_top = $(window).scrollTop();
    var div_top = $('.course-sec').offset().top;
    if (window_top > div_top) {
        $('.main-details-two').addClass('main-details-two-sticky');
    } else {
        $('.main-details-two').removeClass('main-details-two-sticky');
    }
}

$(function () {
    $(window).scroll(sticky_relocate);
    sticky_relocate();
});








$(function() {
    (function(name) {
      var container = $('#pagination-' + name);
      if (!container.length) return;
      var sources = function () {
        var result = [];

        for (var i = 1; i < 196; i++) {
          result.push(i);
        }

        return result;
      }();

      var options = {
        dataSource: sources,
        callback: function (response, pagination) {
          window.console && console.log(response, pagination);

          var dataHtml = '<ul>';

          $.each(response, function (index, item) {
            dataHtml += '<li>' + item + '</li>';
          });

          dataHtml += '</ul>';

          container.prev().html(dataHtml);
        }
      };

      //$.pagination(container, options);

      container.addHook('beforeInit', function () {
        window.console && console.log('beforeInit...');
      });
      container.pagination(options);

      container.addHook('beforePageOnClick', function () {
        window.console && console.log('beforePageOnClick...');
        //return false
      });
    })('demo1');
})






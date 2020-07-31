// banner Slider
$("#banner-slider").owlCarousel({
autoplay: true,
autoplayTimeout: 5000,
smartSpeed: 250,
lazyLoad: true,
navigation: false,
dots: true,
nav: false,
loop: true,
animateIn: 'fadeIn',
animateOut: 'fadeOut',
responsiveClass: true,
    responsive:{
        0:{
            items:1,
        },
		  400:{
            items:1,
        },
        600:{
            items:1,
        },
        1000:{
            items:1,
        }
    }
});

// Owl Slider
$("#review-slider").owlCarousel({
autoplay: true,
autoplayTimeout: 5000,
smartSpeed: 250,
lazyLoad: true,
navigation: false,
center: true,
dots: false,
nav: true,
loop: true,
animateIn: 'fadeIn',
animateOut: 'fadeOut',
responsiveClass: true,
    responsive:{
        0:{
            items:1,
        },
		  400:{
            items:2,
        },
        600:{
            items:2,
        },
        1000:{
            items:3,
        }
    }
});

// filter gallery
$(document).ready(function(){
$(".filter-button").click(function(){
	var value = $(this).attr('data-filter');
	
	if(value == "all")
	{
		$('.filter').show('1000');
	}
	else
	{

		$(".filter").not('.'+value).hide('3000');
		$('.filter').filter('.'+value).show('3000');
		
	}
});

if ($(".filter-button").removeClass("active")) {
	$(this).removeClass("active");
	}
	$(this).addClass("active");
});
	
	
// count
$(".count").each(function() {
  $(this)
    .prop("Counter", 0)
    .animate(
      {
        Counter: $(this).text()
      },
      {
        duration: 4000,
        easing: "swing",
        step: function(now) {
          $(this).text(Math.ceil(now));
        }
      }
    );
});

// top button
var btn = $('#button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});

// career
$(document).ready(function() {
    $(".career-accordion").each(function() {
        $(".fa-minus-circle", this).hide(), $(".career-accordion-panel", this).hide(), $(".career-accordion-head", this).click(function() {
            var i = $(this).parent().parent(),
                s = $(this),
                e = s.find(".fa-plus-circle"),
                n = s.find(".fa-minus-circle"),
                o = s.siblings(".career-accordion-panel");
            i.find(".fa-plus-circle").show(), i.find(".fa-minus-circle").hide(), i.find(".career-accordion-head").not(this).removeClass("active"), i.find(".career-accordion-panel").not(this).removeClass("active").slideUp(), s.hasClass("active") ? (s.removeClass("active"), e.show(), n.hide(), o.removeClass("active").slideUp()) : (s.addClass("active"), e.hide(), n.show(), o.addClass("active").slideDown())
        })
    })
    $('.career-accordion li:first').find('.career-accordion-head').addClass('active');
    $('.career-accordion li:first').find('.career-accordion-panel').addClass('active');
    $('.career-accordion li:first').find('.career-accordion-panel').show();
    $('.career-accordion li:first .career-accordion-head i.fa-plus-circle').hide();
    $('.career-accordion li:first .career-accordion-head i.fa-minus-circle').show();

});
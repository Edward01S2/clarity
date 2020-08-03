/**
 * External Dependencies
 */
import 'jquery';
import 'alpinejs';
import 'lity';
import 'slick-carousel/slick/slick.min';
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { ScrollToPlugin } from "gsap/ScrollToPlugin";

gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

$(document).ready(() => {
  // console.log('Hello world');
  if(window.innerWidth < 768) {
    mobileSlider();
  }

  quoteMobile();
  customerSlider();

  function mobileSlider() {
    $('.slider').not('.slick-initialized').slick({
      dots: true,
      arrows: false,
      infinite: true,
      mobileFirst: true,
      autoplay: true,
      speed: 1000,
      autoplaySpeed: 3500,
      slidesToShow: 1,
    });
  }

  function quoteMobile() {
    $('.quote-slider').not('.slick-initialized').slick({
      dots: true,
      arrows: false,
      infinite: true,
      mobileFirst: true,
      slidesToShow: 1,
      speed: 1000,
      responsive: [{
        breakpoint: 767,
        settings: {
          dots: false,
          arrows: true,
          prevArrow: '<button class="quote-prev"><svg class="quote-arrow arrow-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm8-10a8 8 0 1 0-16 0 8 8 0 0 0 16 0zM7.46 9.3L11 5.75l1.41 1.41L9.6 10l2.82 2.83L11 14.24 6.76 10l.7-.7z"/></svg></button>',
          nextArrow: '<button class="quote-next"><svg class="quote-arrow arrow-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 0a10 10 0 1 1 0 20 10 10 0 0 1 0-20zM2 10a8 8 0 1 0 16 0 8 8 0 0 0-16 0zm10.54.7L9 14.25l-1.41-1.41L10.4 10 7.6 7.17 9 5.76 13.24 10l-.7.7z"/></svg></button>',
        }
      }]
    });
  }

  function customerSlider() {
    $('#customer-slides').not('.slick-initialized').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: true,
      arrows: false,
      mobileFirst: true,
      speed: 1500,
      // fade: true,
      appendDots: $('.customer-dots'),
      responsive: [{
        breakpoint: 767,
        settings: {
          arrows: true,
          prevArrow: '<button class="quote-prev"><svg class="quote-arrow arrow-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm8-10a8 8 0 1 0-16 0 8 8 0 0 0 16 0zM7.46 9.3L11 5.75l1.41 1.41L9.6 10l2.82 2.83L11 14.24 6.76 10l.7-.7z"/></svg></button>',
          nextArrow: '<button class="quote-next"><svg class="quote-arrow arrow-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 0a10 10 0 1 1 0 20 10 10 0 0 1 0-20zM2 10a8 8 0 1 0 16 0 8 8 0 0 0-16 0zm10.54.7L9 14.25l-1.41-1.41L10.4 10 7.6 7.17 9 5.76 13.24 10l-.7.7z"/></svg></button>',
        }
      }],
      customPaging: function(slider, i) {
        var tab = $(slider.$slides[i]).data('type');
        if($(slider.$slides[i]).data('icon')) {
          var icon = $(slider.$slides[i]).data('icon');
          return '<button class="slider-dots"><img class="h-8 w-8 mr-2" src="' + icon + '"/><span>' + tab + '</span></button>'
        }
        else {
         return '<button class="slider-dots"><div class="dot-circle h-4 w-4 bg-c-blue-350 rounded-full mr-2"></div><span>' + tab + '</span></button>'
        }

      },
    });
  }

  $(window).smartresize(function(e){

    quoteMobile();
    customerSlider();

    if(window.innerWidth < 768) {
        if(!$('.slider').hasClass('slick-initialized')){
            mobileSlider();
        }
    }else{
      if($('.slider').hasClass('slick-initialized')){
          $('.slider').slick('unslick');
      }
    }
  });


//Animations

gsap.fromTo(".fade-up", {
    autoAlpha: 0,
    y: 25,
  }, {
    autoAlpha: 1,
    y: 0,
    duration: 2,
    delay: 0.5,
});

gsap.fromTo("#split-hero-block", {
  autoAlpha: 0,
  y: 25,
}, {
  autoAlpha: 1,
  y: 0,
  duration: 2,
  delay: 0.5,
});

gsap.fromTo("#vid-img-2", {
  x: 125,
  }, {
    scrollTrigger: {
      trigger: '#vid-img-2',
      start: "-250px 50%",
      // markers: true,
    },
    x: 0,
    duration: 2,
});

gsap.fromTo("#vid-img-3", {
  x: -200,
  }, {
    scrollTrigger: {
      trigger: '#vid-img-3',
      start: "-500px 50%",
      //markers: true,
    },
    x: 0,
    duration: 2,
});

gsap.fromTo("#trig-logo", {
  autoAlpha: 0,
  y: 25,
  }, {
    scrollTrigger: {
      trigger: '#trig-logo',
      start: "-200px 75%",
      //markers: true,
    },
    autoAlpha: 1,
    y: 0,
    duration: 1,
});

gsap.fromTo("#feat-block", {
  autoAlpha: 0,
  y: 25,
  }, {
    scrollTrigger: {
      trigger: '#feat-block',
      start: "-100px 75%",
      //markers: true,
    },
    autoAlpha: 1,
    y: 0,
    duration: 1,
});

gsap.fromTo("#split-content", {
  autoAlpha: 0,
  y: 25,
  }, {
    scrollTrigger: {
      trigger: '#split-content',
      start: "0 75%",
      //markers: true,
    },
    autoAlpha: 1,
    y: 0,
    duration: 1,
});

gsap.fromTo("#cta-block", {
  autoAlpha: 0,
  y: 25,
  }, {
    scrollTrigger: {
      trigger: '#cta-block',
      start: "0 75%",
      //markers: true,
    },
    autoAlpha: 1,
    y: 0,
    duration: 1,
});

gsap.fromTo("#contact-block", {
  autoAlpha: 0,
  y: 25,
  }, {
    scrollTrigger: {
      trigger: '#contact-block',
      start: "0 75%",
      //markers: true,
    },
    autoAlpha: 1,
    y: 0,
    duration: 1,
});


$('#work-select').on('change', function() {
  gsap.to(window, {duration: 1, scrollTo: this.value});
})

$('#tour').on('click', function(e) {
  e.preventDefault();
  var $this = $(this),
  href = $this.attr("href"),
  topY = $(href).offset().top;
  gsap.to(window, {duration: 1, scrollTo: {y: topY}});
})

$('#hero-scroll').on('click', function(e) {
  e.preventDefault();
  var $this = $(this),
  href = $this.attr("href"),
  topY = $(href).offset().top;
  gsap.to(window, {duration: 1, scrollTo: {y: topY}});
})

$('#return-top').on('click', function(e) {
  e.preventDefault();
  var $this = $(this),
  href = $this.attr("href"),
  topY = $(href).offset().top;
  gsap.to(window, {duration: 2, scrollTo: {y: topY}});
})

const navLinks = gsap.utils.toArray(".work-nav a");
navLinks.forEach((link, i) => {
  // console.log(i)
  link.addEventListener("click", function(e) {
    e.preventDefault();
    gsap.to(window, {duration: 1, scrollTo: {y: e.target.getAttribute("href"), offsetY: 200 }});
  });
});

gsap.utils.toArray('.work-section').forEach((box, i) => {
  var id = (box.getAttribute("id"))
  gsap.fromTo(box, {
      autoAlpha: 0.3, 
      y: -200,
      scale: 0.5,
    }, {
    scrollTrigger: {
      trigger: box,
      scrub: true,
      start: "top 80%",
      end: "bottom 20%",
      //markers: {startColor: "green", endColor: "red", fontSize: "12px"},
      toggleClass: {targets: ".work-nav a[href='#" + id + "']", className: "active"},
    },
    duration: 1, 
    autoAlpha: 1,
    scale: 1, 
    y: 0
  });
});


});





(function($,sr){

  // debouncing function from John Hann
  // http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
  var debounce = function (func, threshold, execAsap) {
      var timeout;

      return function debounced () {
          var obj = this, args = arguments;
          function delayed () {
              if (!execAsap)
                  func.apply(obj, args);
              timeout = null;
          };

          if (timeout)
              clearTimeout(timeout);
          else if (execAsap)
              func.apply(obj, args);

          timeout = setTimeout(delayed, threshold || 100);
      };
  }
  // smartresize 
  jQuery.fn[sr] = function(fn){  return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr); };

})(jQuery,'smartresize');
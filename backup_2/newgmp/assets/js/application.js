//@prepros-prepend ../plugins/jquery/jquery.min.js
//@prepros-prepend ../plugins/jquery-migrate/jquery-migrate.min.js
//@prepros-prepend ../plugins/twitter-bootstrap/js/bootstrap.js
//@prepros-prepend ../plugins/owl-carousel/owl.carousel.min.js
//@prepros-prepend ../plugins/jquery-scrolltofixed/jquery-scrolltofixed-min.js
//@prepros-prepend ../plugins/ResponsiveSlides.js/responsiveslides.min.js
//@prepros-prepend ../plugins/jquery-raty/jquery.raty.js
//@prepros-prepend ../plugins/jquery-ui/jquery-ui.min.js





function  resizewindow() {

  console.log('Window Height: ' + jQuery(window).height());
  console.log('Window Width: ' + jQuery(window).width());
  console.log('__________________');

  // $('#slider li ul li').css('width', ($('.container').outerWidth()))

}
jQuery(document).ready(function () {

  $("#accordion").accordion();


//auto add active class to links
  var url = window.location;
  jQuery('ul a[href="' + url + '"]').parent().addClass('active');
  jQuery('ul a').filter(function () {
    return this.href == url;
  }).parent().addClass('active').parent().parent().addClass('active');


//if windows is larger the 768px
  var mq = window.matchMedia("(min-width: 768px)");
  if (mq.matches) {

//    popover normal
//    jQuery('[data-toggle="popover"]').popover({html: true});


  } else {

//on mobile popover bottom
//    jQuery('[data-toggle="popover"]').popover({placement: 'top', html: true});

  }

//  tooltip
//  jQuery('[data-toggle="tooltip"],button[title]').tooltip();

//paragraph empty solution
  jQuery('p').each(function () {
    if (jQuery(this).html() == "&nbsp;") {
      jQuery(this).css('font-size', '10px').css('line-height', '.4')
    }
  });


//  // Slideshow 3
//  $("#slider3").responsiveSlides({
//    manualControls: '#slider3-pager',
//    maxwidth: 768
//  });
//
//
//
  var owl = jQuery("#testimonials-carousel").owlCarousel({
    // Most important owl features
    loop: true,
    margin: 0,
    nav: false,
    responsiveClass: true,
    autoplay: true,
    autoplayTimeout: 1000,
    autoplayHoverPause: true,
    autoplaySpeed: 2000,
    dots: false,
    responsive: {
      0: {
        items: 1,
        nav: false,
        dots: false,
      },
      800: {
        items: 1,
        nav: false,
        dots: false,
      },
      1000: {
        items: 1,
        nav: false,
      }
    }

  });
  owl.owlCarousel();
  $('#testimonials-carousel-left').click(function () {
    owl.trigger('next.owl.carousel');
  })
  $('#testimonials-carousel-right').click(function () {
    owl.trigger('prev.owl.carousel', [300]);
  })
  var owl2 = jQuery("#destination-carousel").owlCarousel({
    // Most important owl features
    loop: true,
    margin: 20,
    nav: false,
    responsiveClass: true,
    autoplay: true,
    autoplayTimeout: 1000,
    autoplayHoverPause: true,
    autoplaySpeed: 2000,
    dots: false,
    responsive: {
      0: {
        items: 1,
        nav: false,
        dots: false,
      },
      800: {
        items: 2,
        nav: false,
        dots: false,
      },
      1000: {
        items: 2,
        nav: false,
      }
    }

  });
  owl2.owlCarousel();
  $('#destination-carousel-left').click(function () {
    owl2.trigger('next.owl.carousel');
  })
  $('#destination-carousel-right').click(function () {
    owl2.trigger('prev.owl.carousel', [300]);
  })
  var owl3 = jQuery("#brand-carousel").owlCarousel({
    // Most important owl features
    loop: true,
    margin: 30,
    nav: false,
    responsiveClass: true,
    autoplay: true,
    autoplayTimeout: 1000,
    autoplayHoverPause: true,
    autoplaySpeed: 2000,
    dots: false,
    responsive: {
      0: {
        items: 2,
        nav: false,
      },
      800: {
        items: 3,
        nav: false,
      },
      1000: {
        items: 4,
        nav: false,
      }
    }

  });
  owl3.owlCarousel();
  $('#brand-carousel-left').click(function () {
    owl3.trigger('next.owl.carousel');
  })
  $('#brand-carousel-right').click(function () {
    owl2.trigger('prev.owl.carousel', [300]);
  })
  var owl4 = jQuery("#banner-carousel").owlCarousel({
    // Most important owl features
    loop: true,
    margin: 30,
    nav: false,
    responsiveClass: true,
    autoplay: true,
    autoplayTimeout: 1000,
    autoplayHoverPause: true,
    autoplaySpeed: 2000,
    dots: false,
    responsive: {
      0: {
        items: 1,
        nav: false,
      },
      800: {
        items: 1,
        nav: false,
      },
      1000: {
        items: 1,
        nav: false,
      }
    }

  });
  owl4.owlCarousel();
  $('#banner-carousel-left').click(function () {
    owl4.trigger('next.owl.carousel');
  })
  $('#banner-carousel-right').click(function () {
    owl4.trigger('prev.owl.carousel', [300]);
  })
  $('.rating').raty({score: 3,
    half: true,
    starType: 'i'});


  resizewindow()

});
jQuery(window).load(function () {


  jQuery(window).resize(function () {

    resizewindow();

  });

  resizewindow()

})
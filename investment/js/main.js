/*jQuery(document).ready(function ($) {

  jQuery.event.special.touchstart = {
    setup: function( _, ns, handle ) {
      this.addEventListener("touchstart", handle, { passive: !ns.includes("noPreventDefault") });
    }
  };
  jQuery.event.special.touchmove = {
    setup: function( _, ns, handle ) {
      this.addEventListener("touchmove", handle, { passive: !ns.includes("noPreventDefault") });
    }
  };
  jQuery.event.special.wheel = {
    setup: function( _, ns, handle ){
      this.addEventListener("wheel", handle, { passive: true });
    }
  };
  jQuery.event.special.mousewheel = {
    setup: function( _, ns, handle ){
      this.addEventListener("mousewheel", handle, { passive: true });
    }
  };

  $('.services-faq-title').on('click', function() {
    $(this).parent().children('.services-faq-answer').slideToggle(300, function() {
      if($(this).is(':hidden')) {
        $(this).siblings().parent().removeClass('active');
      }
      else {
        $(this).siblings().parent().addClass('active');
      }
    });
    return false;
  });

  $('.faq-title').on('click', function() {
    $(this).parent().children('.faq-answer').slideToggle(300, function() {
      if($(this).is(':hidden')) {
        $(this).siblings().parent().removeClass('active');
      }
      else {
        $(this).siblings().parent().addClass('active');
      }
    });
    return false;
  });

  $('.off').hover(function() {
    $(this).css('background', '#E7DAC9');
    $(this).css('color', 'rgba(19, 23, 34, 0.9)');
    $('.btn-cost').css('background', 'unset');
    $('.btn-cost').css('color', '#E7DAC9');
  }, function() {
    $(this).css('background', 'unset');
    $(this).css('color', '#E7DAC9');
    $('.btn-cost').css('background', '#E7DAC9');
    $('.btn-cost').css('color', 'rgba(19, 23, 34, 0.9)');
  });

  let header = $('.header');
  $(window).scroll(function() {
    if($(this).scrollTop() > 100) {
      header.addClass('header_fixed');
    } else {
      header.removeClass('header_fixed');
    }
  });

  $('.text-field').on('click', function() {
    $(this).addClass('active');
    return false;
  });

  $(document).on('click', function(e) {
    if($('.contactInput').val()=='') {
      $('.text-field').removeClass('active');
    } else {
      return false
    }
    if($('.contactPhone').val()=='') {
      $('.text-field').removeClass('active');
    } else {
      return false
    }
  });

  $('#carousel').carousel({
    interval: 10000,
  });

});*/









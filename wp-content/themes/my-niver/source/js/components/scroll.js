import 'jquery-smooth-scroll'

$('.smooth').on('click', function(e) {
    $.smoothScroll({
      scrollElement: null,
      scrollTarget: e.currentTarget.getAttribute('href'),
      speed: 1000
    });
    if(window.innerWidth < 768) {
      $('header nav').css({ opacity: 0, visibility: 'hidden' })
    }
    return false;
});
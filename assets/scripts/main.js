audiojs.events.ready(function() {

var as = audiojs.createAll({
	css: false,
  createPlayer: {
    markup: false,
    playPauseClass: 'play-pause',
    scrubberClass: 'scrubber',
    progressClass: 'progress',
    loaderClass: 'loaded',
    timeClass: 'time',
    durationClass: 'duration',
    playedClass: 'played',
    errorMessageClass: 'error-message',
    playingClass: 'playing',
    loadingClass: 'loading',
    errorClass: 'error'
	}
  });

});
    

$(document).ready(function () {
  $('.accordion-tabs').each(function(index) {
    $(this).children('li').first().children('a').addClass('is-active').next().addClass('is-open').show();
  });
  $('.accordion-tabs').on('click', 'li > a.tab-link', function(event) {
    if (!$(this).hasClass('is-active')) {
      event.preventDefault();
      var accordionTabs = $(this).closest('.accordion-tabs');
      accordionTabs.find('.is-open').removeClass('is-open').hide();

      $(this).next().toggleClass('is-open').toggle();
      accordionTabs.find('.is-active').removeClass('is-active');
      $(this).addClass('is-active');
    } else {
      event.preventDefault();
    }
  });
});

$(document).ready(function() {
    $(window).scroll( function(){
        $('.js-fademe').each( function(i){
            
            var objectBottom = $(this).position().top + $(this).outerHeight();
            var objectTop = $(this).position().top;
            var windowBottom = $(window).scrollTop() + $(window).height();
            var windowTop = $(window).scrollTop();
            
            if( windowBottom > objectBottom ){
                $(this).addClass('js-fade-element-show');
            } 
            else if ( windowBottom < objectTop ) {
                $(this).removeClass('js-fade-element-show');
                $(this).addClass('js-fade-element-hide');
            }

        }); 
    });
});

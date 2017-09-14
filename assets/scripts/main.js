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
    
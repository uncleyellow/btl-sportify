;(function(window, undefined) {

'use strict';

var AudioPlayer = (function() {

    var aphtml =
    '  <div class="ap-inner">'+
    '    <div class="ap-panel">'+
    '      <div class="ap-item ap--playback">'+
    '        <button class="ap-controls ap-prev-btn">'+
    '          <i class="material-icons md-dark">skip_previous</i>'+
    '        </button>'+
    '        <button class="ap-controls ap-toggle-btn">'+
    '            <i class="material-icons md-dark ap--pause">play_arrow</i>'+
    '        </button>'+
    '        <button class="ap-controls ap-next-btn">'+
    '          <i class="material-icons md-dark">skip_next</i>'+
    '        </button>'+
    '      </div>'+
    '      <div class="ap-item ap--track">'+
    '        <div class="ap-info">'+
    '          <div class="ap-title">Unknown</div>'+
    '          <div class="ap-time">'+
    '            <span class="ap-time--current">--</span>'+
    '            <span> / </span>'+
    '            <span class="ap-time--duration">--</span>'+
    '          </div>'+
    ''+
    '          <div class="ap-progress-container">'+
    '            <div class="ap-progress">'+
    '              <div class="ap-bar"></div>'+
    '              <div class="ap-preload-bar"></div>'+
    '            </div>'+
    '          </div>'+
    ''+
    '        </div>'+
    '      </div>'+
    '      <div class="ap-item ap--settings">'+
    '        <div class="ap-controls ap-volume-container">'+
    '          <button class="ap-controls ap-volume-btn">'+
    '              <i class="material-icons md-dark ap--volume-on">volume_up</i>'+
    '              <i class="material-icons md-dark ap--volume-off">volume_mute</i>'+
    '          </button>'+
    '          <div class="ap-volume">'+
    '            <div class="ap-volume-progress"><div class="ap-volume-bar"></div></div>'+
    '          </div>'+
    '        </div>'+
    '        <button class="ap-controls ap-repeat-btn">'+
    '          <i class="material-icons md-dark">repeat</i>'+
    '        </button>'+
    '        <button class="ap-controls ap-playlist-btn">'+
    '          <i class="material-icons md-dark">queue_music</i>'+
    '        </button>'+
    '      </div>'+
    '    </div>'+
    '  </div>';
    var
  player,
  playBtn,
  prevBtn,
  nextBtn,
  plBtn,
  repeatBtn,
  volumeBtn,
  progressBar,
  preloadBar,
  curTime,
  durTime,
  trackTitle,
  audio,
  index = 0,
  playList,
  volumeBar,
  volumeLength,
  repeating = false,
  seeking = false,
  rightClick = false,
  apActive = false,

  pl,
  plLi,

  settings = {
    container: 'body',
    volume   : 0.5,
    autoPlay : false,
    notification: false,
    playList : []
  };
 function init(options) {

    if(!('classList' in document.documentElement)) {
      return false;
    }

    player = create('div', {
      'className': 'ap',
      'id': 'ap',
      'innerHTML': aphtml
    });

    if(apActive || player === null) {
      return;
    }

    settings = extend(settings, options);

    document.querySelector(settings.container).insertBefore(player, null);


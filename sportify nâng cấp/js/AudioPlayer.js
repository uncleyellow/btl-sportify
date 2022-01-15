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
      playBtn        = player.querySelector('.ap-toggle-btn');
    prevBtn        = player.querySelector('.ap-prev-btn');
    nextBtn        = player.querySelector('.ap-next-btn');
    repeatBtn      = player.querySelector('.ap-repeat-btn');
    volumeBtn      = player.querySelector('.ap-volume-btn');
    plBtn          = player.querySelector('.ap-playlist-btn');
    curTime        = player.querySelector('.ap-time--current');
    durTime        = player.querySelector('.ap-time--duration');
    trackTitle     = player.querySelector('.ap-title');
    progressBar    = player.querySelector('.ap-bar');
    preloadBar     = player.querySelector('.ap-preload-bar');
    volumeBar      = player.querySelector('.ap-volume-bar');

    playList = settings.playList;

    playBtn.addEventListener('click', playToggle, false);
    volumeBtn.addEventListener('click', volumeToggle, false);
    repeatBtn.addEventListener('click', repeatToggle, false);

    progressBar.parentNode.parentNode.addEventListener('mousedown', handlerBar, false);
    progressBar.parentNode.parentNode.addEventListener('mousemove', seek, false);
    document.documentElement.addEventListener('mouseup', seekingFalse, false);

    volumeBar.parentNode.parentNode.addEventListener('mousedown', handlerVol, false);
    volumeBar.parentNode.parentNode.addEventListener('mousemove', setVolume);
    document.documentElement.addEventListener('mouseup', seekingFalse, false);

    prevBtn.addEventListener('click', prev, false);
    nextBtn.addEventListener('click', next, false);


    apActive = true;
      renderPL();
    plBtn.addEventListener('click', plToggle, false);

    // Create audio object
    audio = new Audio();
    audio.volume = settings.volume;



    if(isEmptyList()) {
      empty();
      return;
    }

    audio.src = playList[index].file;
    audio.preload = 'auto';
    trackTitle.innerHTML = playList[index].title;
    volumeBar.style.height = audio.volume * 100 + '%';
    volumeLength = volumeBar.css('height');

    audio.addEventListener('error', error, false);
    audio.addEventListener('timeupdate', update, false);
    audio.addEventListener('ended', doEnd, false);

    if(settings.autoPlay) {
      audio.play();
      playBtn.classList.add('playing');
      plLi[index].classList.add('pl-current');
    }
  }


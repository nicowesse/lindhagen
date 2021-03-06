$(window).load(function() {
  var wWidth = $(this).width(),
      postHeaderOffset = $('.post-header').offset();
  
  if (wWidth < (16 * 48) ) {
    //$('body, html').animate({ scrollTop : postHeaderOffset.top }, 1000, 'easeOutExpo');
    $('body, html').scrollTop( postHeaderOffset.top );
  }
});

$(document).ready(function() {
  var thumbnail = $('.posts .post-thumbnail'),
      thumbnailWidth = thumbnail.width()
      thumbnailRatio = 16 / 9,
      thumbnailHeight = thumbnailWidth / thumbnailRatio;
      //thumbnail.css('max-height', thumbnailHeight),
      windowHeight = $(window).height();


  $('iframe[src*="embed.spotify.com"]').each( function() {
    $(this).css('width',$(this).parent(1).css('width'));
    $(this).attr('src',$(this).attr('src'));

  });

  $('.show-youtube').click(function() {
    var txt = $('.youtube-audio').is(':hidden') ? 'Har du ikke Spotify? Gjem YouTube' : 'Har du ikke Spotify? Vis YouTube';
    $('.show-youtube').text(txt);
    $('.youtube-audio').slideToggle(500);
  });

  var postThumbnailHeight = $('.post__thumbnail--large').height();

  $(window).scroll(function() {
    if ($(this).scrollTop() > postThumbnailHeight) {
      $('.article-nav').removeClass('on-bg');
      $('.article-nav').addClass('on-white');
    } else if ($(this).scrollTop() < postThumbnailHeight) {
      $('.article-nav').removeClass('on-white');
      $('.article-nav').addClass('on-bg');
    };
  });

  $('.js-to-top').click(function() {
    $('body, html').animate({ scrollTop : 0 }, 3000, 'easeOutExpo');
  });

  $('.show-old-comments').click(function() {
      var txt = $('.old-comments').is(':hidden') ? 'Gjem gamle kommentarer' : 'Vis gamle kommentarer';
      $(this).text(txt);
      $('.old-comments').slideToggle(500);
  });

  $('.video-js').css('width', '100%').css('height', 'auto');

  $('.js-back').click(function(e) {
    if ( history.length > 1 ) {
      e.preventDefault();
      history.go(-1);
    }
  });

  var shakeDat = new Shake({
    threshold: 15, // optional shake strength threshold
    timeout: 1000 // optional, determines the frequency of event generation
  });

  shakeDat.start();

  window.addEventListener('shake', setRickRoll, false);

  cheet('↑ ↑ ↓ ↓ ← → ← → b a', setRickRoll);

  function setRickRoll() {
    console.log("RICK!");
    var easter_url = "wp-content/themes/sondre/assets/img/rick.gif",
        easter_name = "Rick Astley";

    $(".rick_audio")[0].play();
    $('.rick_audio').trigger('tap');

    $('.post__thumbnail').each(function() {
      $(this).css({ 'background-image': 'url("' + easter_url + '")'});
    });
    $('.about-sondre').css({ 'background-image': 'url("' + easter_url + '")'});
    $('.site-header__title').html(easter_name);
    $('.post__title').html(easter_name);
    $('.about-sondre__tagline').html('Hvem er '+ easter_name +'?');
    $('.main-description').html('<p>'+ easter_name +' i fokus</p>');

    if (navigator.vibrate) {
      navigator.vibrate([500,110,500,110,450,110,200,110,170,40,450,110,200,110,170,40,500]);    
    }
  }

  navigator.vibrate = navigator.vibrate ||
                  navigator.webkitVibrate ||
                  navigator.mozVibrate || 
                  navigator.msVibrate;

  if (navigator.vibrate) {
    console.log('we can vibrate');
  } else {
    console.log('no vibration for you :-(');
  }

  cheet('s t o p', function () {
    $(".rick_audio")[0].pause();
  });

});

$(window).resize(function() {
  $('iframe[src*="embed.spotify.com"]').each( function() {
    $(this).css('width',$(this).parent(1).css('width'));
    $(this).attr('src',$(this).attr('src'));
  });
});


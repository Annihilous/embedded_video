var root_url   = "INSERT URL HERE",
    styles     = "<link rel='stylesheet' type='text/css' href='" + root_url + "styles.css'>",
    photo_url  = root_url + "/modal_header_image.jpg",
    video_url  = "https://www.youtube.com/embed/MInCo7eax1c",
    // Set autoplay to 1 to play video on load, or 0 not to
    autoplay   = "1",

    modal      = "<div id='passionVideoModalWrapper'><!-- Modal --><div class='modal fade' id='passionVideoModal' tabindex='-1' role='dialog' aria-labelledby='passionVideoModalLabel'><div class='modal-dialog background-white' role='document'><div class='modal-content'><div class='modal-header'><div id='modal-close-button-wrapper' class='visible-sm visible-md visible-lg visible-xl'><a id='modal-close-button' type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></a></div><div class='text-center'></div><img width='100%' height='auto' src='" + photo_url + "'></div><div class='modal-body'><div class='modal-video-wrapper'><iframe id='passionEmbeddedVideo' class='modal-video' width='640' height='360' src='" + video_url + "?autoplay=" + autoplay + "&enablejsapi=1&version=3&playerapiid=ytplayer' frameborder='0' allowfullscreen allowscriptaccess='always'></iframe></div></div><div class='modal-footer'><a type='button' class='btn btn-primary btn-block' data-dismiss='modal' aria-label='Close'>Continue to Website</a></div></div></div></div></div>";

$("head").prepend(styles);
$("body").append(modal);

$('#passionVideoModal').on('hidden.bs.modal', function (e) {
  $('#passionEmbeddedVideo')[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');
  $('body').removeClass('custom-modal-color');
});

$(window).load(function(){
  $('#passionVideoModal').modal('show');
  $('body').addClass('custom-modal-color');
  document.cookie="passionVideoModalOpened=true";
});

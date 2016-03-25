var styles     = "<link rel='stylesheet' type='text/css' href='http://liningstarz.com/embed_video/styles.css'>"
var video_url  = "https://www.youtube.com/embed/MInCo7eax1c"
var autoplay   = "1"
var photo_url  = "http://liningstarz.com/embed_video/modal_header_image.jpg"
var modal      = "<div id='passionVideoModalWrapper'><!-- Modal --><div class='modal fade' id='passionVideoModal' tabindex='-1' role='dialog' aria-labelledby='passionVideoModalLabel'><div class='modal-dialog container-sm background-white' role='document'><div class='modal-content'><div class='modal-header' style='background-image: url(\" " + photo_url + " \")'><div id='modal-close-button-wrapper'><a id='modal-close-button' type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></a></div><div class='text-center'>    <h2 class='modal-title'>Good Friday</h2></div></div><div class='modal-body'><div class='modal-video-wrapper'><iframe id='passionEmbeddedVideo' class='modal-video' width='640' height='360' src='" + video_url + "?autoplay=" + autoplay + "&enablejsapi=1&version=3&playerapiid=ytplayer' frameborder='0' allowfullscreen allowscriptaccess='always'></iframe></div></div><div class='modal-footer'><a type='button' class='btn btn-primary btn-block' data-dismiss='modal' aria-label='Close'>Continue to Website</a></div></div></div></div></div>";

$("head").prepend(styles);
$("#passion-embedded-video-js").append(modal);

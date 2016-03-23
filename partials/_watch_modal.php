<!-- Modal -->
<div class="modal fade" id="passionVideoModal" tabindex="-1" role="dialog" aria-labelledby="passionVideoModalLabel">
  <div class="modal-dialog container-sm background-white" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-image: url('assets/images/modal_header_image.jpg')">
        <div id="modal-close-button-wrapper">
          <a id="modal-close-button" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></a>
        </div>
        <div class="text-center">    
          <h2 class="modal-title uppercase text-light">Good Friday</h2>
        </div>
      </div>
      <div class="modal-body">
        <div class="modal-video-wrapper">
          <iframe id="passionEmbeddedVideo" class="modal-video" width="640" height="360" src="https://www.youtube.com/embed/MInCo7eax1c?autoplay=0&enablejsapi=1&version=3&playerapiid=ytplayer" frameborder="0" allowfullscreen allowscriptaccess="always"></iframe>
        </div>
      </div>
      <div class="modal-footer">
        <a type="button" class="btn btn-primary btn-block uppercase" data-dismiss="modal" aria-label="Close">Continue to Website</a>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(window).load(function(){
    $('#passionVideoModal').modal('show');
  });
  $('#passionVideoModal').on('hidden.bs.modal', function (e) {
    console.log("Modal Closed");
    $('#passionEmbeddedVideo')[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');
  });
</script>

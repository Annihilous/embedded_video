<div id="passionVideoModalWrapper">
  <!-- Modal -->
  <div class="modal fade" id="passionVideoModal" tabindex="-1" role="dialog" aria-labelledby="passionVideoModalLabel">
    <div class="modal-dialog container-sm background-white" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-image: url('assets/images/modal_header_image.jpg')">
          <div id="modal-close-button-wrapper">
            <a id="modal-close-button" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></a>
          </div>
          <div class="text-center">    
            <h2 class="modal-title">Good Friday</h2>
          </div>
        </div>
        <div class="modal-body">
          <div class="modal-video-wrapper">
            <iframe id="passionEmbeddedVideo" class="modal-video" width="640" height="360" src="https://www.youtube.com/embed/MInCo7eax1c?autoplay=0&enablejsapi=1&version=3&playerapiid=ytplayer" frameborder="0" allowfullscreen allowscriptaccess="always"></iframe>
          </div>
        </div>
        <div class="modal-footer">
          <a type="button" class="btn btn-primary btn-block" data-dismiss="modal" aria-label="Close">Continue to Website</a>
        </div>
      </div>
    </div>
  </div>
</div>

<style type="text/css">
  .custom-modal-color .modal-backdrop {
    background-color: red;
  }

  #passionVideoModal .modal-backdrop {
    background-color: red;
  }

  #passionVideoModalWrapper .btn-primary {
    border-radius: 6px;
    padding: 10px 40px;
    background-color: #F54E56;
    border: none;
    border-radius: 0px;
    font-size: 20px;
    background-color: #F54E56;
    border: none;
  }

  #passionVideoModalWrapper .btn-primary.focus,
  #passionVideoModalWrapper .btn-primary:focus,
  #passionVideoModalWrapper .btn-primary:hover,
  #passionVideoModalWrapper .btn-primary:active,
  #passionVideoModalWrapper .btn-primary:active:focus {
    background-color: white;
    border: none;
    color: #F54E56;
    font-weight: bold;
    box-shadow: none;
  }

  #modal-close-button-wrapper {
    position: relative;
  }

  #modal-close-button {
    position: absolute;
    right: -32px;
    top: -33px;
    border-radius: 50%;
    background-color: black;
    height: 40px;
    width: 40px;
  }

  #passionVideoModalWrapper .modal-header .close {
    opacity: 1;
    margin-top: 0px;
    font-size: 50px;
    text-shadow: none;
    color: white;
    line-height: 30px;
  }

  #passionVideoModalWrapper .modal-content {
    border-radius: 0px;
  }

  #passionVideoModalWrapper .modal-header {
    border-bottom: none;
    padding: 0px;
  }

  #passionVideoModalWrapper .modal-title {
    font-size: 50px;
  }

  #passionVideoModalWrapper .modal-body {
    padding: 0px;
  }

  #passionVideoModalWrapper .modal-footer {
    border-top: none;
    padding: 6px 0px 10px 0px;
    border-top: 1px solid #cccccc;
    background-color: black;
  }

  #passionVideoModalWrapper .modal-form-button-wrapper {
    padding-bottom: 30px;
  }

  #passionVideoModalWrapper .modal-video-wrapper {
    position: relative;
    width: 100%;
    height: 0;
    padding-bottom: 56.25%;
  }

  #passionVideoModalWrapper .modal-video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }

  #passionVideoModalWrapper .modal {
    text-align: center;
  }

  #passionVideoModalWrapper .modal-dialog {
    display: inline-block;
    text-align: center;
    vertical-align: middle;
    max-width: 400px;
    color: white;
    text-transform: uppercase;
  }

  @media screen and (min-width: 768px) { 
    #passionVideoModalWrapper .modal:before {
      display: inline-block;
      vertical-align: middle;
      content: " ";
      height: 100%;
    }
  }
</style>

<script type="text/javascript">
  $(window).load(function(){
    $('#passionVideoModal').modal('show');
    $('body').addClass('custom-modal-color');
  });

  $('#passionVideoModal').on('show.bs.modal', function () {
    $('body').addClass('custom-modal-color');
  });

  $('#passionVideoModal').on('hidden.bs.modal', function (e) {
    $('#passionEmbeddedVideo')[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');
    $('body').removeClass('custom-modal-color');
  });
</script>

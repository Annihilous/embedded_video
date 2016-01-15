<?php include("partials/_head.php"); ?>

<body>
  <?php include("partials/_navigation.php"); ?>

  <div class="pad-section background-image" style="background-image: url('http://cdn.blogjob.com/moneyworld/files/2015/06/Dollar.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-sm-5 give-column">
          <div class="background-white form-wrapper" style="height: 100%;">
            <div class="one-time-gift-wrapper">
              <h4>One Time Gift</h4>
              <p>Give to Passion City Church online</p>
              <form>
                <input class="form-control" type="text" name="one-time-gift-amount" placeholder="Amount"><br>
                <button type="button" class="btn btn-primary btn-block">Give</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-sm-2 text-white text-center give-column give-or">
          OR
        </div>
        <div class="col-sm-5 give-column">
          <?php include("partials/_sign_in.php"); ?>
        </div>
      </div>
    </div>
  </div>

  <div class="background-white">
    <div class="pad-section pad-section-sm container container-md">
      <div class="row">
        <div class="col-xs-12 text-center">
          <h4>Opportunities to Give</h4>
        </div>
        <div class="col-sm-4">
          <div class="give-image-wrapper">
            <img src="assets/images/give1.jpg">
          </div>
          <div class="text-center">
            <h5><b>Online Giving</b></h5>
            <p>Online Giving is a safe and easy way to invest in all God is doing through our House here at Passion City Church.</p>
            <p>Click the link below to create an account or sign in to your existing one, and you can start managing your giving online.</p>
            <p><i>* Giving by credit card is limited to $10,000 per transaction.</i></p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="give-image-wrapper">
            <img src="assets/images/give2.jpg">
          </div>
          <div class="text-center">
            <h5><b>Text to Give</b></h5>
            <p>You can now give to Passion City Church using your mobile phone! Give instantly from your credit / debit card with a single text message.</p>
            <p>Send a text with any amount and PCC to 45777. <span><i>(For example: 50 PCC)</i></span></p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="give-image-wrapper">
            <img src="assets/images/give3.png">
          </div>
          <div class="text-center">
            <h5><b>Cash & Checks</b></h5>
            <p>You can always give to Passion City Church by cash or check. We have a time of giving during each weekened gathering, or you can mail your gift to:</p>
            </br><b>Passion City Church</b>
            </br>PO Box 14145
            </br>Atlanta, GA 30324
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

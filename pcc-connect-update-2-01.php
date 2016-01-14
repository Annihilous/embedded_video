<?php include("partials/_head.php"); ?>

<body>
  <?php include("partials/_navigation.php"); ?>

  <div class="flexslider">
    <ul class="slides">
      <li>
        <img src="https://lh3.ggpht.com/l8leWV9uI8gS-cKDaak6D__cSCVanRmsAGqNRDpXutowAjRRoEmnuhmbTP5A9exBz1w=h900" />
      </li>
      <li>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjZ-McKOtm6Wijwy5onK4MtcUVe7CndFLeAIzh_e3hjpTt3gKT" />
      </li>
      <li>
        <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTvI5aHKF9q5YFgNo1dvYIERaey7pjuErzgMNQEJrV0NkQgBA-t" />
      </li>
    </ul>
  </div>

  <div class="background-lightgray">
    <div class="pad-section pad-section">
      <div class="form-wrapper container container-sm background-white">
        <h3 class="text-center text-blue">
          <img src="assets/images/passioncitychurch_icon.jpg" class="img-icon">
          connect
        </h3>
        <form>
          <input class="form-control" type="text" name="email" placeholder="Email Adress"><br>
          <input class="form-control" type="text" name="password", placeholder="Password">
        </form>
        <br>
        <div class="text-right text-sm">
          <p>Don't have an account yet? <a href="#" data-toggle="modal" data-target="#signUpModal" class="text-blue">Sign Up</a> <nbsp><i class="fa fa-circle fa-dot-custom"></i><nbsp> <a href="#" class="text-blue">Forgot Password?</a></p>
        </div>
        <a href="" class="btn btn-primary btn-block">
          Log In
        </a>
      </div>
    </div>
  </div>
</body>

<!-- Modal -->
<div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="signUpModalLabel">
  <div class="modal-dialog container-sm background-white" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="text-center">
          <h4 class="modal-title" id="signUpModalLabel">Create an Account</h4>
          <p class="text-sm">Keep up with all your serving and giving in one place!</p>
        </div>
      </div>
      <div class="modal-body">
        <div class="container modal-form-container">
          <form>
            <div class="row">
              <div class="col-sm-6">
                <input class="form-control" type="text" name="fname" placeholder="First Name"><br>
              </div>
              <div class="col-sm-6">
                <input class="form-control" type="text" name="lname", placeholder="Last Name">
              </div>
            </div>
            <input class="form-control" type="text" name="email" placeholder="Email Adress"><br>
            <input class="form-control" type="text" name="phone" placeholder="Phone Number"><br>
            <div class="row">
              <div class="col-sm-6">
                <input class="form-control" type="text" name="date-of-birth" placeholder="Date of Birth"><br>
              </div>
              <div class="col-sm-6">
                <input class="form-control" type="text" name="gender", placeholder="Gender">
              </div>
            </div>
            <input class="form-control" type="text" name="address" placeholder="Street Address"><br>
            <div class="row">
              <div class="col-sm-5">
                <input class="form-control" type="text" name="city" placeholder="City"><br>
              </div>
              <div class="col-sm-3">
                <input class="form-control" type="text" name="state" placeholder="State"><br>
              </div>
              <div class="col-sm-4">
                <input class="form-control" type="text" name="zip" placeholder="Zip"><br>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer modal-form-footer">
        <button type="button" class="btn btn-primary btn-block">Sign Up</button>
      </div>
    </div>
  </div>
</div>
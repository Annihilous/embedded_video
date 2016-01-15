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

  <div class="background-white">
    <div class="container container-md">
      <div class="row pad-section-sm">
        <div class="col-sm-8">
          <div class="background-gray">
            <?php include("partials/_online_gift.php"); ?>
          </div>
        </div>
        <div class="col-sm-4">
          <div>
            <div class="text-center background-lightgray pad">
              <h2 class="text-blue no-margin">$20,000</h2>
              <p>Given to date</p>
              <a href="" class="btn btn-primary btn-sm btn-block">
                View History
              </a>
            </div>
            </br>
            <div class="text-center background-lightgray pad">
              <h2 class="text-blue no-margin">2</h2>
              <p>Recurring Gifts</p>
              <a href="" class="btn btn-primary btn-sm btn-block">
                Manage Recurring Gifts
              </a>
            </div>
          </div>
        </div>
      </div>

    <div>
      <table class="table">
        <tr>
          <th class="master-header background-white" colspan="5">
            <div class="pull-right">
              <input class="form-control background-lightgray" type="text" name="gift-search" placeholder="Search">
            </div>
            <h4 class="no-margin">My Recurring Gifts</h4>
          </th>
        </tr>
        <tr class="text-white">
          <th>Gift Name</th>
          <th>Gift Amount</th>
          <th>Frequency</th>
          <th>Next Gift</th>
          <th colspan="2"></th>
        </tr>
        <tr class="background-white">
          <td>Gift 1</td>
          <td>$30</i></td>
          <td>Weekly</i></td>
          <td>Date</td> 
          <td colspan="2"><a href="#" class="btn btn-primary btn-sm btn-block">Manage Recurring Gift</a></td>
        </tr>
        <tr class="background-white">
          <td>Gift 1</td>
          <td>$30</i></td>
          <td>Weekly</i></td>
          <td>Date</td> 
          <td colspan="2"><a href="#" class="btn btn-primary btn-sm btn-block">Manage Recurring Gift</a></td>
        </tr>

      </table>
    </div>

  </div>
</body>

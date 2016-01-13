<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/static_page_template/index.php">Home</a></li>
        <li><a href="/static_page_template/index.php">Serve</a></li>
        <li><a href="/static_page_template/index.php">Give</a></li>
        <li><a href="/static_page_template/index.php">Login</a></li>
        <li><a href="#" data-toggle="modal" data-target="#editProfileModal" class="text-blue">Edit Profile</a></li>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<?php include("partials/_edit_profile_modal.php"); ?>

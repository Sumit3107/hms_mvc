<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Staff Login</title>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="{{ asset('js/dashboard.js') }}"></script>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
  <!-- MDB icon -->
  <link rel="icon" href="{{ asset('img/mdb-favicon.ico') }}" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}" />
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  <!--Login Page CSS-->
  <link rel="stylesheet" href="{{ asset('css/slogin.css') }}">
</head>
<body>
  <!-- Start your project here-->
  <div class="container-fluid d-flex p-0 m-0">
    <div class="col-3" id="sideBar" >
      <div class="row" styl="color:white;">
        <div class="col-12 d-flex align-items-center" style="height: 10vh;">
          <img src="img/hms.png" id="hms" />
        </div>
      </div>
      <div class="row">
        <div class="col-12 p-0 m-0">
          <ul id="sideBarMenu" class="p-0 m-0">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Dashboard</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-9" id="viewHolder" style="background-image: url('/img/staff.jpeg'); background-size: cover; background-repeat: no-repeat;">
      <div class="container">
        <div class="d-flex justify-content-center h-100">
          <div class="card" style="max-height:auto;">
            <div class="card-header">
              <h3>Sign In</h3>
            </div>
            <div class="card-body">
              <form method="post" action="staffdash">@csrf
                <div class="input-group form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                  </div>
                  <input type="number" class="form-control" placeholder="UserID" name="userid" required>

                </div>
                <div class="input-group form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                  </div>
                  <input type="password" class="form-control" placeholder="Password" name="pass" required>
                </div>
                <div class="form-group">
                  <input type="submit" value="Login" id="loginb" class="btn float-right login_btn">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End your project here-->

  <!-- jQuery -->
  <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript" src="{{ asset('js/staff.js') }}"></script>
</body>

</html>
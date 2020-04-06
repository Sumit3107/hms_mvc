<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Guest Dashboard</title>
  <style>
    #shiftd {
    padding:3%;
    background-color: rgba(229, 235, 240, 0.2);
    height: auto;
    }
    .an {
        text-decoration: none;
        display: inline-block;
        padding: 8px 16px;
      }

    .an:hover {
        background-color: #6164B2;
        color: black;
      }

    .previous {
        background-color: #f1f1f1;
        color: black;
      }
  </style>
  <link  rel="stylesheet" href="{{ asset('css/app.css') }}" >
  <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->

  <!-- MDB icon -->
  <link rel="icon" href="{{ asset('img/mdb-favicon.ico') }}" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}" />
  <!-- Your custom styles (optional) -->
</head>
<body>
  <!-- Start your project here-->
  <div class="container-fluid d-flex p-0 m-0">
    <div class="col-3" id="sideBar">
      <div class="row">
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
    <div class="col-9" id="viewHolder" style="background-image: url('{{ asset('img/guest.jpg') }}'); background-size: cover; background-repeat: no-repeat;">
      <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-4 hidden-xs display-table-cell v-align box" id="navigation" style="background-color:rgba(23,23,23,0.8);">
                <div class="logo">
                    <a hef="home.html"><img src="{{ asset('img/user.png') }}" alt="user_logo" class="rounded-circle hidden-xs hidden-sm"></a>
                </div>
                <div class="navi">
                    <div class="col-10 rounded ml-3 details" style="background-color:#fff;">
                      <div class="col-11 panel panel-default shadow-sm p-2 mb-3 ml-2 bg-green rounded">
                        <center><?php echo "Welcome";?></center>
                      </div>
                      <hr style="color:black;">
                      <div class="overflow-auto">
                        <ul>
                          <li> <span>ID:</span>1205 </li>
                          <hr style="color:black;">
                          <li><span>Age:</span> 20 </li>
                          <hr style="color:black;">
                          <li><span>D.O.B:</span> 31/07/1999</li>
                          <hr style="color:black;">
                          <li><span>Email:</span> roy.sumit31@gmail.com </li>
                          <hr style="color:black;">
                          <li><span>CheckIN:</span> 05/04/2020 </li>
                          <!-- <li><span>:</span>11701545 </li>
                          <li><span>ID:</span>11701545 </li> -->
                        </ul>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-8 display-table-cell v-align">
              <div class="row mb-5">
                <div class="col text-right">
                  <div class="btn btn-danger btn-sm">
                    Log Out
                  </div>   
                </div>
              </div>
              <div class="col-12 mt-5 pt-5" id="maindash" style="background-color:rgba(23,23,23,0.2); height:auto;">
                <div class="container">
                <div class="row">

                <!--team-1-->
                <div class="col-lg-6 mt-4">
                <div class="our-team-main">

                <div class="team-front">
                  <img src="{{ asset('img/renew.png') }}" alt="">
                  <h3 >Renew <br> Services</h3>
                </div>

                <div class="team-back text-center pt-3 mt-5">
                  <div class="btn btn-danger btn-sm" id="shiftb">
                    Renew
                  </div>
                </div>

                </div>
                </div>
                <!--team-1-->

                <!--team-2-->
                <div class="col-lg-6 mt-4">
                <div class="our-team-main">

                <div class="team-front">
                <img src="{{ asset('img/bill.png') }}" class="img-fluid" />
                <h3  >Billing</h3>
                <p>Service</p>
                </div>

                <div class="team-back text-center pt-3 mt-5">
                   <div class="btn btn-danger btn-sm" id="leaveb">
                    Billing
                  </div>
                </div>

                </div>
                </div>
                <!--team-2-->

                <!--team-3-->
                <div class="col-lg-6">
                <div class="our-team-main">

                <div class="team-front">
                <img src="{{ asset('img/details.png') }}" class="img-fluid" />
                <h3>Personal <br> Details</h3>
                </div>

                <div class="team-back text-center pt-3 mt-5">
                   <div class="btn btn-danger btn-sm" id="updateb">
                    View
                  </div>
                </div>

                </div>
                </div>
                <!--team-3-->

                <!--team-4-->
                <div class="col-lg-6">
                <div class="our-team-main">

                <div class="team-front">
                <img src="{{ asset('img/service.jpg') }}" class="img-fluid" />
                <h3>Room </h3>
                <p>Services</p>
                </div>

                <div class="team-back text-center pt-3 mt-5">
                   <div class="btn btn-danger btn-sm" id="salaryb">
                    Room Service
                  </div>
                </div>

                </div>
                </div>
                <!--team-4-->

                
              </div>      
            </div>
        </div>
              <!--dashboard div ends  -->
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
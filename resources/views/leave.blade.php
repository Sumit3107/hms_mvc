<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Leave</title>
  <style>
    #leaved {
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
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  
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
    <div class="col-9" id="viewHolder" style="background-image: url('{{ asset('img/staff.jpeg') }}'); background-size: cover; background-repeat: no-repeat;">
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
                          <li> <span>ID:</span> 11701545 </li>
                          <hr style="color:black;">
                          <li><span>Age:</span> 20 </li>
                          <hr style="color:black;">
                          <li><span>D.O.B:</span> 31/07/1999</li>
                          <hr style="color:black;">
                          <li><span>Email:</span> roy.sumit31@gmail.com </li>
                          <hr style="color:black;">
                          <li><span>Designation:</span> Manager </li>
                          <!-- <li><span>:</span>11701545 </li>
                          <li><span>ID:</span>11701545 </li> -->
                        </ul>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-8 display-table-cell v-align">
              <div class="row">
                <div class="col text-right">
                  <div class="btn btn-danger btn-sm">
                    Log Out
                  </div>   
                </div>
              </div>
              
            <div class="col-12" id="leaved">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="schedule-warp">
                      <div class="day-one">Apply For Leave<a href="javascript:history.go(0)" id="an" class="ml-5 previous">&laquo; Dashboard</a></div>
                        <form action="" method="get">
                                <label class="col-3" id="startd">Start Date:</label>
                                <input class="col-6" type="date" name="datepicker" id="sdate"><br>
                                <label class="col-3" id="startt">Start time</label>
                                <input class="col-3" type="time" name="datetime" id="stime">
                                <hr>
                                <label class="col-3" id="endd">End Date:</label>
                                <input class="col-6" type="date" name="datepicker" id="sdate"><br>
                                <label class="col-3" id="endt">End time</label>
                                <input class="col-3" type="time" name="datetime" id="stime">
                                <br>
                                <hr>
                                <label class="col-3" id="reason">Reason</label>
                                <textarea name="reason" id="reason" cols="40" rows="3"></textarea><br>
                                <div class="text-center">
                                    <button type="button" class="btn-sm btn-success mt-3" onclick="myfunc()">Apply</button>
                                </div>
                        </form>
                        <!-- end date -->
                      </div>
                    </div>        
                  </div> 
                </div>
              </div> 
                    <!--end leave dashboard  -->
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
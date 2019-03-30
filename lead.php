<?php
// echo "php working";
$status = ' ';
$pid = ' ';


$conn = mysqli_connect("localhost","root","","truck");
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
  echo "Connected successfully";

$sql2 = " ";
$sql3 = " ";

if (isset($_POST['save_changes'])){
  $radioVal = $_POST["exampleRadios"];

  if($radioVal == "converted"){
    $sql2 = "UPDATE lead_table SET action='converted' WHERE detail_id=$pid";
    $sql3 = "UPDATE lead_stat SET inprocess = inprocess - 1 AND converted = converted + 1 WHERE route=$location";
  }
  else if ($radioVal == "interested"){
    $sql2 = "UPDATE lead_table SET action='interested' WHERE detail_id=$pid";
    $sql3 = "UPDATE lead_stat SET inprocess = inprocess - 1 AND (interested = interested + 1) WHERE route=$location"; 
  }
  else if ($radioVal == "uncontacted"){
    $sql2 = "UPDATE lead_table SET action='uncontacted' WHERE detail_id=$pid";
    $sql3 = "UPDATE lead_stat SET inprocess = inprocess - 1 AND uncontacted = uncontacted + 1 WHERE route=$location";
  }
}

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- DataTable Cdn -->
  <link rel="stylesheet" type="text/css"
    href="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.18/af-2.3.2/cr-1.5.0/fc-3.2.5/fh-3.1.4/kt-2.5.0/r-2.2.2/rg-1.1.0/rr-1.2.4/sc-1.5.0/sl-1.2.6/datatables.min.css" />
  <script type="text/javascript"
    src="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.18/af-2.3.2/cr-1.5.0/fc-3.2.5/fh-3.1.4/kt-2.5.0/r-2.2.2/rg-1.1.0/rr-1.2.4/sc-1.5.0/sl-1.2.6/datatables.min.js"></script>
  
  <!-- Datatable end -->
  <!-- Css File Link -->
  <link rel="stylesheet" href="css/index.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
    integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <!-- Material Icon -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Feather icon -->
  <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
  <title>Analysed</title>
  <!-- font awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body class="bg-light">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="row navbar navbar-expand-md navbar-light bg-light fixed-top">
      <nav class="col-2 d-xl-block d-lg-block d-md-block d-none">
        <div class="upper_Layer">
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <img src="img/kruze.png" alt="logo" class="img-fluid ml-4 mt-2">

            <div class="mx-auto mt-3 d-block sidebarCollapse" onclick="myFunction();">
              <a class="material-icons ml-5" id="showMore" style="color:white">toggle_off</a>
            </div>
          </div>
        </div>
      </nav>
      <nav class="col-md-10 col-sm-12">
        <div class="d-flex d-row justify-content-between">
          <div onclick="myFunctions();"
            class="sidebarCollapse navbar-toggler d-md-none d-lg-none d-xl-none d-inline-flex float-left mt-2">
            <i class="material-icons" style="color:white;" id="showmore">toggle_off</i>
          </div>
          <img src="img/kruze.png" alt="logo" class="img-fluid text-center navbar-toggler"
            style="height: 50px; width: 100px">
          <button class="navbar-toggler float-right" type="button" data-toggle="collapse"
            data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="material-icons mt-2" style="color:white">more_horiz</i>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <div class="d-flex flex-row col-12">
            <div class="col-md-6 d-none d-md-block">
              <div class="d-flex flex-row justify-content-xl-start justify-content-md-center">
                <i class="material-icons mt-2 text-muted" id="fullScreen" onclick="openFullscreen();">fullscreen</i>
              </div>
            </div>
            <div class="col-md-6 col-sm-12 d-flex flex-row justify-content-md-end justify-content-sm-center">
              <a class=" nav-link" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <span>John Doe <i data-feather="chevron-down" class=""></i></span>
              </a>
              <div class="dropdown-menu mt-3" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item mt-3" href="profile.html"><i data-feather="user" class="mr-2"></i> Profile</a>
                <a class="dropdown-item mt-3" href="#"><i data-feather="log-out" class="mr-2"></i> Logout</a>
              </div>
            </div>
          </div>
        </div>
  </div>
  </nav>
  </nav>
  </div>
  <!-- Navbar end -->
  <!-- Right Sidebar -->
  <nav class="sidebar">
    <ul class="list components nav">
      <li class="nav-item active sideactive">
        <a href="index.html" class="nav-link"><i data-feather="home"></i><span class="ml-2"></span> Dashboard</a>
      </li>
      <li>
        <a href="lead.html" class="nav-link"><i data-feather="globe"></i><span class="ml-2"></span> Lead</a>
      </li>
      <li>
        <a href="lead_status.html" class="nav-link"> <i data-feather="database"></i><span class="ml-2"></span> Lead
          Status</a>
      </li>
      <li>
        <a href="route.html" class="nav-link"><i data-feather="list"></i><span class="ml-2"></span> Route</a>
      </li>
      <li>
        <a href="report.html" class="nav-link"><i data-feather="edit-2"></i><span class="ml-2"></span> Report</a>
      </li>
    </ul>


  </nav>
  <!-- Right Sidebar end -->
  <!-- Content start here -->

<div id="content">
  <div class="container-fluid">
    <div class="row mt-5">
      <table id="myTable" class="display col-12" style="width:100%">
        <thead>
          <tr>
            <th>Name</th>
            <th>Company Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Start Time</th>
            <th>End Time</th>
            <th>Flexible Time</th>
            <th>Pickup Location</th>
            <th>Pickup Landmark</th>
            <th>Drop Location</th>
            <th>Drop Stop</th>
            <th>Note</th>
            <th>Action status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          
        <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "truck";

          // Create connection
          $conn = mysqli_connect($servername, $username, $password, $dbname);
          // Check connection
          if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
          }
    
  

          $sql = "SELECT emp_name,detail_id,company_name,email,mobile,start_time,end_time,flexible_time,pickup_loc,pickup_landmark,drop_loc,drop_stop,note,action FROM lead_table";
          $result = mysqli_query($conn, $sql);

          if (mysqli_num_rows($result) > 0) {
          // output data of each row

          $row = mysqli_fetch_assoc($result);

          while($row = $result->fetch_assoc()) {
            $pid = $row["detail_id"];
            $status = $row["action"];

            echo "<tr><td>" . $row["emp_name"]. "</td><td>" . $row["company_name"] . "</td><td>" . $row["email"]. "</td><td>" . $row["mobile"]."</td><td>" . $row["start_time"]."</td><td>" . $row["end_time"]."</td><td>" . $row["flexible_time"]."</td><td>" . $row["pickup_loc"]. "</td><td>" . $row["pickup_landmark"]."</td><td>" . $row["drop_loc"]."</td><td>" . $row["drop_stop"]."</td><td>" . $row["note"]."</td><td>". $row["action"]."</td>";
           // echo "<td> $status </td>";
                     echo '<td class="dropdown id="$pid" name="$pid">
              <button type="button" class="btn dropdown-color" data-toggle="modal" data-target="#leadModal"><i class="fa fa-cog mr-2" aria-hidden="true"></i><i data-feather="chevron-down"></i>
              </button>
            </td>
          </tr>';

          }
          
 
          } else {
            echo "0 results";
          }

          mysqli_close($conn);
        ?>





        </tbody>
        <tfoot>
          <tr>
            <th>Name</th>
            <th>Company Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Start Time</th>
            <th>End Time</th>
            <th>Flexible Time</th>
            <th>Pickup Location</th>
            <th>Pickup Landmark</th>
            <th>Drop Location</th>
            <th>Drop Stop</th>
            <th>Note</th>
          </tr>
        </tfoot>
      </table>
      <!-- modal of button start here -->
      <div class="modal fade" id="leadModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Lead Status</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
              <form method = "post" action = "<?php $_PHP_SELF ?>">
              <div class="form-check">
                <input class="form-check-input inputabs" type="radio" name="exampleRadios" id="exampleRadios1" value="converted" >
                <label class="form-check-label" for="exampleRadios1">
                  Converted
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input inputabs" type="radio" name="exampleRadios" id="exampleRadios2" value="interested" checked>
                <label class="form-check-label" for="exampleRadios2">
                  Interested
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input inputabs" type="radio" name="exampleRadios" id="exampleRadios1" value="inprocess">
                <label class="form-check-label" for="exampleRadios1">
                  In Process
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input inputabs" type="radio" name="exampleRadios" id="exampleRadios2" value="uncontacted">
                <label class="form-check-label" for="exampleRadios2">
                  Uncontacted
                </label>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" name="save_changes" value="Result" class="btn btn-primary">Save changes</button>
            </div>
          </form>
          </div>
        </div>
      </div>
      <!-- modal of button end here -->
    </div>
  </div>
</div>




<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
  integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
  integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<!-- jQuery Custom Scroller CDN -->
<script
  src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- Datatable -->
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

<script src="js/script.js"></script>
<script>
  $(document).ready(function () {
    $('#myTable').DataTable();
  });
</script>
<script>
  $('#myTable').DataTable({
    responsive: true
  });

  $(document).ready(function () {
    $('#example').DataTable({
      "scrollX": true
    });
  });
</script>
  <script>
    $(document).ready(function(){
      if(localStorage.selected) {
        $('#' + localStorage.selected ).attr('checked', true);
      }
      $('.inputabs').click(function(){
        localStorage.setItem("selected", this.id);
      });
    });

</script>
<!-- end datatable -->




</script>

</body>

</html>

<?php 

//$message="";
  
$conn = mysqli_connect("localhost","root","","truck");
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
  echo "Connected successfully";

/*
$sql = "INSERT INTO lead_table(emp_name, company_name, email, mobile, start_time, end_time, flexible_time, pickup_loc, pickup_landmark, drop_loc, drop_stop, note,user_id)
VALUES ('".$_POST["emp_name"]."','".$_POST["company_name"]."','".$_POST["email"]."','".$_POST["mob_number"]."','".$_POST["start_time"]."','".$_POST["end_time"]."','".$_POST["flex_time"]."','".$_POST["pickup_loc"]."','".$_POST["pickup_landmark"]."','".$_POST["drop_loc"]."','".$_POST["drop_stop"]."','".$_POST["note"]."',1)";
*/

$sql = "INSERT INTO lead_table(emp_name, company_name, email, mobile, start_time, end_time, flexible_time, pickup_loc, pickup_landmark, drop_loc, drop_stop, note,user_id)
VALUES ('".$_POST["emp_name"]."','".$_POST["company_name"]."','".$_POST["email"]."','".$_POST["mob_number"]."','".$_POST["start_time"]."','".$_POST["end_time"]."','".$_POST["flex_time"]."','".$_POST["pickup_loc"]."','".$_POST["pickup_landmark"]."','".$_POST["drop_loc"]."','".$_POST["drop_stop"]."','".$_POST["note"]."',1)";


if (mysqli_query($conn, $sql)) {
    echo "record added successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>





<!doctype html>
<html lang="en">


<head>
    <title>Analysed</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Css File Link -->
    <link rel="stylesheet" href="css/index.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- Material Icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Feather icon -->
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
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
                                <i class="material-icons mt-2 text-muted" id="fullScreen"
                                    onclick="openFullscreen();">fullscreen</i>
                            </div>
                        </div>
                        <div
                            class="col-md-6 col-sm-12 d-flex flex-row justify-content-md-end justify-content-sm-center">
                            <a class=" nav-link" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <span>John Doe <i data-feather="chevron-down" class=""></i></span>
                            </a>
                            <div class="dropdown-menu mt-3" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item mt-3" href="profile.html"><i data-feather="user"
                                        class="mr-2"></i> Profile</a>
                                <a class="dropdown-item mt-3" href="#"><i data-feather="log-out" class="mr-2"></i>
                                    Logout</a>
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
                <a href="index.html" class="nav-link"><i data-feather="home"></i><span class="ml-2"></span>
                    Dashboard</a>
            </li>
            <li>
                <a href="lead.html" class="nav-link"><i data-feather="globe"></i><span class="ml-2"></span> Lead</a>
            </li>
            <li>
                <a href="lead_status.html" class="nav-link"> <i data-feather="database"></i><span class="ml-2"></span>
                    Lead Status</a>
            </li>
            <li>
                <a href="route.html" class="nav-link"><i data-feather="list"></i><span class="ml-2"></span> Route</a>
            </li>
            <li>
                <a href="report.html" class="nav-link"><i data-feather="edit-2"></i><span class="ml-2"></span>
                    Report</a>
            </li>
        </ul>


    </nav>
    <!-- Right Sidebar end -->
    
    <!-- Content start here -->
<div id="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mt-5 p-5 form_content">
                <form method="POST" action = "<?php $_PHP_SELF ?>">
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Full Name</label>
                        <div class="col-sm-10">
                            <input name="emp_name" type="text" class="form-control" id="staticEmail" placeholder="Employee Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input name="email" type="email" class="form-control" id="staticEmail" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Mobile</label>
                        <div class="col-sm-10">
                            <input name="mob_number" type="number" class="form-control" id="staticEmail" placeholder="Mobile Number">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Company Name</label>
                        <div class="col-sm-10">
                            <input name="company_name" type="text" class="form-control" id="inputPassword"
                                placeholder="GoKruze">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Shift Start Time</label>
                        <div class="col-sm-10">
                            <input name="start_time" type="time" class="form-control" id="staticEmail"
                                placeholder="9:00:00 AM (Login Time)">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Shift End Time</label>
                        <div class="col-sm-10">
                            <input name="end_time" type="time" class="form-control" id="inputPassword" placeholder="6:30:00 AM (Logout Time)">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Flexible Time</label>
                        <div class="col-sm-10">
                            <input name="flex_time" type="time" class="form-control" id="staticEmail" placeholder="7:30:00 AM (Flexible Time)">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">PickUp Location</label>
                        <div class="col-sm-10">
                            <select name="pickup_loc" class="form-control" id="exampleFormControlSelect1">
                                <option selected>Borivali</option>
                                <option>Andheri</option>
                                <option>Kandivali</option>
                                <option>Malad</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Pickup Landmark</label>
                        <div class="col-sm-10">
                            <input name="pickup_landmark" type="text" class="form-control" id="inputPassword" placeholder="On Link Rd">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">Drop Location</label>
                        <div class="col-sm-10">
                            <select name="drop_loc" class="form-control" id="exampleFormControlSelect1">
                                <option selected>Powai</option>
                                <option>Churchgate</option>
                                <option>Ville Parle</option>
                                <option>Santacruz</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">Drop Stop</label>
                        <div class="col-sm-10">
                            <select name="drop_stop" class="form-control" id="exampleFormControlSelect1">
                                <option selected>Business Park</option>
                                <option>Nana Nani park</option>
                                <option>Powai Lake</option>
                                <option>Jagruti Nagar</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Additional Note</label>
                        <div class="col-sm-10">
                            <input name="note" type="text" class="form-control" id="staticEmail" placeholder="Customer would like weekly pass">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-outline-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <!-- /* Popper.JS */ -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
    <!-- /* Bootstrap JS  */ -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>
    <!-- /* jQuery Custom Scroller CDN */ -->
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/script.js"></script>

</body>

</html>

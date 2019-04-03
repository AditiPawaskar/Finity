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

    $sql = "SELECT full_name, password, email, mob_number, user_name FROM user WHERE user_id = 1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row

        $row = mysqli_fetch_assoc($result);
        $full_name = $row["full_name"];
        $password = $row["password"];
        $email = $row["email"];
        $mob_number = $row["mob_number"];

    } else {
        echo "0 results";
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
                    <div class
                    ="d-flex flex-row col-12">
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
<main class="container-fluid" id="content">
    <section class="row">
        <div class="col-12">
            <div class="jumbotron jumbotron-fluid d-block d-lg-none">
                <div class="text-center">
                    <div>
                        <img src="img/user-img.jpg" alt="" class="img-thumbnail">
                    </div>
                    <div>
                        <h5 class="font-weight-normal"><?php echo $full_name; ?></h5>
                        <h6 class="font-weight-normal">Web Designer</h6>
                    </div>
                </div>
            </div>
            <div class="card text-white profile_background d-none d-lg-block d-xl-block">
                <img src="img/cover.jpg" class="card-img" alt="cover">
                <div
                    class="card-img-overlay mt-5 d-flex flex-md-row flex-sm-column justify-content-md-between justify-content-sm-center">
                    <div class="d-flex flex-rows align-self-start">
                        <img src="img/user-img.jpg" alt="" class="mt-xl-4 mt-lg-0 mb-lg-5 ml-3 img-thumbnail">
                        <div>
                            <h5 class="mt-xl-4 mt-lg-0 ml-4 font-weight-normal"><?php echo $full_name; ?></h5>
                            <h6 class="font-weight-normal ml-4 mb-lg-5">Web Designer</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <!-- tab end -->
            <!-- Tab 1 Personal Info -->
           <div class="row mt-5 col-12">
               <div class="col-12 ">
                    <h5 class="text-center">About Me</h5>
                    <div class="d-flex justify-content-center">
                        <table class="table col-6">
                            <tbody>
                                <tr>
                                    <th scope="row">Full Name</th>
                                    <td><?php echo $full_name; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Password</th>
                                    <td><?php echo $password; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Email</th>
                                    <td><?php echo $email; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Mobile Number</th>
                                    <td><?php echo $mob_number; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
           </div>
            <!-- Tab 1 end personal info -->

        </div>
    </section>
</main>





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
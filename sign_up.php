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

$sql = "INSERT INTO user (full_name, password, email, mob_number, user_name)
VALUES ('".$_POST["username"]."','".$_POST["password"]."','".$_POST["email"]."','".$_POST["mobile_number"]."','".$_POST["username"]."')";

if (mysqli_query($conn, $sql)) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Kruze</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="css/sign.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Material Icon -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Feather icon -->
  <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
  <!-- font awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body style="background-image: url('img/bus.jpg');">
  <div class="container h-100">
    <div class="d-flex h-100 justify-content-center align-items-center">
      <div class="card">
        <div class="card-header mx-auto">
          <h3>Register</h3>
        </div>
        <div class="card-body">
          <form method = "post" action = "<?php $_PHP_SELF ?>">
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
              </div>
              <input name="username" type="text" class="form-control" placeholder="username" id="username">

            </div>
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
              </div>
              <input type="password" name="password" class="form-control" placeholder="password" id="password">
            </div>
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
              </div>
              <input name="email" type="email" class="form-control" placeholder="email" id="email">
            </div>
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-phone"></i></span>
              </div>
              <input type="number" name="mobile_number" class="form-control" placeholder="mobile number" id="mobile_number">
            </div>
            <div class="form-group justify-content-center d-flex">
              <input type="submit" value="Register" class="btn login_btn">
            </div>
          </form>
        </div>
        <div class="card-footer">
          <div class="d-flex justify-content-center links">
            Already have an account?<a href="sign_in.html">Sign In</a>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>

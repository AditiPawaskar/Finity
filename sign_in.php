<?php  
    if(isset($_POST["submit"])){  
      
    if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
        $user=$_POST['user'];  
        $pass=$_POST['pass'];   
      
      
        $con=mysqli_connect('localhost','root','') or die(mysqli_error());  
        mysqli_select_db($con, 'truck') or die("cannot select DB");  
      
        $query=mysqli_query($con ,"SELECT * FROM user WHERE username='".$user."' AND password='".$pass."'"); 

        $numrows=mysqli_num_rows($query);  
        if($numrows!=0)  
        {  
        while($row=mysqli_fetch_assoc($query))  
        {  
        $dbusername=$row['username'];  
        $dbpassword=$row['password'];
        $dbuserid=$row['pid'];
        }  
      
        if($user == $dbusername && $pass == $dbpassword)  
        {  
        session_start();  
        $_SESSION['lllog'] = true;
        $_SESSION['user_id']= $user;
        echo $_SESSION['user_id'];

        /* Redirect browser */  
        header("Location: ../form.php");  
        }  
        } else {  
        echo "Invalid username or password!";  
        }  
      
    } else {  
        echo "All fields are required!";  
    }  
  }  
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
  <div class="message"><?php { echo $message3; } ?></div>
  <div class="container h-100">
    <div class="d-flex h-100 justify-content-center align-items-center">
      <div class="card">
        <div class="card-header mx-auto">
          <h3>Login</h3>
        </div>
        <div class="card-body">
          <form name="frmUser" method="post" action="">
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
              </div>
              <input name="username" type="text" class="form-control" placeholder="username">

            </div>
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
              </div>
              <input type="password" class="form-control" placeholder="password">
            </div>
            <div class="row align-items-center remember">
              <input type="checkbox">Remember Me
            </div>
            <div class="form-group">
              <input name="password" name="submit" type="submit" value="Login" class="btn float-right login_btn">
            </div>
          </form>
        </div>
        <div class="card-footer">
          <div class="d-flex justify-content-center links">
            Don't have an account?<a href="sign_up.html">Sign Up</a>
          </div>
          <div class="d-flex justify-content-center">
            <a href="forget_pass.html">Forgot your password?</a>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>

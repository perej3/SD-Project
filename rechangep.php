<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Recipe Mania</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
         <style>
            body{
               background-repeat:no-repeat;
               background-size:cover;
            }
        </style>
    </head>
    
       <body background = images\wallpaper.jpg>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <img src="images\logo.png" width="30px" height="30px">
            <a class="navbar-brand" href="home.php">Recipe Mania</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="home.php">Home</a>
            </li>
        <li class="nav-item">
            <a class="nav-link" href="create.php">Submit your Creation</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="browse.php">Browse Creations</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="userbrowse.php">Browse User Creations</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="about.php">Contact Us</a>
        </li>
          </ul>
        
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active float-right">
                <a class="nav-link" href="login.php">Login</a>   
            </li>
            <li class="nav-item float-right">
                <a class="nav-link" href="register.php">Register</a>    
            </li>
        </ul>
      
    
  </div>     
</nav>

        <center><img src="images\logo.png" width="200px" height="200px"></center>
<div class= "jumbotron">
            <h3>Forgot Password?</h3>
        
<form method="post" action="rechangep.php">
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
  </div>
  <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
  </div>
    <div class="form-group">
    <label>Code</label>
    <input type="text" class="form-control" id="code" name="code" placeholder="Code">
  </div>
    <div class="form-group">
    <label>New Password</label>
    <input type="text" class="form-control" id="pass" name="pass" placeholder="New password">
  </div>
    
  <button type="submit" name="Submit" value="Submit" class="btn btn-primary">Log In</button>
 
</form>

    <?php
    
    if(isset($_SESSION['username'])){
                //user is already logged in, so no need to process form
                header("location:home.php");
            }
   else{ 
    if(isset($_POST['Submit'])){
        
        $email = $_POST['email'];
        $username = $_POST['username'];
        $code = $_POST['code'];
        $password = $_POST['pass'];
 
        
    if(empty($email) || empty($username) || empty($code) || empty($password)){
                       echo "<p class= 'text-danger'>Make sure that all your fields are entered</p>";
                   }
        else{
                       $link = mysqli_connect("localhost","root","","project",3306);
                       $sql = "SELECT * FROM users WHERE Username='$username' AND User_password='$code'";
                       
                       $result = mysqli_query($link,$sql) or die(mysqli_error($link));
                       
                       if (mysqli_num_rows($result) == 1){
                        
                        $sql = "UPDATE Users
                               SET User_Password = '$password'
                                WHERE Username='$username' AND Email='$email'";
                       
                       $result = mysqli_query($link,$sql) or die(mysqli_error($link));
                           
                           header("location:login.php");
                       }
                        
                       
                   }
    }
   }


?>
    
    </div>
    
    </body>
    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    
</html>
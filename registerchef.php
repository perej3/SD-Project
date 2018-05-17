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
            <li class="nav-item  float-right">
                <a class="nav-link" href="login.php">User Login</a>   
            </li>
            <li class="nav-item float-right">
                <a class="nav-link" href="register.php">Register User</a>    
            </li>
            <li class="nav-item  float-right">
                <a class="nav-link" href="loginchef.php">Chef Login</a>   
            </li>
            <li class="nav-item active float-right">
                <a class="nav-link" href="registerchef.php">Register Chef</a>   
            </li>
        </ul>
      
    
  </div>     
</nav>

        <center><img src="images\logo.png" width="200px" height="200px"></center>
<div class= "jumbotron">
            <h3>Recipe Mania</h3>
            <p>A recipe has no soul... You as the cook must bring the soul to the recipe. So what are you waiting for? Grab your apron and get ready to start your culinary adventure!!</p>
            
<form method="post" action="registerchef.php">
  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
  </div>
    <div class="form-group">
    <label>First Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="First Name">
  </div>
    <div class="form-group">
    <label>Last Name</label>
    <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name">
    </div>    
    <div class="form-group">
    <label>Institute</label>
    <input type="text" class="form-control" id="qual" name="qual" placeholder="Institute">
    </div>
    
  <button type="submit" name="Submit" value="Submit" class="btn btn-primary">Submit</button>
 
</form>
    
   <?php
    
    if(isset($_POST['Submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $first_name = $_POST['name'];
        $last_name = $_POST['lname'];
        $email = $_POST['email'];
        $qual = $_POST['qual'];
        $error = false;
        
        
    
        if(empty($username)){
            echo "<br/>";
            echo "<p class= 'text-danger'>Please enter your username</p>";
            
            $error = true;
        }
        if(empty($password)){
            
            echo "<br/>";
            echo "<p class= 'text-danger'>Please enter your password</p>";
            $error = true;
           
        }
        if(empty($first_name)){
            
            echo "<br/>";
            echo "<p class= 'text-danger'>Please enter your first name</p>";
            $error = true;
            
        }
        if(empty($last_name)){
            
            echo "<br/>";
            echo "<p class= 'text-danger'>Please enter your last name</p>";
            $error = true;
            
        }
        if(empty($email)){
            
            echo "<br/>";
            echo "<p class= 'text-danger'>Please enter your email</p>";
            $error = true;
            
        }
        if(empty($qual) || $qual != "ITS"){
            echo "<br/>";
            echo "<p class= 'text-danger'>Please enter a valid institution</p>";
            
            $error = true;
        }
    if($error == true){
        
        echo "<br/>";
         echo "<p class= 'text-danger'>Make sure that all your credentials are entered</p>";
        
    }
        else{
            
        $link = mysqli_connect("localhost","root","","project",3306);
        
        $sql = "INSERT INTO chefs (Chef_username,Chef_password,email,Name,Surname) VALUES ('$username','$password','$email','$first_name','$last_name')";
        
        mysqli_query($link, $sql);
        header('Location: '.'loginchef.php');
            
        }
    }
        



?>
    
    </div>
    
    </body>
    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    
</html>



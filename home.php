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
            <li class="nav-item active">
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
            <?php
                if(isset($_SESSION['username'])){
                echo '<li class="nav-item float-right">';
                echo  '<a class="nav-link" href="logout.php">Logout</a>';   
                echo '</li>';
                  
            }
            else{
                echo '<li class="nav-item float-right">';
                echo '<a class="nav-link" href="login.php">User Login</a>';   
                echo '</li>';
                echo '<li class="nav-item float-right">';
                echo '<a class="nav-link" href="register.php">Register User</a>';
                echo '</li>';
                echo '<li class="nav-item float-right">';
                echo '<a class="nav-link" href="loginchef.php">Chef Login</a>';
                echo  '</li>';
                echo '<li class="nav-item float-right">';
                echo '<a class="nav-link" href="registerchef.php">Register Chef</a>';
                echo '</li>';
                  
            
            }
            ?>
            
        </ul>
      
    
  </div>     
</nav>
           

        <center><img src="images\logo.png" width="200px" height="200px"></center>



    <div class="container">
        <div class= "jumbotron">
            <center><h1>Recipe Mania</h1></center>
            <br/>
            <br/>
        
    <div class="row">
        <div class="col-md-7">
            <img src="images\images1.jpg" width="500px" height="300px">
        </div>
        <div class="col-md-5">
            <h2>Browse</h2>
            <p>Browse through the gallery of mouth watering recipes made by our professional chefs!!</p>
            <br/>
            <br/>
            
            <a class="btn btn-primary" href="browse.php">Browse</a>
        </div>
    </div>
        
    <br/>
    <br/>
        
    <div class="row">
        <div class="col-md-5">
            <h2>Have your own recipe?</h2>
            <p>Share it and if it is good enough for our chefs, it will be displayed and showcased on the website!!</p>
            <br/>
            <br/>
            <a class="btn btn-primary" href="create.php">Create</a>
        </div>
        <div class="col-md-7">
            <img src="images/image2.jpg" width="500px" height="300px">
        </div>
    
    
    
    </div>
            
    <br/>
    <br/>
    
    <div class="row">
        <div class="col-md-7">
            <img src="images/image3.jpg" width="500px" height="250px">
        </div>
        <div class="col-md-5">
            <h2>Our Mobile App...</h2>
            <p>To start off your cooking adventures we are giving you a helping hand. On our mobile app you can find basic instructions for food prep and even a recommended cookware page to get you started. Mobile application is available for both iOs, Android and Windows.</p>
        </div>
        
    </div>
        
        <?php
            echo "<br/>";
            echo"<br/>";
           if (isset($_GET['logout']) && $_GET['logout'] == 1){
            echo "You have been logged out!<hr/>";
        }
            if(isset($_SESSION['username'])){
                echo "<center>";
                echo '<div class="p-3 mb-2 bg-success text-white">';
                echo 'You are logged in as '.$_SESSION['username'];
                echo '</div>';
                echo "</center>";;
                  
            }
            else{
                echo '<center><div class="p-3 mb-2 bg-danger text-white">You are not logged in!!</div></center>';
            }
    ?>
            
    </div>
    </div>
    
    </body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    
</html>



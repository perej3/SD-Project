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
    
        <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>

        
        
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
        <li class="nav-item active">
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
<div class= "jumbotron">
    
        <h2>Browse...</h2>
        <h4>Browse through the gallery of mouth watering recipes made by our professional chefs, to inspire you in your own creations...</h4>
        <br/>
        <div class="row">
            <div class="col-md-4">
        <a data-fancybox="gallery" href="images/gal1.jpg"><img src="images/gal1.jpg" width="600px" height="400px"></a>
            </div>
            <div class="col-md-4">
        <a data-fancybox="gallery" href="images/gal2.jpg"><img src="images/gal2.jpg" width="600px" height="400px"></a>
            </div>
            <div class="col-md-4">
        <a data-fancybox="gallery" href="images/gal3.jpg"><img src="images/gal3.jpg" width="600px" height="400px"></a>
             </div>
        </div>
    <br/>
         <div class="row">
            <div class="col-md-4">
        <a data-fancybox="gallery" href="images/gal4.jpg"><img src="images/gal4.jpg" width="600px" height="400px"></a>
            </div>
            <div class="col-md-4">
        <a data-fancybox="gallery" href="images/gal5.jpg"><img src="images/gal5.jpg" width="600px" height="400px"></a>
            </div>
            <div class="col-md-4">
        <a data-fancybox="gallery" href="images/gal6.jpg"><img src="images/gal6.jpg" width="600px" height="400px"></a>
             </div>
        </div>
    <br/>
     <div class="row">
            <div class="col-md-4">
        <a data-fancybox="gallery" href="images/gal7.jpg"><img src="images/gal7.jpg" width="600px" height="400px"></a>
            </div>
            <div class="col-md-4">
        <a data-fancybox="gallery" href="images/gal8.jpg"><img src="images/gal8.jpg" width="600px" height="400px"></a>
            </div>
            <div class="col-md-4">
        <a data-fancybox="gallery" href="images/gal9.jpg"><img src="images/gal9.jpg" width="600px" height="400px"></a>
             </div>
        </div>
        
    <br/>
    <div class="row">
            <div class="col-md-4">
        <a data-fancybox="gallery" href="images/gal10.jpg"><img src="images/gal10.jpg" width="600px" height="400px"></a>
            </div>
            <div class="col-md-4">
        <a data-fancybox="gallery" href="images/gal11.jpg"><img src="images/gal11.jpg" width="600px" height="400px"></a>
            </div>
            <div class="col-md-4">
        <a data-fancybox="gallery" href="images/gal12.jpg"><img src="images/gal12.jpg" width="600px" height="400px"></a>
             </div>
        </div>
        
    <br/>
    <div class="row">
            <div class="col-md-4">
        <a data-fancybox="gallery" href="images/gal13.jpg"><img src="images/gal13.jpg" width="600px" height="400px"></a>
            </div>
            <div class="col-md-4">
        <a data-fancybox="gallery" href="images/gal14.jpg"><img src="images/gal14.jpg" width="600px" height="400px"></a>
            </div>
            <div class="col-md-4">
        <a data-fancybox="gallery" href="images/gal15.jpg"><img src="images/gal15.jpg" width="600px" height="400px"></a>
             </div>
        </div>
        
    <br/>
    <div class="row">
            <div class="col-md-4">
        <a data-fancybox="gallery" href="images/gal16.jpg"><img src="images/gal16.jpg" width="600px" height="400px"></a>
            </div>
            <div class="col-md-4">
        <a data-fancybox="gallery" href="images/gal17.jpg"><img src="images/gal17.jpg" width="600px" height="400px"></a>
            </div>
            <div class="col-md-4">
        <a data-fancybox="gallery" href="images/gal18.jpg"><img src="images/gal18.jpg" width="600px" height="400px"></a>
             </div>
        </div>
        
    <br/>
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
                echo "</center>";
                  
            }
            else{
                echo '<center><div class="p-3 mb-2 bg-danger text-white">You are not logged in!!</div></center>';
            }
    ?>
    </div>
    
    </body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    
</html>

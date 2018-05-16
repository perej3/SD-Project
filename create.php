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
        <li class="nav-item active">
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
<div class= "jumbotron">
    
    
            <h3>Submit your Creation...</h3>
            <p>Enter all the required fields to submit your creation to the website</p>
        
<form method="post" action="create.php">
  <div class="form-group">
    <label>Recipe Name</label>
    <input type="text" class="form-control" name="recipe_name" id="recipe_name" placeholder="Enter recipe name">
  </div>
  <div class="form-group">
    <label>Recipe Description</label>
    <input type="text" class="form-control" id="recipe_desc" name="recipe_desc" placeholder="Enter recipe description">
  </div>
    <div class="form-group">
    <label>Ingredients</label>
    <input type="text" class="form-control" id="ingredients" name="ingredients" placeholder="Enter recipe ingredients">
  </div>
    <div class="form-group">
    <label>Instructions</label>
    <input type="text" class="form-control" id="instructions" name="instructions" placeholder="Enter recipe instructions">
  </div>
    
  <button type="submit" name="Submit" value="Submit" class="btn btn-primary">Submit</button>
 
</form>
    
   <?php
    
    if(isset($_POST['Submit'])){
        $name = $_POST['recipe_name'];
        $description = $_POST['recipe_desc'];
        $ingredients = $_POST['ingredients'];
        $instructions = $_POST['instructions'];
        $error = false;
        
        
    
        if(empty($name)){
            echo "<br/>";
            echo "<p class= 'text-danger'>Please enter your recipe
            s name</p>";
            
            $error = true;
        }
        if(empty($description)){
            
            echo "<br/>";
            echo "<p class= 'text-danger'>Please enter your recipes description</p>";
            $error = true;
           
        }
        if(empty($ingredients)){
            
            echo "<br/>";
            echo "<p class= 'text-danger'>Please enter your recipes ingredients</p>";
            $error = true;
           
        }
        if(empty($instructions)){
            
            echo "<br/>";
            echo "<p class= 'text-danger'>Please enter your recipes instructions</p>";
            $error = true;
           
        }
        
    if($error == true){
        
        echo "<br/>";
         echo "<p class= 'text-danger'>Make sure that all your fields are entered</p>";
        
    }
        else{
            
        $link = mysqli_connect("localhost","root","","project",3306);
        
        $sql = "INSERT INTO recipe (Recipe_name,Recipe_description,Ingredients,Instructions) VALUES ('$name','$description','$ingredients','$instructions')";
            
        echo "<p class= 'text-success'>Form Successfully submitted!</p>";
        echo "<p class= 'text-success'></p>";
        
        mysqli_query($link, $sql);
       
            
        }
    }
        



?>
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



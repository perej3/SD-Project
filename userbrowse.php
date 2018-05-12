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
        <li class="nav-item active">
            <a class="nav-link" href="userbrowse.php">Browse User Recipes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="about.php">About Us</a>
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
    <h3>User created recipes...</h3>
    
    <form method="post" action="userbrowse.php">
    
  <div class="form-group">
    <input type="text" name="search" placeholder="Search..">
  </div>

    
  <button type="submit" name="Submit" value="Submit" class="btn btn-primary">Search </button>
 
</form>
   <?php
        if(isset($_POST['Submit'])){
        
        $search = $_POST['search'];
            
            $link = mysqli_connect("localhost", "root", "", "project", 3306);
								
				//create the SQL statement
				$query = "SELECT * FROM recipe WHERE Recipe_name ='$search'";
				
				//pass the $query to MySQL through the connection ($link)
				$result = mysqli_query($link, $query);
            
                
        }
    ?>
    
    <table class="table">
				<tr>
					<th>Name</th>
					<th>Description</th>
					
					
				</tr>
        
				<?php
					//process $result
					while ($row = mysqli_fetch_assoc($result)) {
						echo "<tr>";
							echo "<td>".$row['Recipe_name']."</td>";
							echo "<td>".$row['Recipe_description']."</td>";
						echo "</tr>";
					}
					
				?>
			</table>
    
    
    
    <!-- SECONd ONE -->
    <?php
				
				$link = mysqli_connect("localhost", "root", "", "project", 3306);
								
				//create the SQL statement
				$query = "SELECT * FROM recipe";
				
				//pass the $query to MySQL through the connection ($link)
				$result = mysqli_query($link, $query);
				
				
			?>
			<table class="table">
				<tr>
					<th>Name</th>
					<th>Description</th>
					
					
				</tr>
				<?php
					//process $result
					while ($row = mysqli_fetch_assoc($result)) {
						echo "<tr>";
							echo "<td>".$row['Recipe_name']."</td>";
							echo "<td>".$row['Recipe_description']."</td>";
						echo "</tr>";
					}
					
				?>
			</table>
    
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


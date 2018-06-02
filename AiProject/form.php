<!DOCTYPE HTML>  
<html lang="en">
<head>
<style>
.error {color: #FF0000;}
</style>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
    
    <title>Let's Go</title>
    <!-- Loading third party fonts -->
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet" type="text/css">
    <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Loading main css file -->
    <link rel="stylesheet" href="style.css">

</head>
<body>  

<?php
$nameErr = $passwordErr = $profileErr = "";
$name = $password = $profile = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } 
  else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  }
  else {
    $password = test_input($_POST["password"]);
  }
    
  if (empty($_POST["profile"])) {
    $profileErr = "Profile is required";
  }
  else {
    $profile = test_input($_POST["profile"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
} 
?>

    <div id="site-content">
      <header class="site-header">
        <div class="container">
           
          
          <nav class="main-navigation">
            <button type="button" class="toggle-menu"><i class="fa fa-bars"></i></button>
            <ul class="menu">
              <li class="menu-item current-menu-item"><a href="index.php">Home</a></li>
              <li class="menu-item"><a href="about.php">About</a></li>
              <li class="menu-item"><a href="result.php">Result</a></li>
            
              <li class="menu-item"><a href="contact.php">Contact</a></li>
            </ul> <!-- .menu -->
          </nav> <!-- .main-navigation -->
          <div class="mobile-menu"></div>
        </div>
      </header> <!-- .site-header -->
      
      
      <main class="main-content">
        <div class="fullwidth-block download">
          <div class="container">
            
              <div class="col-md-5">
              
                  <form class = "form-horizontal" method="post" action="categorize.php">
                    <h2 class="year">Search your facebook id ...</h2>
                         <div class = "col-md-6">
                            <input type = "text" class = "form-control" name="name" value="<?php echo $name;?>" placeholder = "Facebook User Name" >
                            <span class="error"> <?php echo $nameErr;?></span>
                         </div>


                         <div class = "col-md-6">
                            <input type = "password" class = "form-control" name="password" value="<?php echo $password;?>" placeholder = "Facebook Password" >
                            <span class="error"> <?php echo $passwordErr;?></span>
                         </div>
                         <br><br>

                         <div class = "col-md-6">
                            <input type = "text" class = "form-control" name="profile" value="<?php echo $profile;?>" placeholder = "mbasic Facebook Profile" >
                            <span class="error"> <?php echo $profileErr;?></span>
                         </div>

                  <br><br>

                      <div class = "form-group">
                        
                        <div class = "col-sm-offset-2 col-md-6">
                          <button type = "submit" class ="button cut-corner" name="submit" value="Submit">Submit</button>
                        </div>
                      </div>
                        
                    </form>
                  
                  
                </div>

                
              </div>
              
            
          </div>
         <!-- .testimonial-section -->

        
      </main> <!-- .main-content -->

      <footer class="site-footer">
        <div class="container">
          
          
          <address>
            <p>Shahjalal University of Science and Technology</p>
            <p>Computer Science and Engineering</p>
            <p>cse@sust.edu</p>  
          </address> 
          
          
            <!-- .newsletter-form -->
          
           <div class="social-links">
            <a href="#"><i class="fa fa-facebook-square"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-pinterest"></i></a>
          </div>  <!-- .social-links -->
          
           <p class="copy">cse-sust@Copyright-2017. All right reserved.</p>
        </div>
      </footer>  <!-- .site-footer -->

     </div>  <!-- #site-content -->

     <script src="js/jquery-1.11.1.min.js"></script>    
    <script src="js/plugins.js"></script>
    <script src="js/app.js"></script>
    
</body>
</html>

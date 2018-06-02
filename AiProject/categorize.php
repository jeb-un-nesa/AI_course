<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Learning</title>
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="style.css">

	</head>

	<body>
		
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
													
			<form class = "form-horizontal" action="result.php">
				<?php

				    ini_set('max_execution_time', 0); 
				    
			        $name = $_POST["name"];
			        
			        $password = $_POST["password"];
			        
			        $profile = $_POST["profile"];
			        
				    $command = escapeshellcmd("python G:\AiProject\FB_Scraper.py ".$name." ".$password." ".$profile);
			        //$output = exec("python G:\XAMPP\htdocs\Social_Networking_Data_Categorization\AI\FB_Scraper.py" .$name." ".$password." ".$profile);
			        $output = shell_exec($command);
			        //exit();
			        //$result = exec("python D:\Chowdhury\Scrapper\FB_Scraper.py");
			        //echo $result;

			        //echo "<h3>Task is finished</h3>";
			        echo "<pre>";
			        //echo "hello bro, u r looking great";
			        //print_r($output);
			        echo "</pre>";
				?>

				<h3 style="color:  #ff9966">Your data scrapping is finished to learn the person.</h3>
				<h3 style="color:  #ff9966">Now you can classify the person...</h3>

				  <br><br>
				<div class = "form-group">
					
					<div class = "col-sm-offset-2 col-md-6">
						<button type = "submit" class ="button cut-corner">Let's do that</button>
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
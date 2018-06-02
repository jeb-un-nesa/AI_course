<?php require('header.php');?>

<?php
	ini_set('max_execution_time', 0);
	
	// $command = escapeshellcmd('python G:\AiProject\AI.py');
	//$output = exec($command);
    // $output = shell_exec($command);
    
    //echo "Hello, this process is finished";
?>
			
	<main class="main-content">
		<div class="fullwidth-block inner-content">
			<div class="container">
				<div class="row">
					<div class="col-md-7">
						<div class="content" style="text-align: center;">
							 <h1 class="ml1">
  <span class="text-wrapper">
    <span class="line line1" style="background-color:#fd5927;"></span>
    <span class="letters" style="color:#fd5927;">Result</span>
    <span class="line line2" style="background-color:#fd5927;"></span>
  </span>
</h1>
							<?php
							echo "<pre>";
						    //print_r($output);
						    ?> 
						    	<div style="font-size:25px;color:white;font-weight: bold;"> <?php echo $output ?> </div>
						    		
						     <?php 
						    echo "</pre>";
						    ?>
							<!-- <h3>Positive :</h3>
							<h3>Sexual Harrasment :</h3>
							<h3>Cyberbullying :</h3>
							<h3>Religious Extemism :</h3>
							<h3>Political Propaganda :</h3>-->
							
						</div>
					</div>
					
				</div>
			</div>
		</div> <!-- .testimonial-section -->
<!-- <script src="resultanime.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

		
	</main> <!-- .main-content -->

	<?php require('footer.php');?>
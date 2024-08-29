<?php
	
	// Constants
	define('Title','While Loop');
	
	// Custom Variables
	$my_name = 'Josef The bLack pOpE';
	$lesson_num = 19;


?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo Title ?></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <?php echo $lesson_num ?>: <small><?php echo Title?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				
				<?php
				 
				    // set a variable with a starting number
					$num = 10;

					// while the number is than or equal to 12
					while ($num <= 12){
						// increment the number by one
					$num++; 
						echo $num. "<br>";
				}
				 
				?>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy $nsbp;<?php echo date("Y-m-d"); ?> - <?php echo $my_name ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>

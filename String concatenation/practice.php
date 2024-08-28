<?php
	
	// Constants
define('Title','String operators');
	
	// Custom Variables
	$lesson_num = 17;
	$my_name = 'Josef bLackpOpE';



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
			
			<h1>Tutorial <?php echo Title ?>: <small><?php echo $lesson_num?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				
				<h3>Concatenation Operator <code>.</code></h3>
				<?php
				$num1 =20;
				$num2 = " Donkeys Dancing.";
				$result = $num1 . $num2;
				echo "$result";
				?>
				
				<h3>Concatenating Assignment Operator <code>.=</code></h3>
			<?php
					
					$name = 'Josef bLackpOpE';
					echo $name ." The code Wizard";
					
				?>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo date("Y-m-d"); ?> - <?php echo $my_name ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>

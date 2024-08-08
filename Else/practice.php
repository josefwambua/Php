<?php
	
	// Constants
	define("Title", "IF-ELSE-STATEMENTS");
	
	
	// Custom Variables
	$my_name = "Black PoPe";
	$lesson_num = 11;

	$fav_game = "football";
	// syntax
	// if (expression){
		// code to execute if True
	// } else {
		// code to execute if False
	// }


?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo Title ?> </title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <?php echo $lesson_num ?>: <small><?php echo Title ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				<?php
				if ($fav_game == "football"){
					echo "I love football";
				} else{
					echo "I dont love other games";
				}
				?>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo date('Y') ?> - <?php echo $my_name ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>

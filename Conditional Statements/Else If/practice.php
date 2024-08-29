<?php
	
	// Constants
	define("Title", "Else-If-Statements");

	
	// Custom Variables
	$my_name = "Black PoPe";
	$lesson_num = 12;
	$native_language = "French";



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
			
			<h1>Tutorial <?php echo $lesson_num ?>: <small><?php echo Title ?>></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				<?php
				if($native_language == "French"){
					echo "Bonjour! Vouz parlez Francias ";
				} elseif ($native_language == "Spanish"){
					echo "Hola! Usted habla Espanyol";
				} else {
					echo "We all love English";
				}
				?>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo date('Y') ?> - <?php echo $my_name ?>></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>

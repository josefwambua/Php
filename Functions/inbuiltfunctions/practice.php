<?php
	
	// Constants
	define("TITLE", "Intro to Functions");
	
	// Custom Variables
	$myName	= "Josef The Black pOpE";
	$lessonNum	= 23;
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE; ?></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <?php echo $lessonNum; ?>: <small><?php echo TITLE; ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				
				<h3>Using <code>sort()</code></h3>
				<?php
					// sort function - to sort arrays in alphabetical order
					$game = array("Hamster Kombat","TapSwap", "Dogs");
					sort($game);
					foreach($game as $games){
						echo "$games <br>";
					}
				?>
				
				<h3>Using <code>rsort()</code></h3>
				<?php
					// reverse sort

					rsort($game);
					foreach($game as $games){
						echo "$games <br>";
					}
					
				?>
				
				<h3>Using <code>strtolower()</code></h3>
				<?php
					//string to lower
					$game = "Hamster Kombat GAME";
					$game = strtolower($game);
					echo $game;
				?>
				
				<h3>Using <code>sha1()</code></h3>
				<?php
				// Used to calculate the hash of a string usually sha1 is 40 characters
				
				$password = "MyPassword";
				echo "Before: $password <br>";
				$password = sha1($password);
				echo "After: $password <br>";

					
					
					
				?>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> - <?php echo $myName; ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>

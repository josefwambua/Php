<?php
	
	// Constants
	define("Title", "Logical Operators");
	
	// Custom Variables
	$lesson_num = 15;
	$my_name = "jOsef bLack pOpE";

	$username = "kun";
	$password = "password";
	$cartTotal = 203.39;
	$couponCode = "Discount Please"; 
	


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
				
				<h3>And <code>and</code></h3>
				<?php
				if($username == "kun" && $password =="password"){
					echo "Login Succesful";
				}else {
				 echo ("username incorrect or wrong password" );
				}
				?>
				
				<h3>Or <code>or</code></h3>
				<?php
					if($cartTotal > 15 or $couponCode == "Discount Please"){
						echo "You get a discount!";
					}else {
						echo "You don't qualify for a discount";
					}
				?>
				
				<h3>Not <code>!</code></h3>
				<?php
					$ownCow = true;
					if(!$ownCow){
						echo "Yo do not own a cow";
					}else{
						echo "You own a dog";
					}
				?>
				
				<h3>And <code>&amp;&amp;</code></h3>
				<?php
					if($username =="kun" && $password == "password")
					{
						echo "Login Successful";
					}else{
						echo ("username incorrect or wrong password" );
					}
				?>
				
				<h3>Or <code>||</code></h3>
				<?php
					if($cartTotal > 15 || $couponCode = "DiscountPlease"){
						echo "You get a discount";
					}else {
						echo "You dont qualify for a discount";
					}
				?>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo date("Y")?> - <?php echo $my_name ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>

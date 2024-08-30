<?php

// Constants
define("TITLE", "Simple Arguments");

// Custom Variables
$myName = "Josef tHe bLack pOpE";
$lessonNum = 25;

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

				<h3>One Argument</h3>
				<?php

function Call($phoneNumber)
{
    echo "You can reach him through $phoneNumber <br><br>";
}
Call("+254 798 +++ +++");
Call("+254 77+ +++ +++");
?>

				<h3>Two Arguments</h3>
				<?php

function phoneCall($setting, $action)
{
    echo "His $setting is on default if he did not issue a $action <br>";
}

phoneCall("phone", "callback");
phoneCall("flightmode", "restarting");

?>

<h3>ANOTHER ONE</h3>
<?php
function multiplyTogether($num1, $num2)
{
    $product = $num1 * $num2;
    echo "The product of the two numbers is: $product <br> <br>";

}
multiplyTogether(50, 90);
multiplyTogether(100, 39);
?>
			</div><!-- end sandbox -->

			<a href="index.php" class="button">Back to the lecture</a>

			<hr>

			<small>&copy;<?php echo date('Y'); ?> - <?php echo $myName; ?></small>
		</div><!-- end wrapper -->

		<div class="copyright-info">
			<?php include '../assets/includes/copyright.php';?>
		</div><!-- end copyright-info -->
	</body>
</html>

<?php 
//this is the php code to process the email addresses
$email = $_POST['email'];
//echo $email.$_POST['email'];  //for debugging
        if(isset($_POST['g-recaptcha-response']))
          $captcha=$_POST['g-recaptcha-response'];
        if(!$captcha){
          $error =  'Please fill out the form again, completing the reCaptcha.';
        }
        $response=json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LfT9wgTAAAAACMFGFowHqET8dA2EKzS8UMwYEop&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
        if($response['success'] == false)
        {
          $error =  'You did not pass the reCaptcha test.  Please try again later or contact us for more information';
        }
       
if(strpos($email,"@") === false)
{
	$error = "You did not enter a valid email address.  Please go back and try again";
} else {
$file = fopen("database/list.txt", 'a');
fwrite($file,"\n$email");
fclose($file);  }
?>


<!DOCTYPE HTML>
<!--
	Retrospect by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Email Submitted</title>
		<?php include "header.php"; ?>
	</head>
	<body>

	<?php include "top-normal.php"; ?>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">
					<?php if(!isset($error)) {?>
					<header class="major special">
						<h2>Thank You!</h2>
						<p>We have received your email address and will be in touch shortly</p>
					</header>
					<?php }else{ ?>
					<header class="major special">
						<h2>Uh Oh!</h2>
						<p><?php echo $error; ?></p>
					</header>
					<?php } ?>
					<a href="#" class="image fit"><img src="images/pic11.jpg" alt="" /></a>
				</div>
			</section>
		<!-- include the footer via php -->
		<?php include "footer.php"; ?>

	</body>
</html>
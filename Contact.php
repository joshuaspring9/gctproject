
<!DOCTYPE HTML>
<!--
	Retrospect by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Contact Us</title>
		<?php include "header.php"; ?>
		<script src='https://www.google.com/recaptcha/api.js'></script>

	</head>
	<body>

	<?php include "top-normal.php"; ?>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">
					<header class="major special">
						<h2>Get in touch</h2>
						<p>Questions or comments? Send us a message.  Our support team will get back to you within 24 hours</p>
					</header>
					<form action="contact-thanks.php" method="POST">
						<div class="container 75%">
							<div class="row uniform 50%">
								<div class="6u 12u$(xsmall)">
									<input name="name" placeholder="Name" type="text" />
								</div>
								<div class="6u$ 12u$(xsmall)">
									<input name="email2" placeholder="Email" type="email" />
								</div>
								<div class="12u$">
									<textarea name="message" placeholder="Message" rows="4"></textarea>
								</div>
							</div>
						</div>
						<input type="hidden" name="ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" />
						<input type="hidden" name="user" value="<?php echo $_SERVER['HTTP_USER_AGENT'];?>" />
						<div class="center">
						<div class="g-recaptcha" data-sitekey="6LfT9wgTAAAAAKb3-Wy3tmol9tG3v9GqnMHpkAb_"></div>
						<ul class="actions">
							<li><input type="submit" class="special" value="Submit" /></li>
							<li><input type="reset" class="alt" value="Reset" /></li>
						</ul>
						</div>
					</form>
				</div>
			</section>
		<!-- include the footer via php -->
		<?php include "footer.php"; ?>

	</body>
</html>
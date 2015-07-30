<!DOCTYPE HTML>
<!--
	Retrospect by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
		<head>
		<title>Bizni</title>
		<?php include "header.php"; ?>
		<script src='https://www.google.com/recaptcha/api.js'></script>
		</head>
		<body class="landing">
		<?php include "top.php"; ?>
		<!-- Banner -->
			<section id="banner">
				<span class="money">$</span>
				<h2>Introducing the new way to get paid</h2>
				<p>Bizni is the B2B solution designed to make getting paid easier</p>
				<ul class="actions">
					<li><a href="#" id="more" class="button big special">Learn More</a></li>
				</ul>
			</section>

		<!-- One -->
			<section id="one" class="wrapper style1">
				<div class="inner">
				<a name="two"></a>
					<article class="feature left">
						<span class="image"><img src="images/handshake.jpg" alt="" /></span>
						<div class="content">
							<h2>Incentives</h2>
							<p>Pay your bills on time. Get rewarded. Simple as that.</p>

							<ul class="actions">
								<li>
									<a class="button alt">Compensation</a>
								</li>
							</ul>
						</div>
					</article>
					<article class="feature right">
						<span class="image"><img src="images/group.jpg" alt="" /></span>
						<div class="content">
							<h2>Community</h2>
							<p>Helping businesses become extraordinary ones. Building a better understanding between you and your business partners. We’re here to help.</p>
							<ul class="actions">
								<li>
									<a class="button alt">Relationships</a>
								</li>
							</ul>
						</div>
					</article>
					<article class="feature left">
						<span class="image"><img src="images/dashboard.png" alt="" /></span>
						<div class="content">
							<h2>All-in-one</h2>
<p>Bills, Businesses, Collections. Now all in one place, at your convenience.  A useful dashboard gives you one look access to who's paid and who hasn't, along with a dedicated one click button to chat with partners.  View your account as a customer with a one glance comprehensive dashboard, and respond to issues directly from our interface.</p>
							<ul class="actions">
								<li>
									<a class="button alt">Helpful</a>
								</li>
							</ul>
						</div>
					</article>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper special">
				<div class="inner">
					<header class="major narrow">
						<h2>Coming Soon</h2>
						<p>The new way to pay is seeking first adopters who are excited about experiencing an innovative service before its general public availability.</p>
					</header>
					<a href="#"><img class="width" style="width:75%;text-align:center;" src="images/ocean.jpg" alt="Ocean" /></a>
					<!--<div class="image-grid">
						<a href="#" class="image"><img src="images/pic03.jpg" alt="" /></a>
						<a href="#" class="image"><img src="images/pic04.jpg" alt="" /></a>
						<a href="#" class="image"><img src="images/pic05.jpg" alt="" /></a>
						<a href="#" class="image"><img src="images/pic06.jpg" alt="" /></a>
						<a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
						<a href="#" class="image"><img src="images/pic08.jpg" alt="" /></a>
						<a href="#" class="image"><img src="images/pic09.jpg" alt="" /></a>
						<a href="#" class="image"><img src="images/pic10.jpg" alt="" /></a>
					</div>-->
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper style3 special">
				<div class="inner">
					<header class="major narrow	">
						<h2>Get exclusive early access</h2>
						<p>Enter your email address below for an opportunity to experience Bizni and offer feedback that will shape the future.</p>
					</header>
					<form action="email-thanks.php" method="POST">
					<input placeholder="Email Address" type="text" id="email" name="email" />
					<div class="g-recaptcha" data-sitekey="6LfT9wgTAAAAAKb3-Wy3tmol9tG3v9GqnMHpkAb_"></div>
					
						<input type="submit" value="Submit" class="button big alt" />
					
					</form>
				</div>
			</section>

		<?php include "footer.php"; ?>

	</body>
</html>
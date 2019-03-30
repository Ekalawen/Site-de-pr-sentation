<?php
	require_once("php/base_functions.php");

	echo getHeader("contact");

	echo getTextContact();

	echo getFooter();

	function getTextContact() {
	$text = '
		<section class="theme1 colonne">
			<h1>
				Contact form
			</h1>
			<section class="theme2 colonne">
				<form class="colonne" method="post" name="myemailform" action="php/sendMail.php">
					<h3>Enter Name *</h3>
					<input type="text" name="name">
					<h3>Enter Email Address *</h3>
					<input type="text" name="email">
					<h3>Enter Message *</h3>
					<textarea class="size500 verticalSize250" name="message"></textarea>
					<input class="activable" type="submit" value="Send Form !">
				</form>
			</section>
		</section>
			';

		return $text;
	}


 ?>
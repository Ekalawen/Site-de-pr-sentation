<?php
	require_once("php/base_functions.php");

	echo getHeader("contact", "Contact");

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
					<h2 class="no_underline nocount">Enter Name *</h2>
					<input type="text" class="resp_small_extend" name="name">
					<h2 class="no_underline nocount">Enter Email Address *</h2>
					<input type="text" class="resp_small_extend" name="email">
					<h2 class="no_underline nocount">Enter Message *</h2>
					<textarea class="size500 verticalSize250 resp_extend" name="message"></textarea>
					<input class="activable resp_small_extend" type="submit" value="Send Form !">
				</form>
			</section>
		</section>
			';

		return $text;
	}


 ?>
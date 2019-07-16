<?php
	require_once("php/base_functions.php");

	echo getHeader("", "Thank you");

	echo getTextThankYou();

	//echo getEndProjet();

	echo getFooter();

	function getTextThankYou() {
		$text = '
			<section class="theme1">
				<h1 class="no_underline fontSize200">
					Your message has been sent successfully !<br>
					Thank you ! :)
				</h1>
			</section>
		';

		return $text;
	}

 ?>
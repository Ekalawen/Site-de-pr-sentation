<?php
	require_once("php/base_functions.php");

	echo getHeader("", "Error");

	echo getTextError();

	//echo getEndProjet();

	echo getFooter();

	function getTextError() {
		$errorText = $_GET['error'];
		$text = '
			<section class="theme1 colonne">
				<h1 class="fontSize200 no_underline">
					There was an error !<br>
					' . $errorText . '
				</h1>
				<a href="contact.php" class="">
					<div>
						<section class="theme3 colonne redirection pb3">
							<h2 class="fontSize200 resetPaddingMargin no_underline">
								Go back to form
							</h2>
						</section>
					</div>
				</a>
			</section>
		';

		return $text;
	}

 ?>
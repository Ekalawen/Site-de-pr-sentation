<?php
	require_once("php/base_functions.php");

	echo getHeader("");

	echo getTextError();

	//echo getEndProjet();

	echo getFooter();

	function getTextError() {
		$errorText = $_GET['error'];
		$text = '
			<section class="theme1 colonne">
				<h3>
					There was an error !<br>
					' . $errorText . '
				</h3>
				<a href="contact.php" class="">
					<div>
						<section class="theme3 colonne redirection pb3">
							<h3 class="resetPaddingMargin">
								Go back to form
							</h3>
						</section>
					</div>
				</a>
			</section>
		';

		return $text;
	}

 ?>
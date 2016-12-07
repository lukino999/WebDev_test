<?php
	
	$emailTo = "lukino999@gmail.com";

	$subject = "Test PHP";

	$body = "Sent via PHP";

	$headers = "From: lukino999@gmail.com";

	if ( mail($emailTo, $subject, $body, $headers) ) {

		echo "<p>Email sent successfully!</p>";

	} else {

		echo "<p>Email has not been sent!</p>";

	}

?>



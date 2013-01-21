# Email Logging
Logging of successful and failed email delivery can be enabled by creating an email.php file in your config directory with the following:
	
	return array(
		'logging'      => TRUE,
	);
	
When this option is enabled the recipient and subject of emails will be logged at level `Log::INFO`.
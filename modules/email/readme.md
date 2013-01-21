Added UTF-8 support.

# Email module for Kohana using sendmail
This module provides a Kohana interface to PHPs native mail() function. This module is currently in development.

## Usage

	Email::factory($subject, $message)
			->to($email)
			->send();


## Interface Email_Recipient
This module also declares an Email_Recipient interface. Classes which implement Email_Recipient must declare name() and email() functions. An class implementing Email_Recipient can be passed to Email_Builder::to().

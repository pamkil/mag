# Email
This module provides a nice Kohana style interface to sending emails:

	Email::factory($subject, $message)
			->to($email)
			->send();

	Email::send($to, $from, $subject, $message)

# Why this module?
There are already many good modules for Kohana already for sending emails. Although this module currently only works with sendmail the intention is to make the use of sendmail or other libraries such as Swift Mailer interchangeable so that the mail driver can be changed depending on the server setup.
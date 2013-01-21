<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Email builder class - creates an email to send use the PHP mail() function
 *
 * @author	Rob Taylor
 */
class Kohana_Email_Builder
{
	protected $_headers = array();

	protected $_message;

	protected $_to;

	protected $_subject;
	
	public function __construct($subject = NULL, $message = NULL)
	{
		$this->subject($subject);
		$this->message($message);
	}

	/**
	 * Add a BCC to the email.
	 *
	 * @param	mixed	$cc
	 * @return 	Email_Builder
	 */
	public function bcc($bcc)
	{
		// Get a list of recipients.
		$bcc = Email::recipients_string($bcc);

		// Add the Bcc header to the email.
		$this->header('Bcc', $bcc);

		return $this;
	}

	/**
	 * Add a CC to the email
	 *
	 * @param	mixed	$cc
	 * @return 	Email_Builder
	 */
	public function cc($cc)
	{
		//  Get a list of recipients.
		$cc = Email::recipients_string($cc);

		// Add a CC header to the email.
		$this->header('Cc', $cc);

		return $this;
	}

	/**
	 * Set the from emailaddress
	 *
	 * @param	string	$email
	 * @return 	Email_Builder
	 */
	public function from($email)
	{
		$this->header('From', $email);

		return $this;
	}

	/**
	 * Set the email format (e.g. plain text or HTML
	 *
	 * @param	string	$format
	 */
	public function format($format = 'text/plain')
	{
		// Set the email format header.
		$this->header('MIME-Version', '1.0');
		$this->header('Content-type', $format . "; charset=UTF-8");

		return $this;
	}

	/**
	 * Add a header to the email
	 *
	 * @param	string	$name	The name of the header.
	 * @param 	string	$value	Header value.
	 * @return 	Email_Builder
	 */
	public function header($name, $value)
	{
		$this->_headers[$name] = $value;

		return $this;
	}

	/**
	 * Set the email body
	 *
	 * @param	mixed	$message	Can be anything which can be cast as a string (e.g. an instance of View).
	 * @return 	Email_Builder
	 */
	public function message($message)
	{
		$this->_message = (string) $message;

		return $this;
	}

	/**
	 * Set the destination of the email.
	 * Can accept an emailaddress, associative array of email and name, or an object with an object which implements Email_Recipient.
	 *
	 *		$email->to('test@test.com'); // Set an email address.
	 *		$email->to(array('test@test.com' => 'Test User')); // Set an email address and name.
	 *		$email->to($user); // $user is an object with an 'email' property.
	 *
	 * @param	mixed	$to	Who to send the email to.
	 * @return 	Email_Builder
	 */
	public function to($to)
	{
		$this->_to = Email::recipients_string($to);

		return $this;
	}

	/**
	 * Set a reply to email address.
	 *
	 * @param	string	$email
	 * @return 	Email_Builder
	 */
	public function reply_to($email)
	{
		$this->header("Reply-To", $email);

		return $this;
	}

	/**
	 * Send the email
	 *
	 */
	public function send()
	{
		// Check that we've got everything we need.
		if ( ! $this->_to)
		{
			throw new Kohana_Exception("You must set an email recipient");
		}

		if ( ! $this->_message)
		{
			throw new Kohana_Exception("You must set a message body");
		}

		// Check for a format header.
		if ( ! isset($this->_headers['Content-type']))
		{
			$this->format('text/plain');
		}

		// Set a default subject if none has been set.
		$this->_subject = ($this->_subject !== NULL)? $this->_subject : "(No subject)";

		// Turn the headers into a string.
		$headers = "";

		foreach ($this->_headers as $type => $value)
		{
			$headers .= $type . ": " . $value . "\r\n";
		}

		$result = mail($this->_to, $this->_subject, $this->_message, $headers);

		if (kohana::$config->load('email')->logging)
		{
			if ($result === TRUE)
			{
				$log_message = "Email to :to with subject ':subject' accepted for delivery.";
			}
			else
			{
				$log_message = "Email to :to with subject ':subject' failed.";
			}

			Log::instance()->add(Log::INFO, $log_message, array(
				':to'		=>	$this->_to,
				':subject'	=>	$this->_subject,
			));
		}
	}

	/**
	 * Set the email subject
	 *
	 * @param	string	$subject
	 * @return 	Email_Builder
	 */
	public function subject($subject)
	{
		$this->_subject = '=?UTF-8?B?'.base64_encode($subject).'?=';
	}
}

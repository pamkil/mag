<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Email helper functions.
 *
 * @author	Rob Taylor
 */
abstract class Kohana_Email
{
	protected $_headers = array();

	public static function factory($subject = NULL, $message = NULL)
	{
		return new Email_Builder($subject, $message);
	}

	/**
	 * Turn an array of recipients into a string in RFC 2822 format
	 *
	 * @param	mixed	$recipients
	 * @return 	string
	 */
	public static function recipients_string($recipients)
	{
		// Turn the recipients into an associative array.
		$recipients = Email::recipients($recipients);
		$r = array();

		foreach ($recipients as $email => $name)
		{
			if ( ! $name)
			{
				$r[] = $email;
			}
			else
			{
				$r[] = "$name <$email>";
			}
		}

		return implode(", ", $r);
	}

	/**
	 * Returns an associative array of emailaddress => name of email recipients.
	 *
	 * @param	mixed	$recipients
	 * @return 	array
	 */
	public static function recipients($recipients)
	{
		$return = array();

		if (is_array($recipients))
		{
			if (Arr::is_assoc($recipients))
			{
				// Associative array of emailaddress => $name.
				// Add to the array of recipients
				$return = array_merge($return, $recipients);
			}
			else
			{
				// We've got an array of recipients
				foreach ($recipients as $r)
				{
					$return = array_merge($return, Email::recipients($r));
				}
			}
		}
		else
		{
			if (is_string($recipients))
			{
				// $recipient is an email address.
				$return[$recipients] = NULL;
			}
			elseif (is_object($recipients) and $recipients instanceof Email_Recipient)
			{
				// We can get the emailaddress and name from the email() and name() methods.
				$return[$recipients->email()] = $recipients->name();
			}
		}

		return $return;
	}

	public static function send($to, $from, $subject, $message)
	{
		return Email::factory($subject, $message)
				->to($to)
				->from($from)
				->send();
	}
	
} // End Kohana_Email
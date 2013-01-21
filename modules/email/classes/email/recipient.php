<?php defined('SYSPATH') OR die('No direct script access.');

interface Email_Recipient
{
	public function email();

	public function name();
}

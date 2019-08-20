<?php
/**
 * Created by PhpStorm.
 * User: NandoKstroNet
 * Date: 23/06/19
 * Time: 15:54
 */

namespace App\Api;


class ApiMessages
{
	private $message = [];

	public function __construct(string $message, array $data = [])
	{
		$this->message['message'] = $message;
		$this->message['errors']  = $data;
	}

	public function getMessage()
	{
		return $this->message;
	}
}
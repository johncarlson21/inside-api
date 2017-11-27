<?php
namespace Chronicle;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use GuzzleHttp\Client;

class InsideApi
{

	public $debug = false; // set to output debug info
	
	public $client;
	
	public $error_code;
	public $error_message;
	
	public $logger;
	
	public function __construct()
	{
		$dir = $_SERVER['DOCUMENT_ROOT'] . "/var/log/";
		$logger = new Logger('inside-api');
		$logger->pushHandler(new StreamHandler($dir . 'inside-api.log', Logger::DEBUG));
		$this->logger = $logger;
		$this->logger->warning('we have constructed the class');
	}

}

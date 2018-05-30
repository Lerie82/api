<?php
/*
	nasa.php
	lerie.taylor
	stripe payment api
*/
require_once("api.php");

class StripeApi extends API
{
	function __construct($key)
	{
		$this->setApiKey($key);
	}
}

?>

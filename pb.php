[B<?php
/*
	pb.php
	lerie taylor
	pastebin.com api
*/
require_once("api.php");

class Pastebin extends Api
{
	function __construct($key)
	{
		$this->setApiKey($key);
		$this->setApiUrl("https://pastebin.com/api/api_post.php");
	}

	//create a new paste on pastebin
	//$data = the string to send to pastebin
	function newPaste($data)
	{
		$postData = array(
			'api_dev_key' => $this->getApiKey(),
			'api_option' => 'paste',
			'api_paste_code' => utf8_decode($data),
		);

		$ch = curl_init();
		curl_setopt_array($ch, array(
			CURLOPT_URL => $this->getApiUrl(),
			CURLOPT_RETURNTRANSFER  => 1,
			CURLOPT_POST => 1,
			CURLOPT_POSTFIELDS => http_build_query($postData),
		));

		$data = curl_exec($ch);
		curl_close($ch);
		return $data;
	}
}
?>

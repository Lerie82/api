<?php
/*
	api.php
	lerie taylor
	base class for the api
*/

class API
{
	private $api_url;
	private $api_key;

	function __construct()
	{
	}

	//set the api key
	function setApiKey($key)
	{
		$this->api_key = $key;
	}

	//return the current api key
	function getApiKey()
	{
		return $this->api_key;
	}

	//use for GET requests
	function getApiData()
	{
                if(!function_exists("curl_version"))
		{
			$this->apiError("CURL not found");
		}

		if($this->api_url == "")
		{
			$this->apiError("API URL cannot be empty");
		}

                $ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $this->api_url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $data = curl_exec($ch);
                curl_close($ch);

		return $data;
	}

	//set the api url, the full url
	function setApiUrl($url)
	{
		$this->api_url = $url;
	}

	function getApiUrl()
	{
		return $this->api_url;
	}

	//die and dump an error message
	function apiError($e)
	{
		die(var_dump($e));
	}
}
?>

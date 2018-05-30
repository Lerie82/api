<?php
require_once("api.php");

class NasaApi extends API
{
	function __construct($key)
	{
		$this->setApiKey($key);
	}

	//get the picture of the day
	function getPod()
	{
		$this->setApiUrl("https://api.nasa.gov/planetary/apod?api_key=".$this->getApiKey());
		return $this->getApiData();
	}

	//get near eath objects
	//$start = YYYY-MM-DD
	//$end = YYYY-MM-DD
	function getNeos($start, $end)
	{
		$this->setApiUrl("https://api.nasa.gov/neo/rest/v1/feed?start_date=".$start."&end_date=".$end."&api_key=".$this->getApiKey());
		return $this->getApiData();
	}

	//get a specific near earth object
	//$neo = 3542519
	function getNeo($neo)
	{
		$this->setApiUrl("https://api.nasa.gov/neo/rest/v1/neo/".$neo."?api_key=".$this->getApiKey());
		return $this->getApiData();
	}

	//browse all neo's
	function neoBrowse()
	{
		$this->setApiUrl("https://api.nasa.gov/neo/rest/v1/neo/browse?api_key=".$this->getApiKey());
		return $this->getApiData();
	}

	//get images from the rovers on mars
	//$page = 0-9
	//$rover = curiosity|opportunity|spirit
	//$cam = FHAZ|RHAZ|MAST|CHEMCAM|MAHLI|MARDI|NAVCAM|PANCAM|MINITES
	/*
		FHAZ	Front Hazard Avoidance Camera
		RHAZ	Rear Hazard Avoidance Camera
		MAST	Mast Camera
		CHEMCAM	Chemistry and Camera Complex
		MAHLI	Mars Hand Lens Imager
		MARDI	Mars Descent Imager
		NAVCAM	Navigation Camera
		PANCAM	Panoramic Camera
		MINITES	Miniature Thermal Emission Spectrometer (Mini-TES)
	*/
	function getRoverImgs($cam=null, $page=1, $rover=null)
	{
		if($rover == null) $rover = "curiosity";
		if($cam == null) $cam = "";
		if($page == null) $page = 1;

		$this->setApiUrl("https://api.nasa.gov/mars-photos/api/v1/rovers/".$rover."/photos?sol=1000&page=".$page."&camera=".$cam."&api_key=".$this->getApiKey());
		return $this->getApiData();
	}
}
?>

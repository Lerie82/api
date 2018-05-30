# About this Repo
This project is a compilation of API that I use on my websites and in my applications. Some API is available from vendors in huge packages or classes that I do not need. Sometimes I only need a few API from here and there. This repository is not meant to implement ALL of the API from a given source.

## API
The Api class lets you set api keys and urls and then get the data back.

## NASA API (https://api.nasa.gov/api.html)
NASA offers a wide range of API's for the general public. You will need an API key for most requests, you can get one here, https://api.nasa.gov/index.html#apply-for-an-api-key

The NASA API's have a limit of 1000/hr

* Mar Rovers' Images
* Astronomy picture of the day
* Lists of near Earth objects

#### Examples
>$nasa = new NasaApi("---- your key here ----");
>$pod = $nasa->getPod();
>$neos = $nasa->getNeos("2018-05-22","2018-05-29");
>$neo = $nasa->getNeo("3542519");
>$roverImgs = $nasa->getRoverImgs("CHEMCAM", 1, "curiosity");

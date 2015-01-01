<?php

require_once('models/podcast.php');

use Luracast\Restler\Scope;
use Luracast\Restler\iProvideMultiVersionApi;

class Podcast implements iProvideMultiVersionApi{

	 /** 
     * @url GET device/{uuid}
     */
	public function device($uuid){
		$podcasts = array();
		for ($i = 0; $i < 6; $i++){
			$podcast = new PodcastModel();
			$podcast->title = "Name" . $i;
			$podcast->lastUpdate = date("Y-m-d H:i:s");
			$podcast->icon = 'img/square128.png';
			$podcasts[] = $podcast;
		}		
		return $podcasts;
	}

    public static function __getMaximumSupportedVersion()
    {
        return Scope::get('Restler')->getApiVersion();
    }

}
<?php
/**
 * Created by PhpStorm.
 * User: larsemil
 * Date: 2017-08-22
 * Time: 10:47
 */

namespace NotificationChannels\FourtySixElks;


class FourtySixElksSMS extends FourtySixElksMedia implements FourtSixElksMediaInterface {
	protected $endpoint = 'https://api.46elks.com';

	public function __construct(){
		return parent::__construct();
	}

	public function send(){


		$this->client->request('POST',$this->endpoint,[
			'form_params' => [
				'from' => '',
				'message' => $this->getContent(),
				'to' => '',
			]
		]);

	}
}
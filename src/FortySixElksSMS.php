<?php
/**
 * Created by PhpStorm.
 * User: larsemil
 * Date: 2017-08-22
 * Time: 10:47
 */

namespace NotificationChannels\FortySixElks;


class FortySixElksSMS extends FortySixElksMedia implements FortySixElksMediaInterface {
	protected $endpoint = 'https://api.46elks.com/a1/SMS';
	public $type = 'SMS';

	/**
	 * FortySixElksSMS constructor.
	 */
	public function __construct(){

		return parent::__construct();
	}

	/**
	 * @return $this
	 */
	public function send(){


		$response = $this->client->request('POST',$this->endpoint,[
			'form_params' => [
				'from' => $this->from,
				'message' => $this->getContent(),
				'to' => $this->phone_number,
				'flashsms' => $this->payload['flash'] ? 'yes' : 'no'
			],

		]);

		return $this;
	}


	public function flash(){
		$this->payload['flash'] = true;
		return $this;
	}
}
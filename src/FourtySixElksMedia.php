<?php
/**
 * Created by PhpStorm.
 * User: larsemil
 * Date: 2017-08-22
 * Time: 10:54
 */

namespace NotificationChannels\FourtySixElks;

use GuzzleHttp\Client;

class FourtySixElksMedia {

	protected $endpoint = null;
	protected $payload = [
		[ 'lines' ]   => [],
		[ 'subject' ] => ""
	];

	protected $username;
	protected $password;

	public function __construct() {
		$this->username = config( 'services.46elks.username' );
		$this->password = config( 'services.46elks.password' );

		$this->client = new GuzzleHttp\Client(
			[
				'headers' => [
					'Content-Type' => 'application/x-www-urlencoded'
				]
			]
		);
	}


	public function line( $line ) {
		$this->payload['lines'][] = $line;

		return $this;
	}

	public function subject( $subject ) {
		$this->payload['subject'] = $subject;

		return $this;
	}

	public function getContent() {
		return implode( PHP_EOL, $this->payload['lines'] );
	}

	public function getSubject() {
		return $this->payload['subject'];
	}
}
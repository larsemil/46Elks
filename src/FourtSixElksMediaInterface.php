<?php
/**
 * Created by PhpStorm.
 * User: larsemil
 * Date: 2017-08-22
 * Time: 11:06
 */

namespace NotificationChannels\FourtySixElks;


interface FourtSixElksMediaInterface {

	public function __construct();
	public function send();

}
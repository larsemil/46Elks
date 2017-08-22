<?php
/**
 * Created by PhpStorm.
 * User: larsemil
 * Date: 2017-08-22
 * Time: 11:06
 */

namespace NotificationChannels\FortySixElks;


/**
 * Interface FourtSixElksMediaInterface
 * @package NotificationChannels\FortySixElks
 */
interface FortySixElksMediaInterface {

	/**
	 * FourtSixElksMediaInterface constructor.
	 */
	public function __construct();

	/**
	 * @return mixed
	 */
	public function send();

}
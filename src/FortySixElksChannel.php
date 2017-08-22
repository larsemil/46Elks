<?php

namespace NotificationChannels\FortySixElks;

use NotificationChannels\FortySixElks\Exceptions\CouldNotSendNotification;
use NotificationChannels\FortySixElks\Events\MessageWasSent;
use NotificationChannels\FortySixElks\Events\SendingMessage;
use Illuminate\Notifications\Notification;

/**
 * Class FortySixElksChannel
 * @package NotificationChannels\FortySixElks
 */
class FortySixElksChannel
{
	/**
	 * FortySixElksChannel constructor.
	 */
	public function __construct()
    {
        // Initialisation code here
    }

    /**
     * Send the given notification.
     *
     * @param mixed $notifiable
     * @param \Illuminate\Notifications\Notification $notification
     *
     * @throws \NotificationChannels\FortySixElks\Exceptions\CouldNotSendNotification
     */
    public function send($notifiable, Notification $notification)
    {
        $media = $notification->to46Elks($notification);
		$media->send();
    }
}

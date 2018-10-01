<?php
/**
 * Created by PhpStorm.
 * User: larsemil
 * Date: 2018-10-01
 * Time: 19:01
 */

namespace NotificationChannels\FortySixElks;


class FortySixElksMMS extends FortySixElksMedia
{
    protected $endpoint = 'https://api.46elks.com/a1/mms';
    public $type = 'MMS';
    protected $image = null;
    public function __construct() {
        return parent::__construct();
    }

    public function image($url){
        $this->image = $url;
    }

    /**
     * @return $this
     */
    public function send() {

        try {
            $response = $this->client->request( 'POST', $this->endpoint, [
                'form_params' => [
                    'from'     => $this->from,
                    'message'  => $this->getContent(),
                    'to'       => $this->phone_number,
                    'image'    => $this->image
                ],

            ] );
        } catch ( GuzzleHttp\Exception\BadResponseException $e ) {
            $response = $e->getResponse();

            throw CouldNotSendNotification::serviceRespondedWithAnError($response->getBody()->getContents(), $response->getStatusCode());

        }

        return $this;
    }



}
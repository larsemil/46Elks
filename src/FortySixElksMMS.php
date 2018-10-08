<?php
/**
 * Created by PhpStorm.
 * User: larsemil
 * Date: 2018-10-01
 * Time: 19:01
 */

namespace NotificationChannels\FortySixElks;


use NotificationChannels\FortySixElks\Exceptions\CouldNotSendNotification;

class FortySixElksMMS extends FortySixElksMedia
{
    protected $endpoint = 'https://api.46elks.com/a1/mms';
    public $type = 'MMS';

    public function __construct() {
        return parent::__construct();
    }

    public function image($url){
        $this->payload['image'] = $url;
        return $this;
    }


    /**
     * @return $this
     */
    public function send() {

        try {
            echo 'doing request';
            $response = $this->client->request( 'POST', $this->endpoint, [
                'form_params' => [
                    'from'     => $this->from,
                    'message'  => $this->getContent(),
                    'to'       => $this->phone_number,
                    'image'    => isset($this->payload['image']) ? $this->payload['image'] : null
                ],

            ] );
            echo 'did request';
            var_dump($response);
        } catch ( GuzzleHttp\Exception\BadResponseException $e ) {
            $response = $e->getResponse();
            var_dump('WHOOT');
            throw CouldNotSendNotification::serviceRespondedWithAnError($response->getBody()->getContents(), $response->getStatusCode());

        }
        echo "hmm";
        return $this;
    }



}
<?php
namespace App\Http\Services;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

class TapServices
{
    private $base_url;
    private $header;
    private $request_client;
    public function __construct(Client  $request_client)
    {
        // base data //
        $this->request_client = $request_client;
        $this ->base_url = env('base_url');
        $this ->header = [
            'Content-Type' => 'application/json',
           'authorization' => 'Bearer' . env('Tap_token')
        ];
    }
    public function buildRequest($url , $method , $body =[] )
    {
        // establish connection //
        $request = new Request($method , $this->base_url . $url , $this->header);
        if(!$body)
             return false;
        $response = $this->request_client->send($request,[
            'json'=>$body
        ]);
        $response = json_decode($response->getBody(),true);
        return $response;
    }

    public function sendPaymentData($data)
    {
        $response = $this->buildRequest('v2/charges','POST',$data);
        return $response;

    }

}

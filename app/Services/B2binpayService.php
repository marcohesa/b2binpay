<?php 

namespace App\Services;

use App\Traits\ConsumeExternalServices;

class B2binpayService {

    use ConsumeExternalServices;

    public $baseUri;
    public $clientId;
    public $clientSecret;

    public function __construct()
    {
        $this->baseUri = config('services.b2binpay.base_uri');    
        $this->clientId = config('services.b2binpay.client_id');
        $this->clientSecret = config('services.b2binpay.client_secret');    
    }

    public function resolveAuthorization(&$queryParams, &$formParams, &$headers) {
        $headers['Authorization'] = $this->resolveAccessToken();
        $this->getToken($headers);
    }

    public function decodeResponse($response) {
        return json_decode($response);
    }

    public function resolveAccessToken() {
        $credentials = base64_encode("{$this->clientId}:{$this->clientSecret}");
        return "Basic {$credentials}";
    }

    public function createOrder($value, $currency) {
        return $this->makeRequest(
            'POST',
            '/api/v1/pay/bills',
            '[]',
            '[]',
            '[]',
            'wallet=2&amount=100000&lifetime=0&pow=8',
            $isJsonRequest = true,
        );
        

    }

    public function getToken($headers) {
        return $headers;
    }


}
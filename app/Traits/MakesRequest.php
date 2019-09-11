<?php

namespace App\Traits;

trait MakesRequest
{
    /**
     * @param string $httpVerb
     * @param string $resourceUri
     * @param array $formParams
     * @param null $storeID
     * @return bool|mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function makeRequest(string $httpVerb, string $resourceUri, array $formParams = [], $storeID = null)
    {
        if (isset($storeID)) {
            $entityQueryParam = 'storeID=' . $storeID;
        } else {
            $entityQueryParam = '';
        }

        try {
            $client = new \GuzzleHttp\Client();
            $response = $client->request($httpVerb,config('services.uza360.api_url') . $resourceUri . '?' . $entityQueryParam, [
                'headers' => [
                    'Authorization' => 'Bearer '.config('services.uza360.access_token'),
                    'Accept'        => 'application/json',
                ],
                (!empty($formParams)) ? $formParams : []
            ]);
            return \json_decode($response->getBody(),true);
        } catch (\Exception $exception) {
            return false;
        }
    }
}

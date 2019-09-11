<?php

namespace App\Repositories;


use App\Traits\MakesRequest;

class EcommerceBrandsRepository
{
    use MakesRequest;

    /**
     * @param null $storeID
     * @return bool|mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function list($storeID = null)
    {
        $response = $this->makeRequest('GET','/brands', [], $storeID);

        return $response;
    }
}

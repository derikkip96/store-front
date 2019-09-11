<?php

namespace App\Repositories;

use App\Traits\MakesRequest;

class EcommerceCatalogRepository
{
    use MakesRequest;

    /**
     * @param null $storeID
     * @return bool|mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function listBrands($storeID = null)
    {
        $response = $this->makeRequest('GET','/brands',[], $storeID);

        return $response;
    }

    /**
     * @param null $storeID
     * @return bool|mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function listCategories($storeID = null)
    {
        $response = $this->makeRequest('GET','/categories',[], $storeID);

        return $response;
    }

    /**
     * @param null $storeID
     * @return bool|mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function listProducts($storeID = null)
    {
        $response = $this->makeRequest('GET','/products',[],  $storeID);

        return $response;
    }

    /**
     * @param $brandID
     * @param null $storeID
     * @return bool|mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function listProductsByBrand($brandID, $storeID = null)
    {
        $response = $this->makeRequest('GET','/brands/' . $brandID . '/products', [],  $storeID);

        return $response;
    }

    /**
     * @param $categoryID
     * @param null $storeID
     * @return bool|mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function listProductsByCategory($categoryID, $storeID = null)
    {
        $response = $this->makeRequest('GET','/categories/' . $categoryID . '/products',[],  $storeID);

        return $response;
    }

}

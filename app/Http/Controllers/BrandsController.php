<?php

namespace App\Http\Controllers;

use App\Repositories\EcommerceCatalogRepository;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    protected $catalogRepo;

    public function __construct()
    {
        $this->catalogRepo = new EcommerceCatalogRepository();
    }

    public function index()
    {
        $brands = $this->catalogRepo->listBrands();

        return view('brand.index',compact('brands'));
    }

    public function show()
    {
    }
}

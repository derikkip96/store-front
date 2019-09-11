<?php

namespace App\Http\Controllers;

use App\Repositories\EcommerceCatalogRepository;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    protected $catalogRepo;

    public function __construct()
    {
        $this->catalogRepo = new EcommerceCatalogRepository();
    }

    public function index()
    {
        $products = $this->catalogRepo->listProducts();

        return view('product.index',compact('products'));
    }

    public function show($slug)
    {
    }
}

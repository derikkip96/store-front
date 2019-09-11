<?php

namespace App\Http\Controllers;

use App\Repositories\EcommerceCatalogRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $catalogRepo;

    public function __construct()
    {
        $this->catalogRepo = new EcommerceCatalogRepository();
    }

    public function home()
    {
        $brands = $this->catalogRepo->listBrands();
        $categories = $this->catalogRepo->listCategories();
        $products = $this->catalogRepo->listProducts();

        return view('home.home', compact('brands', 'categories','products'));
    }
}

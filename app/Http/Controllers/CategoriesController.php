<?php

namespace App\Http\Controllers;

use App\Repositories\EcommerceCatalogRepository;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    protected $catalogRepo;

    public function __construct()
    {
        $this->catalogRepo = new EcommerceCatalogRepository();
    }

    public function index()
    {
        $categories = $this->catalogRepo->listCategories();

        return view('category.index',compact('categories'));
    }

    public function show()
    {
    }
}

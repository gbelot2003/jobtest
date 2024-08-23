<?php

namespace App\Http\Controllers\Web\V1;

use Inertia\Inertia;
use App\Services\ProductServices;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request as RequestData;
use Illuminate\Support\Facades\Request;

class ProductsController extends Controller
{

    public function __construct(
        protected ProductServices $services
    )
    {
    }

    public function index()
    {
        return Inertia::render('Products/Index', [
            'products' => $this->services->Products(Request::input('search')),
            'filters' => Request::only(['search'])
        ]);
    }
}

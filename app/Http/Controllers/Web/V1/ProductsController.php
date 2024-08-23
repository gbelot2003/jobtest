<?php

namespace App\Http\Controllers\Web\V1;

use Inertia\Inertia;
use App\Models\Product;
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


    public function create()
    {
        return Inertia::render('Products/Create');
    }


    public function store(RequestData $request)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'description' => 'required',
            'category' => 'required',
            'image' => 'required'
        ]);

        $this->services->ProductsCreate($request);

        return to_route('products.index');
    }


    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return Inertia::render('Products/Edit', [
            'product' => $product
        ]);
    }

    public function update()
    {

    }
}

<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductServices
{

    public function Products($request)
    {
        $products = Product::query()
        ->when($request, function ($query, $search){
            $query->where('title', 'LIKE', "%{$search}%");
        })
        ->orderBy('id', 'DESC')
        ->paginate(8)
        ->withQueryString();

        return $products;
    }


    public function ProductsCreate(Request $request)
    {
        $product = Product::create($request->all());
        return $product;
    }

}

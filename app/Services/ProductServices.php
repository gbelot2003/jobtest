<?php

namespace App\Services;

use App\Models\Product;

class ProductServices
{

    public function Products($request)
    {
        $products = Product::query()
        ->when($request, function ($query, $search){
            $query->where('title', 'LIKE', "%{$search}%");
        })
        ->orderBy('id', 'DESC')
        ->paginate(10)
        ->withQueryString();

        return $products;
    }
}

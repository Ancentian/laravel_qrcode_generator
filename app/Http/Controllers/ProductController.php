<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $number = mt_rand(100000000, 9999999999);
        if($this->productCodeExists($number))
        {
            $number = mt_rand(100000000, 9999999999);
        }
        $request['product_code'] = $number;
        Product::create($request->all());
        return redirect('/');   
    }

    public function productCodeExists($number)
    {
        return Product::whereproductCode($number)->exists();
    }

    public function mpesa()
    {
        return view('mpesa.index');
    }

}

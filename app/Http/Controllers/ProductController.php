<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products=Product::with(['Category','images'])->paginate(env('PAGINATION_COUNT'));
        $currencyCode =env("CURRENT_CODE","$");
        return view('admin.products.products')->with(
            [
                'products' =>$products,
                'currency_code' =>$currencyCode
            ]
        );
    }
}

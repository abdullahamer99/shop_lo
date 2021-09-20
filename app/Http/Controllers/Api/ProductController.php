<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController;
use App\Http\Resources\ProductRessource;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;
use Validator;

class ProductController extends BaseController
{

    public function index()
    {
     $product =Product::paginate();
     return $this->sendResponse(ProductRessource::collection($product), 'All Products ');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input,[
            'title'=>'required',
            'description'=>'required',
            'price'=>'required',
            'total'=>'required',
            'category_id'=>'required',
//            'discount'=>'required',
//            'option'=>'required',
        ]);
        if ($validator->fails()) {
            return $this->sendError('Validate Error',$validator->errors() );
        }

               //way one create Product
               $product=new Product();
               $product->title=$request->input('title');
               $product->description=$request->input('description');
               $product->price=$request->input('price');
               $product->total=$request->input('total');
               $product->category_id=$request->input('category_id');
                $product->save();
                //way two create Product
            //        $product = Product::create($input);
        return $this->sendResponse($product, 'Product added Successfully!' );
    }


    public function show($id)
    {
       $product=Product::find($id);
        if(is_null($product)){
            return $this->sendError('Product not  found successfully');
        }
       return $this->sendResponse(new ProductRessource($product),'Product found successfully');

    }

    public function update(Request $request, Product $product)
    {
        $input = $request->all();
        $validator = Validator::make($input,[
            'title'=>'required',
            'description'=>'required',
            'price'=>'required',
            'total'=>'required',
            'category_id'=>'required',
//            'discount'=>'required',
//            'option'=>'required',
        ]);
        if ($validator->fails()) {
            return $this->sendError('Validate Error',$validator->errors() );
        }

        //way one create Product
//        $product=new Product();
//        $product->title=$request->input('title');
//        $product->description=$request->input('description');
//        $product->price=$request->input('price');
//        $product->total=$request->input('total');
//        $product->category_id=$request->input('category_id');
//        $product->update();
        //way two create Product
                $product = (new \App\Models\Product)->update($input);
        return $this->sendResponse($product, 'Product update Successfully!' );
    }


    public function destroy(Product $product)
    {
        //
    }
}

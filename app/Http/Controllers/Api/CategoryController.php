<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController;
use App\Http\Resources\CategoryRessource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends BaseController
{
    public function index()
    {
        $category=Category::paginate();
        return $this->sendResponse(CategoryRessource::collection($category),'All Categories');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $category=Category::find($id);
        if(is_null($category)){
            return $this->sendError('Category not  found successfully');
        }
        return $this->sendResponse(new CategoryRessource($category),'Category found successfully');

    }


    public function edit(Category $category)
    {
        //
    }

    public function update(Request $request, Category $category)
    {
        //
    }


    public function destroy(Category $category)
    {
        //
    }
}

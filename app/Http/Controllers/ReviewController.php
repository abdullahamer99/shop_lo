<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(){
        $reviews=Review::with(['customer','product'])->paginate(env('PAGINATION_COUNT'));
        return view('admin.reviews.rewiews')->with([
            'reviews' => $reviews
        ]);
    }
}

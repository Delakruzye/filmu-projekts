<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Review;

class ReviewController extends Controller
{
    public function create()
    {
        return view('review.create');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'Film_Title' => 'required',
        //     'Review_Title' => 'required',
        //     'picurl' => 'required',
        //     'filmyear' => 'required',
        //     'rating' => 'required',
        //     'description' => 'required',
        // ]);

        $review = new Review([
            'Film_Title' => $request->get('Film_Title'),
            'Review_Title' => $request->get('Review_Title'),
            'picurl' => $request->get('picurl'),
            'filmyear' => $request->get('filmyear'),
            'rating' => $request->get('rating'),
            'description' => $request->get('description'),
        ]);
        $review->save();
        return redirect('/reviews')->with('success', 'Post saved!');
    }


    public function index()
    {

        $reviews = Review::orderBy('created_at', 'desc')->get();
        return view('reviews', ['reviews' => $reviews]);
    }

    
}

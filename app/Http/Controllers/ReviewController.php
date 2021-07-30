<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function getAllReviews()
    {
        return view('reviews',
            [
                'reviews' => Review::all()
            ]);
    }

    public function getSingleReview($id)
    {
        return view(
            'review',
            [
                'review' => Review::findOrFail($id)
            ]);
    }
}

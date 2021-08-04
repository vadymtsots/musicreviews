<?php

namespace App\Http\Controllers;

use App\Models\RecordType;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function getAllReviews()
    {
        return view('reviews',
            [
                'reviews' => Review::with("recordType")->get()
            ]);
    }

    public function getSingleReview(Review $review)
    {
        return view(
            'review',
            [
                'review' => $review
            ]);
    }

    public function getRecordType(RecordType $recordType)
    {
        return view('reviews',
            [
                'reviews' => $recordType->reviews
            ]);
    }

    public function getUser(User $user)
    {
        return view('reviews',
        [
           'reviews' => $user->reviews
        ]);
    }
}

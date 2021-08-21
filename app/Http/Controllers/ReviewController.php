<?php

namespace App\Http\Controllers;

use App\Models\RecordType;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Fetch all reviews from the database
     *
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function getAllReviews()
    {
        return view('reviews',
            [
                'reviews' => Review::latest()->filter(request(['search', 'recordType', 'user']))->get(),
            ]
        );
    }

    /**
     * Fetch a single review from the database
     *
     *
     * @param Review $review
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */

    public function getSingleReview(Review $review)
    {
        return view(
            'review',
            [
                'review' => $review,
            ]);
    }


    /**
     * Fetch all reviews that are of a specific record type: LP, EP or Single
     *
     *
     * @param RecordType $recordType
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
   /* public function getRecordType(RecordType $recordType)
    {
        return view('reviews',
            [
                'reviews' => $recordType->reviews,
                'currentRecordType' => $recordType,
                'recordTypes' => recordType::all()
            ]);
    } */

    /**
     * Fetch all reviews created by a specified user
     *
     *
     * @param User $user
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function getUser(User $user)
    {
        return view('reviews',
        [
           'reviews' => $user->reviews,
        ]);
    }
}

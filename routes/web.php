<?php

use Illuminate\Support\Facades\Route;
use App\Models\Review;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/reviews', function()
{
    $reviews = Review::getAllReviews();

    return view('reviews',
    [
        'reviews' => $reviews
    ]);
});

Route::get('/reviews/{review}', function($slug)
{

    return view(
        'review',
        [
            'review' => Review::findSingleReview($slug)
        ]);

})->whereAlphaNumeric('review');

<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use App\Models\Review;
use Spatie\YamlFrontMatter\YamlFrontMatter;

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
    return view('reviews',
        [
            'reviews' => Review::getAllReviews()
        ]);
});

Route::get('/reviews/{review}', function($slug)
{

    return view(
        'review',
        [
            'review' => Review::getSingleReview($slug)
        ]);

})->whereAlphaNumeric('review');

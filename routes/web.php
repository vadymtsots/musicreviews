<?php

use App\Http\Controllers\ReviewController;
use App\Models\RecordType;
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

Route::get('/reviews', [ReviewController::class, 'getAllReviews']);

Route::get('/reviews/{review}', [ReviewController::class, 'getSingleReview']);

Route::get('/recordTypes/{recordType:name}', [ReviewController::class, 'getRecordType']);

Route::get('/users/{user:name}', [ReviewController::class, 'getUser']);

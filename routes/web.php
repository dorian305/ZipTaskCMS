<?php

use Illuminate\Support\Facades\Route;

use App\Models\Page;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Render the page template
Route::get('/pages/{slug}', function ($slug) {
    // Get the page
    $page = Page::where('slug', $slug)->first();


    // If the publishing date isn't in the past, abort
    $publishedInThePast = strtotime($page->published_at) < strtotime(date('Y-m-d H:i:s'));
    if (!$publishedInThePast) abort(404);

    
    return view('page', [
        'page' => $page,
    ]);
});
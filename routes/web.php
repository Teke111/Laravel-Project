<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;

// use Illuminate\Routing\Route;

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

//All Listings
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
    ]);
});

//Single Listing
Route::get('/listings/{id}', function ($id) {
    return view('listing', [
        'listing' => Listing::find($id)
    ]);
});









// //ROUTING & RESPONSE
// Route::get('/hello', function () {
//     return response('<h1>Hello World</h1>', 200)
//         ->header('Content-Type', 'text/plain');
// });

// //WILD CARD
// Route::get('/posts/{id}', function ($id) {
//     return response('Post ' . $id);
// });

// //ROUTE CONSTRAINT
// Route::get('/likes/{id}', function ($id) {
//     return response('Likes ' . $id);
// })->where('id', '[0-9]+');

// //DEBUGGING OR SHOWING VALUES
// Route::get('/apples/{id}', function ($id) {
//     // dd($id); //die and dump  //dd stops everything and shows it value

//     return response('apple ' . $id);
// });

// //REQUEST & QUERY PARAMS
// Route::get('/search', function (Request $request) {
//     // dd($request);
//     return $request->name . ' ' . $request->city;
// });
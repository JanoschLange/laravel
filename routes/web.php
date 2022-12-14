<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Listing;


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

//All Listing
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
      ]);
 });


//single Listing
Route::get('/listings/{id}', function($id){
    return view('listing', [
        'listing' => Listing::find($id)
    ]);
});


//Anbauanleigung show
Route::get('/anbauanleitung1000000', function () {
    return view('anbauanleitung');
})->name('anbauanleitung');



Route::get('/posts/{id}', function($id){
            dd($id);
            return response('Post ' . $id);
});
//-> where('id', '[0-9]+');

//Request parameter über request auslesen
Route::get('/search', function(Request $request){
    //dd($request); -----> zeigt mir alle Parameter des Requests
    return ($request -> name . '' . $request -> city);
});
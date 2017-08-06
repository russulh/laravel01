<?php

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

// Route::get('/', function () {
//    //  return view('welcome');
//    return view('pages.home');
// });

Route::get('/', 'PagesController@getHome');

Route::get('/about', function () {
   $var = "BOO 👻";
   $bool_v  =  false;
   $names   =  ["Russul", "Ragda", "Ruaa", "Marwa"];
   $names2  =  [];
   // 3 ways to send data to veiw
   // return view('about', ['var'=>$var]);
   // compact is the cleanest way to use (*ps : varname must be without -$- char)
   return view('pages.about', compact('var','bool_v', 'names', 'names2'));
   // return view('about')->with(['var'=>$var]);
});

// Route::get('/videos', function () {
//    return view('pages.videos');
// });

Route::get('/videos/{id?}/{name?}', 'PagesController@getVideos');

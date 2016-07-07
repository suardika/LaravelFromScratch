<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
//    $people = [];
    $people = ['Taylor', 'Matt', 'Jeffrey'];

    return view('welcome')->withPeople($people);

//    return view('welcome', [
//    ]);

//    return view('welcome')->with(['people' => $people]);
//    return view('welcome')->with('people', $people)->with();
//    return View::make();
//    return view('welcome')->with('people', $people);
//    return view('welcome', compact('people'));
//    return view('welcome', ['people' => $people]);
//    return view('welcome');
});

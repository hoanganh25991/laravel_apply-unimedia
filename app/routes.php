<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function () {
    return View::make('hello');
});

Route::group(["prefix" => "category"], function(){
    Route::get("/", 'CategoryController@showList');
    //bind model Category > category
    Route::model("category", "Category");
    Route::get("/{category}", 'CategoryController@getOne');
});

Route::group(["prefix" => "product"], function(){
    Route::get("/", function(){});

    //bind model Product > product
    Route::model("product", "Product");
    Route::get("/{product}", "ProductController@getOne");
    Route::post("/{product}", "ProductController@saveOne");
});

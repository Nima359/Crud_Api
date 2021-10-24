<?php

use Nima\Crud\App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get ("/" , function () {
  return view ("CrudApi::welcome");
});


Route::get ("/appApi" , function () {
  return view ("Crud:Api:app.app");
});

Route::get ("login" , "\Nima\Crud_Api\App\Http\Controllers\LoginController@index");


//Route::resource ("post" , PostController::class);


Route::get ("postApi" , "\Nima\Crud_Api\App\Http\Controllers\PostController@index")->name ("postApi.index");

Route::get ("postApi/{post}" , "\Nima\Crud_Api\App\Http\Controllers\PostController@show")->name ("postApi.show");

Route::get ("postApi/{post}/create" , "\Nima\Crud_Api\App\Http\Controllers\PostController@create")->name ("postApi.create");

Route::get ("postApi/{post}/edit" , "\Nima\Crud_Api\App\Http\Controllers\PostController@edit")->name ("postApi.edit");

Route::post ("postApi" , "\Nima\Crud_Api\App\Http\Controllers\PostController@store")->name ("postApi.store");
Route::put ("postApi/{post}" , "\Nima\Crud_Api\App\Http\Controllers\PostController@update")->name ("postApi.update");
Route::delete ("postApi/{post}" , "\Nima\Crud_Api\App\Http\Controllers\PostController@destroy")->name ("postApi.destroy");



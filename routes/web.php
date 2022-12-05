<?php

use Illuminate\Support\Facades\Route;

Route::get('/','MainController@mainpage');

Route::get('/addbook','AddBookController@add_book');

Route::get('/booklist','BookController@allBooks');

Route::get('/userlist','UserController@user_page');

Route::post('/addbook/books','AddBookController@Books');


Route::get('/booklist/{id}','AddBookController@detailsbook')->name('detailsbook');
Route::get('/booklist', [App\Http\Controllers\AddBookController::class, 'allBooks'])->name('booklist');
Route::get('/booklist/{id}/update','AddBookController@updatebook')->name('updatebook');
Route::post('/booklist/{id}/update','AddBookController@updatebookup')->name('updatebookup');
Route::get('/booklist/{id}/delete','AddBookController@deletebook')->name('deletebook');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

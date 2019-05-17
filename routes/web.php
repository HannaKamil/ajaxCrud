<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('manage-item-ajax', 'ItemAjaxController@manageItemAjax');
Route::resource('item-ajax', 'ItemAjaxController');

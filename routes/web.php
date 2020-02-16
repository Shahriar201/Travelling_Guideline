<?php

Route::resource('admin/region','Admin\RegionController');
Route::resource('admin/place','Admin\PlaceController');
Route::resource('admin/guide','Admin\GuideController');


Route::get('/', function () {
    return view('web.welcome');
});

Route::get('admin/home', function ()
{
    return view('admin.welcome');
});



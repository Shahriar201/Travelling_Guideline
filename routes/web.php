<?php

Route::resource('dashboard/region','Admin\RegionController');
Route::resource('dashboard/place','Admin\PlaceController');
Route::resource('dashboard/guide','Admin\GuideController');



Route::get('/', function () {
    return view('web.welcome');
});

Route::get('admin/home', function ()
{
    return view('admin.welcome');
});

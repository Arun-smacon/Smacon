<?php

// Resource routes  for category
Route::group(['prefix' => set_route_guard('web').'/broucher'], function () {
    Route::resource('category', 'CategoryResourceController');
});



// Resource routes  for product
Route::group(['prefix' => set_route_guard('web').'/broucher'], function () {
    Route::resource('product', 'ProductResourceController');
});



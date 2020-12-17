<?php
use Illuminate\Support\Facades\Route;

Route::get('greeting', function () {
    return 'Hi, this is your awesome package! Rtrm';
});

Route::get('rtrm/test', 'EdgeWizz\Rtrm\Controllers\RtrmController@test')->name('test');

Route::post('fmt/rtrm/store', 'EdgeWizz\Rtrm\Controllers\RtrmController@store')->name('fmt.rtrm.store');

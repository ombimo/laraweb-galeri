<?php

use Illuminate\Support\Facades\Route;
use Ombimo\LarawebGaleri\Controller\GaleriController;
use Ombimo\LarawebGaleri\Controller\GaleriDetailController;

if (config('laraweb.multilang')) {
    $prefix = '{locale}';
} else {
    $prefix = '';
}

Route::group([
    'middleware' => 'web',
    'prefix' => $prefix,
], function() {

    Route::get('galeri', [GaleriController::class, 'index'])->name('galeri-index');
    Route::get('galeri/{id}/{slug?}', [GaleriDetailController::class, 'get'])->name('galeri-detail');

});

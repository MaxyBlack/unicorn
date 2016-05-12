<?php
Route::group(['middleware' => 'web'], function() {

    /**
     * Frontend Routes
     * Namespaces indicate folder structure
     */
    Route::group(['namespace' => 'Frontend'], function () {
        require (__DIR__ . '/Frontend/Frontend.php');
        require (__DIR__ . '/Frontend/Access.php');
    });
});

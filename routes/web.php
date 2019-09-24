<?php

Route::group([
    'middleware' => ['auth'], 
    'namespace' => 'Admin', 
    'prefix' => 'admin'
], function () {
    Route::get('/', 'AdminController@index')->name('admin.home');
    Route::get('/pacientes', 'PacientesController@index')->name('admin.home');
    Route::get('/profissionais', 'ProfissionaisController@index')->name('admin.home');
    Route::get('/convenios', 'ConveniosController@index')->name('admin.home');
});

Route::group([
    'namespace' => 'Site', 
    'prefix' => 'site'
], function () {
    Route::get('/', 'SiteController@index')->name('home');
});

Auth::routes();


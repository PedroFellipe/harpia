<?php

Route::group(['prefix' => 'geral', 'middleware' => ['auth']], function () {
    Route::controllers([
        'pessoas' => '\Modulos\Geral\Http\Controllers\PessoasController',
    ]);
});
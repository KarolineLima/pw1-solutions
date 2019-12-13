<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Usuarios' , 'UsuariosController@index');


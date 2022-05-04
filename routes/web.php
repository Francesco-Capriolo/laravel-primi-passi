<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // $data= ['lista' =>['primi', 'passi','laravel'],'url'=>['primi','passi','laravel']];
    $data= ['lista' =>
    [
        [
            'name'=>'primi',
            'url' => 'desio',
        ],
        [
            'name'=>'passi',
            'url' => 'casio',
        ],
        [
            'name'=>'in Laravel',
            'url' => 'lara',
        ],
    ]
];
    return view('home', $data);
});

Route::get('/primi', function () {
    return view('primi');
})->name('desio');

Route::get('/passi', function () {
    return view('passi');
})->name('casio');

Route::get('/laravel', function () {
    return view('laravel');
})->name('lara');

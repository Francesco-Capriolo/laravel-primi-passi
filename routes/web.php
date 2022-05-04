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
            'url' => 'primi',
        ],
        [
            'name'=>'passi',
            'url' => 'passi',
        ],
        [
            'name'=>'in Laravel',
            'url' => 'laravel',
        ],
    ]
];
    dump($data);
    return view('home', $data);
});

Route::get('/primi', function () {
    return view('primi');
})->name('primi');

Route::get('/passi', function () {
    return view('passi');
})->name('passi');

Route::get('/laravel', function () {
    return view('laravel');
})->name('laravel');

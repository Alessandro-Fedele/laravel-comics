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
    return view("homepage.index");
})->name("homepage.index");

Route::get('/comics', function () {
    $comicsArray = config('comics');

    $data = [];
    // uso l'indice come ID
    foreach ($comicsArray as $index => $comic) {
        $comic["id"] = $index;
        $data[] = $comic;
    }
    // dump($data);

    return view('comics.index', ["comics" => $comicsArray]);
})->name("comics");

// {id}->Parametro url - che può cambiare
Route::get('/comics/{id?}', function ($id) {
    $data = config('comics');

    if (is_numeric($id) && $id >= 0 && $id < count($data)) {
        $comic = $data[$id];

        return view("comics.details", [
            "comic" => $comic
        ]);
    } else {
        abort('404');
    }
})->name("comics.details");

Route::get('/extra', function () {
    return view("pages.index");
})->name("pages.index");

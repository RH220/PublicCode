<?php
use App\rh;

Route::get('/LaravelPractice', function () {
    $data = namelist::all();
    return view('index',[
        'db1'=>$data
    ]);
});
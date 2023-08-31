<?php

use App\Http\Requests\TestFormRequest;
use Illuminate\Support\Facades\Route;

Route::get('/test2', function (TestFormRequest $request) {
    dd($request->all());
});

Route::get('/', function () {
    return view('welcome');
});

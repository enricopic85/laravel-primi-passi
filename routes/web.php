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

Route::get('/helloworld', function () {
    $data=[
        'paragrafo1'=>"Laravel values beauty. We love clean code just as much as you do. Simple, elegant syntax puts amazing functionality at your fingertips. Every feature has been thoughtfully considered to provide a wonderful developer experience.",
        'paragrafo2'=>"Or, let Laravel serve as a robust backend API for your Next.js application, mobile application, or other frontend. Either way, our starter kits will have you productive in minutes.",
        'paragrafo3'=>"Nel mezzo del cammin di nostra vita mi ritrovai in una selva oscura che la diritta via era smarrita"
    ];
    return view('helloworld',[
        "data"=>$data
    ]);
});

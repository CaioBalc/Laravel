<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/queries', function() {
    #$event = \App\Models\Event::all(); # select * from events
    #$event = \App\Models\Event::all(['title', 'description']); # select title, description from events 
    #$event = \App\Models\Event::where('id', 1)->get(); # select * from events where id = 1
    # or
    #$event = \App\Models\Event::where('id', 1)->first();
    #$event = \App\Models\Event::where('id', 1)->get();
    #$event = \App\Models\Event::find(1);

    #return $event;
});

Route::get('/queries/{id}', function($event) {
    $event = \App\Models\Event::find($event);

    return $event;
});

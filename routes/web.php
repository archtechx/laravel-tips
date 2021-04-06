<?php

use App\Models\Thread;
use App\Models\Tip;
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


Route::middleware('static')->group(function () {
    Route::get('/', function () {
        return view('tips.index', ['tips' => Tip::all()]);
    })->name('tip.index');

    Route::get('/threads/{thread}', function (Thread $thread) {
        return view('threads.show', [
            'thread' => $thread,
            'tips' => $thread->tips,
        ]);
    })->name('thread.show');

    Route::get('/{tip}', function (Tip $tip) {
        return view('tips.show', compact('tip'));
    })->name('tip.show');
});

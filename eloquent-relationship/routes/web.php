<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $user = App\Models\User::first();

    $post = $user->posts()->create([
        'title' => 'foobar',
        'body' => 'FerKen',
    ]);

    $post->tags()->attach(1);

    return view('welcome');
});

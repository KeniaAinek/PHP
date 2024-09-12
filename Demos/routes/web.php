<?php
use App\Models\Job;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController; 
use App\Http\Controllers\UserController;
use App\Http\Controllers\SessionController;

Route::get('test', function (){
    
    return 'Posted';
});

Route::view('/', 'home');
Route::view('/contact', 'contact');

/* Route::controller(JobController::class)->group(function (){
    Route::get('/jobs', 'index');
    Route::get('/jobs/create', 'create');
    Route::get('/jobs/{job}', 'show');
    Route::post('/jobs', 'store');
    Route::get('/jobs/{job}/edit', 'edit');
    Route::patch('/jobs/{job}', 'update');
    Route::delete('/jobs/{job}', 'destroy');
}); */

Route::get('/jobs', [JobController::class, 'index']);
Route::get('/jobs/create', [JobController::class, 'create']);
Route::get('/jobs/{job}', [JobController::class, 'show']);
Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');

Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])
->middleware('auth')
->can('edit', 'job');

Route::patch('/jobs/{job}', [JobController::class, 'update'])
->middleware('auth')
->can('update', 'job');

Route::delete('/jobs/{job}', [JobController::class, 'destroy'])
->middleware('auth')
->can('delete', 'job');




//Route::resource('jobs', JobController::class);

//Auth
Route::get('/register', [UserController::class, 'create']);
Route::post('/register', [UserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);
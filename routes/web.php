<?php

use Illuminate\Support\Facades\Route;
use App\Models\Counsellor;

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
    $users = Counsellor::where(['type' => "COUNSELLER"])
    ->get();  
    return view('index',compact('users'));
});

// Route::get('logout', Auth::logout())->name('auth.logout');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/user', [App\Http\Controllers\CounsellorController::class, 'index'])->name('user');
Route::get('/user/create', [App\Http\Controllers\CounsellorController::class, 'new'])->name('new');
Route::get('/user/view/{id}', [App\Http\Controllers\CounsellorController::class, 'view'])->name('user');
Route::get('/user/edit/{id}', [App\Http\Controllers\CounsellorController::class, 'edit'])->name('edit');

Route::post('/user/create', [App\Http\Controllers\CounsellorController::class, 'create'])->name('create');
Route::post('/user/edit/{id}', [App\Http\Controllers\CounsellorController::class, 'update'])->name('create');

Route::get('/user/delete/{id}', [App\Http\Controllers\CounsellorController::class, 'delete'])->name('delete');


Route::get('/student', [App\Http\Controllers\StudentController::class, 'index'])->name('user');
Route::get('/student/create', [App\Http\Controllers\StudentController::class, 'new'])->name('new');
Route::get('/student/view/{id}', [App\Http\Controllers\StudentController::class, 'view'])->name('user');
Route::get('/student/edit/{id}', [App\Http\Controllers\StudentController::class, 'edit'])->name('edit');

Route::post('/student/create', [App\Http\Controllers\StudentController::class, 'create'])->name('create');
Route::post('/student/edit/{id}', [App\Http\Controllers\StudentController::class, 'update'])->name('create');


Route::get('/user/delete/{id}', [App\Http\Controllers\StudentController::class, 'delete'])->name('delete');



Route::get('/questions', [App\Http\Controllers\QuestionController::class, 'index'])->name('question');
Route::get('/questions/create', [App\Http\Controllers\QuestionController::class, 'create'])->name('new');
Route::get('/questions/view/{id}', [App\Http\Controllers\QuestionController::class, 'view'])->name('user');
Route::get('/questions/edit/{id}', [App\Http\Controllers\QuestionController::class, 'edit'])->name('edit');
Route::get('/questions/delete/{id}', [App\Http\Controllers\QuestionController::class, 'destroy'])->name('destroy');


Route::post('/questions/create', [App\Http\Controllers\QuestionController::class, 'store'])->name('create');
Route::post('/questions/edit/{id}', [App\Http\Controllers\QuestionController::class, 'update'])->name('create');

Route::get('/services', [App\Http\Controllers\ServiceController::class, 'index'])->name('services');
Route::post('/services/create', [App\Http\Controllers\ServiceController::class, 'store'])->name('create');

Route::get('/sessions', [App\Http\Controllers\SessionRequestController::class, 'index'])->name('question');
Route::get('/sessions/view/{id}', [App\Http\Controllers\SessionRequestController::class, 'show'])->name('user');

Route::post('/sessions/view/{id}', [App\Http\Controllers\SessionRequestController::class, 'update'])->name('create');


Route::get('/counsellors', [App\Http\Controllers\CounsellorController::class, 'index'])->name('user');

Route::get('/servicesFromCounsellor/{id}', [App\Http\Controllers\ServiceFromCounsellorController::class, 'index'])->name('services');
Route::post('/servicesFromCounsellor/create', [App\Http\Controllers\ServiceFromCounsellorController::class, 'store'])->name('create');

Route::get('/mysessions', [App\Http\Controllers\SessionRequestController::class, 'index'])->name('question');
Route::get('/mysessions/{id}', [App\Http\Controllers\SessionRequestController::class, 'show'])->name('user');

Route::get('storage/images/{filename}', function ($filename)
{
    // dd("asdfasdas");
    $path = storage_path('app\public\images/' . $filename);
            // dd($path );
    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});


// Route::get('/user/{id}', 'CounsellorController@view');

// Route::get('/user', 'CounsellorController@index')->name('user');
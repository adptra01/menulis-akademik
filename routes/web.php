<?php

use App\Models\Tutor;
use App\Models\Personil;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\AcademyController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ArgumentController;
use App\Http\Controllers\PersonilController;
use App\Http\Controllers\GuidelineController;
use App\Http\Controllers\ArgumentCategoryController;

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

Auth::routes();


Route::get('/', function () {
    $personils = Personil::get();
    $tutors = Tutor::get();
    return view('welcome', [
        'personils' => $personils,
        'tutors' => $tutors,
    ]);
});

Route::get('/courses-academies', [HomeController::class, 'academies'])->name('courses.academies');
Route::get('/courses-arguments', [HomeController::class, 'arguments'])->name('courses.arguments');
Route::get('courses/{slug}', [HomeController::class, 'details'])->name('details');
Route::get('courses-guidelines', [HomeController::class, 'guidelines'])->name('courses.guidelines');
Route::get('courses-services', [HomeController::class, 'services'])->name('courses.services');
Route::get('courses-abouts', [HomeController::class, 'abouts'])->name('courses.abouts');


Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::post('/image-upload', [AcademyController::class, 'storeImage'])->name('image.upload');
    // Route::get('/materials', [HomeController::class, 'materials'])->name('materials');
});


Route::prefix('/academies')->group(function () {
    Route::get('/', [AcademyController::class, 'index'])->name('academy');
    Route::post('/', [AcademyController::class, 'store'])->name('academy.store');
    Route::get('/{slug}', [AcademyController::class, 'show'])->name('academy.show');
    Route::put('/{slug}', [AcademyController::class, 'update'])->name('academy.update');
    Route::delete('/{slug}', [AcademyController::class, 'destroy'])->name('academy.destroy');
});


Route::prefix('/arguments')->group(function () {
    Route::get('/', [ArgumentController::class, 'index'])->name('argument');
    Route::post('/', [ArgumentController::class, 'store'])->name('argument.store');
    Route::get('/{slug}', [ArgumentController::class, 'show'])->name('argument.show');
    Route::put('/{slug}', [ArgumentController::class, 'update'])->name('argument.update');
    Route::delete('/{slug}', [ArgumentController::class, 'destroy'])->name('argument.destroy');
});

Route::prefix('/argument-categories')->group(function () {
    Route::get('/', [ArgumentCategoryController::class, 'index'])->name('argumentCategory');
    Route::post('/', [ArgumentCategoryController::class, 'store'])->name('argumentCategory.store');
    Route::get('/{slug}', [ArgumentCategoryController::class, 'show'])->name('argumentCategory.show');
    Route::put('/{slug}', [ArgumentCategoryController::class, 'update'])->name('argumentCategory.update');
    Route::delete('/{slug}', [ArgumentCategoryController::class, 'destroy'])->name('argumentCategory.destroy');
});


Route::prefix('tutors')->group(function () {
    route::get('/', [TutorController::class, 'index'])->name('tutor');
    route::post('/', [TutorController::class, 'store'])->name('tutor.store');
    route::get('/{slug}', [TutorController::class, 'show'])->name('tutor.show');
    route::put('/{slug}', [TutorController::class, 'update'])->name('tutor.update');
    route::delete('/{slug}', [TutorController::class, 'destroy'])->name('tutor.destroy');
});

Route::prefix('personils')->group(function () {
    route::get('/', [PersonilController::class, 'index'])->name('personil');
    route::post('/', [PersonilController::class, 'store'])->name('personil.store');
    route::get('/{slug}', [PersonilController::class, 'show'])->name('personil.show');
    route::put('/{slug}', [PersonilController::class, 'update'])->name('personil.update');
    route::delete('/{slug}', [PersonilController::class, 'destroy'])->name('personil.destroy');
});

Route::prefix('abouts')->group(function () {
    Route::get('/', [AboutController::class, 'index'])->name('about');
    Route::put('/{id}', [AboutController::class, 'update'])->name('about.update');
});

Route::prefix('guidelines')->group(function () {
    Route::get('/', [GuidelineController::class, 'index'])->name('guideline');
    Route::put('/{id}', [GuidelineController::class, 'update'])->name('guideline.update');
});

Route::prefix('services')->group(function () {
    Route::get('/', [ServiceController::class, 'index'])->name('service');
    Route::put('/{id}', [ServiceController::class, 'update'])->name('service.update');
});

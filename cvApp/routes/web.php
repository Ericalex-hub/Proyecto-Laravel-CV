<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\CurriculumController;;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

//Rutas del main
Route::get('/', [MainController::class, 'main']) -> name('main');

//Rutas del Curriculum
Route::get('curriculums', [CurriculumController::class, 'index']) -> name('curriculums');
Route::get('curriculums/create', [CurriculumController::class, 'create']) -> name('curriculums.create');
Route::post('curriculums', [CurriculumController::class, 'store']) ->name('curriculums.store');
Route::get('curriculums/{curriculum}', [CurriculumController::class, 'show']) ->name('curriculums.show');
Route::get('curriculums/{curriculum}/edit', [CurriculumController::class, 'edit']) ->name('curriculums.edit');
Route::put('curriculums/{curriculum}', [CurriculumController::class, 'update']) -> name('curriculums.update');
Route::delete('curriculums/{curriculum}', [CurriculumController::class, 'destroy']) -> name('curriculums.destroy');
<?php

use App\Http\Controllers\ExamenController;
use App\Http\Controllers\QuestionDeuxController;
use App\Http\Controllers\QuestionQuatreController;
use App\Http\Controllers\QuestionTroisController;
use App\Http\Controllers\QuestionUnController;
use Illuminate\Support\Facades\Route;

Route::get('/', [QuestionUnController::class, 'index'])
    ->name('app_home');

Route::get('/question/deux/{id}', [QuestionDeuxController::class, 'index'])
    ->name('app_question_deux');

Route::get('/question/trois/{id}', [QuestionTroisController::class, 'index'])
    ->name('app_question_trois');

Route::post('/question/trois/{id}', [QuestionTroisController::class, 'commentAdd'])->name('app_question_trois.commentAdd');

Route::get('/question/quatre/{idChannel}', [QuestionQuatreController::class, 'index'])
    ->name('app_question_quatre');

Route::post('/question/quatre/{idChannel}', [QuestionQuatreController::class, "channelEdit"])->name("app_question_quatre.edit");

Route::get('/resultats/{numeroQuestion}', [ExamenController::class, 'index'])
    ->name('app_resultat');

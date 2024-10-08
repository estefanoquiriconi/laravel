<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;


Route::get('/note', [NoteController::class, 'index'])->name('note.index');
Route::get('/note/create', [NoteController::class, 'create'])->name('note.create');
Route::post('note/store', [NoteController::class, 'store'])->name('note.store');
Route::get('note/edit/{note}', [NoteController::class, 'edit'])->name('note.edit');
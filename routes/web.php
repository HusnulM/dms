<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\PeraturanController;
use App\Http\Controllers\KategoriJenisDokumenController;
use App\Http\Controllers\JenisDokumenController;

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

Route::get('/', [DokumenController::class, 'index']);
Route::any('dokumen/datatables', [DokumenController::class, 'datatables'])->name('dokumen.datatables');

// Kategori 
Route::any('dokumen/kategori/datatables', [KategoriJenisDokumenController::class, 'datatables'])->name('kategori.datatables');
Route::get('dokumen/kategori', [KategoriJenisDokumenController::class, 'index'])->name('kategori.index');
Route::any('dokumen/kategori/create', [KategoriJenisDokumenController::class, 'create'])->name('kategori.create');
Route::post('dokumen/kategori/store', [KategoriJenisDokumenController::class, 'store'])->name('kategori.store');
Route::get('dokumen/kategori/{kategoriJenisDokumen}/edit/', [KategoriJenisDokumenController::class, 'edit'])->name('kategori.edit');
Route::put('dokumen/kategori/{kategoriJenisDokumen}', [KategoriJenisDokumenController::class, 'update'])->name('kategori.update');
Route::delete('dokumen/kategori/{kategoriJenisDokumen}', [KategoriJenisDokumenController::class, 'destroy'])->name('kategori.destroy');
// END Kategori

// Jenis 
Route::any('dokumen/jenis/datatables', [JenisDokumenController::class, 'datatables'])->name('jenis.datatables');
Route::get('dokumen/jenis', [JenisDokumenController::class, 'index'])->name('jenis.index');
Route::any('dokumen/jenis/create', [JenisDokumenController::class, 'create'])->name('jenis.create');
Route::post('dokumen/jenis/store', [JenisDokumenController::class, 'store'])->name('jenis.store');
Route::get('dokumen/jenis/{JenisDokumen}/edit/', [JenisDokumenController::class, 'edit'])->name('jenis.edit');
Route::put('dokumen/jenis/{JenisDokumen}', [JenisDokumenController::class, 'update'])->name('jenis.update');
Route::delete('dokumen/jenis/{JenisDokumen}', [JenisDokumenController::class, 'destroy'])->name('jenis.destroy');
// END Jenis

// Route::resource('peraturan', PeraturanController::class);
Route::get('peraturan', [PeraturanController::class, 'index']);
Route::any('peraturan/list', [PeraturanController::class, 'getPeraturan'])->name('peraturans.list');
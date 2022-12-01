<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CKEditorController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('dashboard')->middleware(['auth'])->group(function () {
    Route::get('/', function () {return view('dashboard'); })->name('dashboard');

    Route::get('/redessociais', function () {return view('redessociais');})->name('redessociais');
    
    Route::get('/downloads', function () {return view('downloads');})->name('downloads');

    Route::get('/pagecreate', function () {return view('pagecreate');})->name('pagecreate');

    Route::get('/pages', [PagesController::class, 'index'])->name('pages');

    Route::get('/pagecreate', [PagesController::class, 'create'])->name('pagecreate');

    Route::post('/pagecreate', [PagesController::class, 'store'])->name('pagecreate');

    Route::get('/{id}/pageedit', [PagesController::class, 'edit'])->name('pageedit');
    Route::put('/{id}/pageedit', [PagesController::class, 'update'])->name('pagegedit');
    Route::get('/{id}', [PagesController::class, 'destroy'])->name('pagedestroy');

   
});

Route::get('page/{slug}', [PagesController::class, 'get'])->name('page');
Route::post('ckeditor/upload', [CKEditorController::class, 'upload'])->name('ckeditor.image-upload');







require __DIR__.'/auth.php';

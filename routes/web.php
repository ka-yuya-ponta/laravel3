<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PErsonController;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\SessionController;


Route::get('/', [PErsonController::class, 'index']);
Route::get('/find', [PErsonController::class, 'find']);
Route::post('/find', [PErsonController::class, 'search']);
Route::get('/add', [PErsonController::class, 'add']);
Route::post('/add', [PErsonController::class, 'create']);
Route::get('/edit', [PErsonController::class, 'edit']);
Route::post('/edit', [PErsonController::class, 'update']);
Route::get('/delete', [PErsonController::class, 'delete']);
Route::post('/delete', [PErsonController::class, 'remove']);
Route::get('/board', [BoardController::class, 'index']);
Route::get('/board/add', [BoardController::class, 'add']);
Route::post('/board/add', [BoardController::class, 'create']);
Route::get('/person', [PErsonController::class, 'index'])->middleware('auth');
Route::get('/session', [SessionController::class, 'ses_get']);
Route::post('/session', [SessionController::class, 'ses_put']);
Route::get('person/auth', [PersonController::class,'getAuth']);
Route::post('person/auth', [PersonController::class,'postAuth']);

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
     return view('welcome');
 });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

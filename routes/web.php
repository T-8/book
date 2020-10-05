<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\TaskController;

use App\Models\Book;
use Illuminate\Http\Request;

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
    return view('index');
});

Route::get('/mybook', function () {
    $books = Book::all();
    return view('books', ['books' => $books]);
})->middleware('auth');

Route::post('/book',function(Request $request){

  $validator = Validator::make($request->all(),[
    'name' => 'required|max:255',
  ]);

  if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
}

  $book = new Book;
  $book->title = $request->name;
  $book->save();
  return redirect('/mybook');
});

Route::delete('/book/{book}',function(Book $book){
  $book->delete();
  return redirect('/mybook');
});

Route::get('/mypage', function () {
  return view('mypage');
})->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

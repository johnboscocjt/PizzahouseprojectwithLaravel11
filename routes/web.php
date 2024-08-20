<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;

Route::get('/', function () {
    return view('welcome');
});

/*
//handle the /pizzas request, new route
Route::get('/pizzas', function () {
    //return the view called /pizzas
    return view('pizzas');//check the name of the view
});
*/

/*
passing values to the view method directly
//handle the /pizzas request, new route
Route::get('/pizzas', function () {
    //get data from database and passing the 2nd argument to the view itself
    return view('pizzas', ['type' => 'Hawaiian', 'base' => 'cheesy crust']);
});
*/

// Route::get('/pizzas', function () {
//     // get data from a database
//     $pizza = [
//       'type' => 'hawaiian', 
//       'base' => 'garlic crust',
//       'price' => 10
//     ];
//     return view('pizzas', $pizza);
//   });

// Route::get('/pizzas', function () {
//     // get data from a database
//     $pizzas = [
//       ['type' => 'hawaiian', 'base' => 'cheesy crust'],
//       ['type' => 'volcano', 'base' => 'garlic crust'],
//       ['type' => 'veg supreme', 'base' => 'thin & crispy']
//     ];

//     $name = request('name');
//     $age = request('age');

//     return view('pizzas', ['pizzas' => $pizzas
//     ,'name'=> $name, 'age' => $age]);
    
//   });

// //new route to detect and use the route parameters
//   Route::get('/pizzas/{id}', function ($id) {
//     //now we have access to that variable
//     //use the $id variable to query the db(database) for the record
//     return view('details', ['id'=> $id]);
    
//   });



//using controllers in old laravel
// Route::get('/pizzas', 'PizzaController@index');
// // Route::get('/pizzas/{id}', 'PizzaController@show');
// Route::get('/pizzas', [PizzaController::class,'show']);

//another way to use controllers is Route::get('/pizzas', [PizzaController::class,'index']);

//new laravel syntax for controllers, -> middleware('auth') for authentication.
Route::get('/pizzas', [PizzaController::class, 'index'])->name('pizzas.index')-> middleware('auth');//getting the pizzas from the database

Route::get('/pizzas/create', [PizzaController::class, 'create'])->name('pizzas.create');//creating a pizza order

Route::post('/pizzas', [PizzaController::class, 'store'])->name('pizzas.store'); //sending data to the data base, go create it in the pizza controller

Route::get('/pizzas/{id}', [PizzaController::class, 'show'])->name('pizzas.show')-> middleware('auth');//id in the address bar
 
Route::delete('/pizzas/{id}', [PizzaController::class,'destroy'])->name('pizzas.destroy')-> middleware('auth');//delete the record in the db, get id


Auth::routes(); //generates routes for different things including authentication

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

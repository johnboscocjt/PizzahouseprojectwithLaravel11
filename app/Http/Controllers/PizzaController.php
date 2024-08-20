<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pizza;

class PizzaController extends Controller
{
  //protects all the routes below:
  // public function __construct(){
  //   $this->middleware("auth");
  // }

    //actions of the controller
    public function index() {
        // // get data from a array database created below
        // $pizzas = [
        //   ['type' => 'hawaiian', 'base' => 'cheesy crust'],
        //   ['type' => 'volcano', 'base' => 'garlic crust'],
        //   ['type' => 'veg supreme', 'base' => 'thin & crispy']
        // ];

        //interacting with the database using the pizza model,store the result in some variable,so $pizza is a collection of pizza records
        $pizzas = Pizza::all();
        // $pizzas = Pizza::orderBy('name')->get(); //get method to get the results
        // $pizzas = Pizza::orderBy('name', 'desc')->get();//get by descending order
        // $pizzas = Pizza::orderBy('name', 'asc')->get();//get by descending order
        // $pizzas = Pizza::where('type','Hawaiian')->get();//select based on certain conditions
        // $pizzas = Pizza::latest()->get();
    
        return view('pizzas.index', [
          'pizzas' => $pizzas,
        ]);
      }
    
      public function show($id) {
        //finding one record based on id from pizzas table, storing it to the pizza variable, passing the variable into the show view
        $pizza = Pizza::findOrfail($id);
        return view('pizzas.show', ['pizza' => $pizza]);

        // use the $id variable to query the db for a record
        // return view('pizzas.show', ['id' => $id]);
      }
    
      public function create() {
        return view('pizzas.create');
      }

      public function store() {
        //logging to the terminal
        // error_log(request('name'));//gives whatever the user has input in the name field with name attribute of name
        // error_log(request('type'));
        // error_log(request('base'));

        //creating an instance of pizza mode
        $pizza = new Pizza();
        //using the instance of pizza created 
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');//tranform this array into json, use the pizza model and cast property

        //outputting $pizza to the terminal
        // error_log($pizza);

        //taking the object and saving it to the database
        $pizza->save();

        //redirecting to the home screen or the welcome view and thanking for ordering pizza
        return redirect('/')->with('mssg', 'Thanks for your order');//this is session data, you can access  it inside the view,welcome view
      }

      public function destroy($id) {
        $pizza = Pizza::findOrfail($id);
        //deleting the pizza with that id from the database
        $pizza->delete();
        //redirect to the pizzas listing
        return redirect('/pizzas');
      }



}

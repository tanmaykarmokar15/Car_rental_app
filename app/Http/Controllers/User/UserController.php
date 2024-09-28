<?php

namespace App\Http\Controllers\User;  

use Illuminate\Http\Request;  
use App\Http\Controllers\Controller;  
use App\Models\Car;  
use App\Models\Rental;  
use Auth; 

class UserController extends Controller  
{  

    public function index()
    {
        $cars = Car::all();  
        return view('user.index', compact('cars'));
    }
    public function car(Car $car)  
    {  
        return view('user.car', compact('car'));  
    }
    public function rental(Car $car)  
    {  
        return view('user.rental', compact('car'));  
    }
    public function storeRental(Request $request, Car $car)
    {
        $rental =new Rental();
        $rental -> car_id = $car->id;
        $rental -> user_id = Auth::id();
        $rental -> start_date = $request->start_date;
        $rental -> end_date = $request->end_date;
        $rental->total_cost = $car->rental_price * ($request->end_date - $request->start_date);
        $rental->save();
        return redirect()-> route('user.rentals');
    }
    public function rentals()
    {
        $rentals = Rental::where('user_id', Auth::id())->get();
        return view('user.rentals', compact('rentals'));
    }
}
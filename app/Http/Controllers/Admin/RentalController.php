<?php

namespace App\Http\Controllers\Admin;  

use Illuminate\Http\Request;  
use App\Http\Controllers\Controller;  
use App\Models\Car;  
use App\Models\Rental;  
use App\Models\User; 

class RentalController extends Controller  
{  
    public function index()  
    {  
        $rentals = Rental::with('car', 'user')->get();  
        return view('admin.rentals.index', compact('rentals'));  
    }  

    public function create()  
    {  
        $cars = Car::all();  
        $users = User::all();  
        return view('admin.rentals.create', compact('cars', 'users'));  
    }  

    public function store(Request $request)  
    {  
        Rental::create($request->all());  
        return redirect()->route('admin.rentals.index');  
    }  

    public function show(Rental $rental)  
    {  
        return view('admin.rentals.show', compact('rental'));  
    }  

    public function edit(Rental $rental)  
    {  
        return view('admin.rentals.edit', compact('rental'));  
    }  

    public function update(Request $request, Rental $rental)  
    {  
        $rental->update($request->all());  
        return redirect()->route('admin.rentals.index');  
    }  

    public function destroy(Rental $rental)  
    {  
        $rental->delete();  
        return redirect()->route('admin.rentals.index');
    }
}
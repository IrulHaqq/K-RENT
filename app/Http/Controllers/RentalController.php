<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rental;
use App\Models\Kendaraan;

class RentalController extends Controller
{
    public function index()
    {
        $rentals = Rental::all();
        return view('rental.index', compact('rentals'));
    }

    public function create()
    {
        return view('rental.create');
    }

    public function store(Request $request)
    {
        // Validate the form data (adjust validation rules as needed)
        $request->validate([
            'duration' => 'required|integer',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'quantity' => 'required|integer',
            'additional_info' => 'nullable|string',
            'total_cost' => 'required|numeric',
        ]);

        // Create a new rental record in the database
        $rental = new Rental($request->all());
        $rental->user_id = auth()->id();
        // Save the rental record
        $rental->save();

        // Redirect to a success page or return a response
        return redirect()->route('rentals.create')->with('success', 'Rental created successfully');
    }


}

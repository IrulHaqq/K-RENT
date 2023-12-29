<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rental;
use App\Models\Kendaraan;

class RentalController extends Controller
{
    public function index($rental)
    {
        $user = auth()->user();  
        $rentals = Rental::with('kendaraan')->where('user_id', $user->id)->where('id',$rental)->get();
        
        return view('rental.index', compact('rentals'));
    }

    public function create($kendaraanId)
    {
        $user = auth()->user();
        $existingRental = Rental::where('user_id', $user->id)->where('kendaraan_id', $kendaraanId)->whereNull('status')->first();

        if ($existingRental) {
            
            return redirect()->route('rental.index', ['id' => $existingRental->id]);
        } else {
            $rental = new Rental([
                'user_id' => $user->id,
                'kendaraan_id' => $kendaraanId,
            ]);
    
            $rental->save();

            return redirect()->route('rental.index', ['id' => $rental->id])->with('info', 'Rental Created successfully');
        }
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'quantity' => 'required|integer',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'additional_info' => 'nullable|string',
        ]);

        $rental = Rental::findOrFail($id);
        $rental->user_id = auth()->id();

        $start_date = new \DateTime($request->start_date);
        $end_date = new \DateTime($request->end_date);
        $duration = $start_date->diff($end_date)->days;
        $total_cost = $rental->kendaraan->Harga_Kendaraan * $request->quantity * $duration;

        if ($duration <= 0 || intval($request->quantity) > $rental->kendaraan->Jumlah_Kendaraan) {
            return redirect()->route('rental.index', ['id' => $rental->id])->with('error', 'Invalid duration or quantity. Please check your inputs.');
        } else {
            $rental->update([
                'quantity' => $request->quantity,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'duration' => $duration,
                'additional_info' => $request->additional_info,
                'total_cost' => $total_cost,
                'status' => 'waiting for payment',
            ]);
            
            return redirect()->route('rental.index', ['id' => $rental->id])->with('success', 'Rental updated successfully');
        }
    }
}

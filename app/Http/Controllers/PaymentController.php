<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaymentDetail;
use App\Models\Rental;
use App\Models\Kendaraan;

class PaymentController extends Controller
{
    public function index($rentalId)
    {
        $user = auth()->user();
           
        $rentals = Rental::with('kendaraan')->where('user_id', $user->id)->where('id',$rentalId)->get();

        return view('payment.index', compact('rentals'));
    }

    public function success()
    {
        return view('payment.success')->with('success', 'Payment successful!');
    }

    public function process(Request $request, $rentalId){
        $user = auth()->user();

        $request->validate([
            'card_number' => 'required|string',
            'expiration_date' => 'required|string',
            'cvv' => 'required|string',
            'billing_address' => 'required|string',
        ]);

        $rental = Rental::findOrFail($rentalId);
        $kendaraan = Kendaraan::findOrFail($rental->kendaraan->id);
        $update_jumlah_kendaraan = $kendaraan->Jumlah_Kendaraan - $rental->quantity;

        $kendaraan->update([
            'Jumlah_Kendaraan'=> $update_jumlah_kendaraan,
        ]);

        $rental->update([
            'status' => 'paid',
        ]);

        PaymentDetail::create([
            'user_id' => $user->id,
            'rental_id' => $rentalId,
            'card_number' => $request->card_number,
            'expiration_date' => $request->expiration_date,
            'cvv' => $request->cvv,
            'billing_address' => $request->billing_address,
        ]);

        return view('payment.success');
    }
}

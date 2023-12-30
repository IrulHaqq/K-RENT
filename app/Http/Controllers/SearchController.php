<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan;

class SearchController extends Controller
{
    public function index()
    {
        $kendaraans = Kendaraan::all();
        return view('kendaraan.index', compact('kendaraans'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $results = Kendaraan::where('Nama_Kendaraan', 'like', "%$query%")
            ->orWhere('Deskripsi_Kendaraan', 'like', "%$query%")
            ->orWhere('Tipe_Kendaraan', 'like', "%$query%")
            ->get();

        return view('search_results', compact('results'));
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan;
use Illuminate\Support\Facades\Storage;


class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $kendaraans = Kendaraan::all();
       
        return view('kendaraan.index', compact('kendaraans'));
    }

    public function mykendaraan()
    {
        //
        $kendaraans = Kendaraan::all();
        
        return view('kendaraan.mykendaraan', compact('kendaraans'));
    }

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('kendaraan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'Tipe_Kendaraan' => 'required',
            'Nama_Kendaraan' => 'required',
            'Harga_Kendaraan' => 'required|numeric',
            'Jumlah_Kendaraan' => 'required|numeric',
            'Deskripsi_Kendaraan' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $kendaraan = new Kendaraan($request->all());
        $kendaraan->user_id = auth()->id();
        $kendaraan->save();
        
        if ($request->hasFile('images')) {
            $images = $request->file('images');

            foreach ($images as $image) {
                // Check if the file is valid
                if ($image->isValid()) {
                    $imagePath = $image->store('images', 'public'); // Change 'public'
                    $kendaraan->images()->create(['image_path' => $imagePath]);
                } else {
                    // Handle the case where the file is not valid
                    return redirect()->back()->with('error', 'Invalid file uploaded.');
                }
            }
        }   


        return redirect()->route('kendaraan.mykendaraan')
            ->with('success', 'Kendaraan created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kendaraan = Kendaraan::find($id);

        if (!$kendaraan) {
            return redirect()->route('kendaraan.index')->with('error', 'Kendaraan not found.');
        }

        return view('kendaraan.detail', compact('kendaraan'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $kendaraans = Kendaraan::find($id);
        if (!$kendaraans) {
            return redirect()->route('kendaraan.mykendaraan')->with('error', 'Kendaraan not found.');
        }
    
        if ($kendaraans->user_id != auth()->id()) {
            return redirect()->route('kendaraan.mykendaraan')->with('error', 'You do not have permission to edit this kendaraan.');
        }
    
        return view('kendaraan.edit', compact('kendaraans'));
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'Tipe_Kendaraan' => 'required',
            'Nama_Kendaraan' => 'required',
            'Harga_Kendaraan' => 'required|numeric',
            'Jumlah_Kendaraan' => 'required|numeric',
            'Deskripsi_Kendaraan' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $kendaraan = Kendaraan::find($id);

        if (!$kendaraan) {
            return redirect()->route('kendaraan.mykendaraan')->with('error', 'Kendaraan not found.');
        }
    
        if ($kendaraan->user_id != auth()->id()) {
            return redirect()->route('kendaraan.mykendaraan')->with('error', 'You do not have permission to edit this kendaraan.');
        }
    
        
        if ($request->hasFile('images')) {
            $images = $request->file('images');
            
            foreach ($kendaraan->images as $image) {
                // Assuming 'public' is your disk name, adjust if necessary
                Storage::disk('public')->delete($image->image_path);
            }
            $kendaraan->images()->delete();
            
            $kendaraan->update($request->all());
            
            foreach ($images as $image) {
                if ($image->isValid()) {
                    $imagePath = $image->store('images', 'public'); // Change 'public'
                    $kendaraan->images()->create(['image_path' => $imagePath]);
                } else {
                    // Handle the case where the file is not valid
                    return redirect()->back()->with('error', 'Invalid file uploaded.');
                }
            }
        } 
    
        return redirect()->route('kendaraan.mykendaraan')->with('success', 'Kendaraan updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $kendaraan = Kendaraan::find($id);

        if (!$kendaraan) {
            return redirect()->route('kendaraan.mykendaraan')->with('error', 'Kendaraan not found.');
        }

        if ($kendaraan->user_id != auth()->id()) {
            return redirect()->route('kendaraan.mykendaraan')->with('error', 'You do not have permission to delete this kendaraan.');
        }

        foreach ($kendaraan->images as $image) {
            // Assuming 'public' is your disk name, adjust if necessary
            Storage::disk('public')->delete($image->image_path);
        }

        $kendaraan->delete();

        return redirect()->route('kendaraan.mykendaraan')->with('success', 'Kendaraan deleted successfully.');

    }
}

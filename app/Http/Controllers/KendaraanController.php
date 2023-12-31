<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan;
use Illuminate\Support\Facades\Storage;


class KendaraanController extends Controller
{
    public function index()
    {
        $user = auth()->user();    
        $kendaraans = Kendaraan::where('user_id',"!=", $user->id)->get();
        
        return view('kendaraan.index', compact('kendaraans'));
    }
    
    public function mykendaraan()
    {
        $user = auth()->user();
        $kendaraans = Kendaraan::where('user_id', $user->id)->get();
        
        return view('kendaraan.mykendaraan', compact('kendaraans'));
    }

    public function create()
    {
        return view('kendaraan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Tipe_Kendaraan' => 'required',
            'Nama_Kendaraan' => 'required',
            'Harga_Kendaraan' => 'required|numeric',
            'Jumlah_Kendaraan' => 'required|numeric',
            'Deskripsi_Kendaraan' => 'required',
        ]);

        $kendaraan = new Kendaraan($request->all());
        $kendaraan->user_id = auth()->id();
        $kendaraan->save();
        
        if ($request->hasFile('images')) {
            $images = $request->file('images');

            foreach ($images as $image) {
                if ($image->isValid()) {
                    $imagePath = $image->store('images', 'public'); 
                    $kendaraan->images()->create(['image_path' => $imagePath]);
                } else {
                    return redirect()->back()->with('error', 'Invalid file uploaded.');
                }
            }
        }   

        return redirect()->route('kendaraan.mykendaraan')
            ->with('success', 'Kendaraan created successfully.');
    }

    public function show(string $id)
    {
        $kendaraan = Kendaraan::find($id);

        if (!$kendaraan) {
            return redirect()->route('kendaraan.index')->with('error', 'Kendaraan not found.');
        }

        return view('kendaraan.detail', compact('kendaraan'));
    }

    public function edit(string $id)
    {
        $kendaraans = Kendaraan::find($id);

        if (!$kendaraans) {
            return redirect()->route('kendaraan.mykendaraan')->with('error', 'Kendaraan not found.');
        }
    
        if ($kendaraans->user_id != auth()->id()) {
            return redirect()->route('kendaraan.mykendaraan')->with('error', 'You do not have permission to edit this kendaraan.');
        }
    
        return view('kendaraan.edit', compact('kendaraans'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'Tipe_Kendaraan' => 'required',
            'Nama_Kendaraan' => 'required',
            'Harga_Kendaraan' => 'required|numeric',
            'Jumlah_Kendaraan' => 'required|numeric',
            'Deskripsi_Kendaraan' => 'required',
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
                Storage::disk('public')->delete($image->image_path);
            }

            $kendaraan->images()->delete();
            $kendaraan->update($request->all());
            
            foreach ($images as $image) {
                if ($image->isValid()) {
                    $imagePath = $image->store('images', 'public');
                    $kendaraan->images()->create(['image_path' => $imagePath]);
                } else {
                    return redirect()->back()->with('error', 'Invalid file uploaded.');
                }
            }
        } else {
            $kendaraan->update($request->all());
        }
    
        return redirect()->route('kendaraan.mykendaraan')->with('success', 'Kendaraan updated successfully.');
    }

    public function destroy(string $id)
    {
        $kendaraan = Kendaraan::find($id);

        if (!$kendaraan) {
            return redirect()->route('kendaraan.mykendaraan')->with('error', 'Kendaraan not found.');
        }

        if ($kendaraan->user_id != auth()->id()) {
            return redirect()->route('kendaraan.mykendaraan')->with('error', 'You do not have permission to delete this kendaraan.');
        }

        foreach ($kendaraan->images as $image) {
            Storage::disk('public')->delete($image->image_path);
        }

        $kendaraan->delete();

        return redirect()->route('kendaraan.mykendaraan')->with('success', 'Kendaraan deleted successfully.');
    }
}

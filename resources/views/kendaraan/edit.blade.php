<!-- resources/views/kendaraan/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-6">
        <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden shadow-md">
            <div class="bg-blue-500 text-white py-2 px-4 font-semibold text-xl text-center">Edit Kendaraan</div>
            <form method="post" action="{{ route('kendaraan.update', $kendaraans->id) }}" class="px-6 py-4" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="Tipe_Kendaraan" class="text-gray-600 font-semibold mb-2">Tipe Kendaraan:</label>
                    <input type="text" class="input input-bordered w-full focus:ring focus:ring-blue-300" id="Tipe_Kendaraan" name="Tipe_Kendaraan" value="{{ old('Tipe_Kendaraan', $kendaraans->Tipe_Kendaraan) }}" required>
                </div>

                <div class="mb-4">
                    <label for="Nama_Kendaraan" class="text-gray-600 font-semibold mb-2">Nama Kendaraan:</label>
                    <input type="text" class="input input-bordered w-full focus:ring focus:ring-blue-300" id="Nama_Kendaraan" name="Nama_Kendaraan" value="{{ old('Nama_Kendaraan', $kendaraans->Nama_Kendaraan) }}" required>
                </div>

                <div class="mb-4">
                    <label for="Harga_Kendaraan" class="text-gray-600 font-semibold mb-2">Harga Kendaraan (Rp):</label>
                    <input type="number" class="input input-bordered w-full focus:ring focus:ring-blue-300" id="Harga_Kendaraan" name="Harga_Kendaraan" value="{{ old('Harga_Kendaraan', $kendaraans->Harga_Kendaraan) }}" required>
                </div>

                <div class="mb-4">
                    <label for="Jumlah_Kendaraan" class="text-gray-600 font-semibold mb-2">Jumlah Kendaraan:</label>
                    <input type="number" class="input input-bordered w-full focus:ring focus:ring-blue-300" id="Jumlah_Kendaraan" name="Jumlah_Kendaraan" value="{{ old('Jumlah_Kendaraan', $kendaraans->Jumlah_Kendaraan) }}" required>
                </div>

                <div class="mb-4">
                    <label for="Deskripsi_Kendaraan" class="text-gray-600 font-semibold mb-2">Deskripsi Kendaraan:</label>
                    <textarea class="textarea textarea-bordered w-full focus:ring focus:ring-blue-300" id="Deskripsi_Kendaraan" name="Deskripsi_Kendaraan" rows="4" required>{{ old('Deskripsi_Kendaraan', $kendaraans->Deskripsi_Kendaraan) }}</textarea>
                </div>

                <div class="mb-4">
                    <label for="images" class="block text-gray-600 font-semibold mb-2">Images:</label>
                    <input type="file" class="form-control" name="images[]" accept="image/*" multiple>
                </div>

                <div class="mt-6 flex items-center justify-between">
                    <a href="{{ route('kendaraan.mykendaraan') }}" class="btn btn-neutral hover:btn-secondary transition duration-300 ease-in-out transform hover:-translate-y-1">Back</a>
                    <button type="submit" class="btn btn-neutral transition-transform transform hover:scale-105 hover:bg-blue-700">Update Kendaraan</button>
                </div>
            </form>
        </div>
    </div>
@endsection

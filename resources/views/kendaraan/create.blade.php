<!-- resources/views/kendaraans/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-6">
        <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden shadow-md">
            <div class="bg-blue-500 text-white py-2 px-4 font-semibold text-xl text-center">Add Kendaraan</div>
            <form method="POST" action="{{ route('kendaraan.store') }}" class="px-6 py-4" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="Tipe_Kendaraan" class="block text-gray-600 font-semibold mb-2">Tipe Kendaraan:</label>
                    <input type="text" class="input input-bordered w-full focus:ring focus:ring-blue-500" name="Tipe_Kendaraan" required>
                </div>
                <div class="mb-4">
                    <label for="Nama_Kendaraan" class="block text-gray-600 font-semibold mb-2">Nama Kendaraan:</label>
                    <input type="text" class="input input-bordered w-full focus:ring focus:ring-blue-500" name="Nama_Kendaraan" required>
                </div>
                <div class="mb-4">
                    <label for="Harga_Kendaraan" class="block text-gray-600 font-semibold mb-2">Harga Kendaraan (Rp):</label>
                    <input type="number" class="input input-bordered w-full focus:ring focus:ring-blue-500" name="Harga_Kendaraan" required>
                </div>
                <div class="mb-4">
                    <label for="Jumlah_Kendaraan" class="block text-gray-600 font-semibold mb-2">Jumlah Kendaraan:</label>
                    <input type="number" class="input input-bordered w-full focus:ring focus:ring-blue-500" name="Jumlah_Kendaraan" required>
                </div>
                <div class="mb-4">
                    <label for="Deskripsi_Kendaraan" class="block text-gray-600 font-semibold mb-2">Deskripsi Kendaraan:</label>
                    <textarea class="textarea textarea-bordered w-full focus:ring focus:ring-blue-500" name="Deskripsi_Kendaraan" rows="4" required></textarea>
                </div>
                <div class="mb-4">
                    <label for="images" class="block text-gray-600 font-semibold mb-2">Images:</label>
                    <input type="file" class="form-control" name="images[]" accept="image/*" multiple>
                </div>
                <div class="mt-6">
                    <button type="submit" class="btn btn-neutral w-full hover:bg-blue-700 hover:scale-105 transform transition-transform duration-300">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection

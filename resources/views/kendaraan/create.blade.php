@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6 flex justify-start space-x-4">
<div class="w-full pr-4">
    <div class="full-w-md bg-gray rounded-lg overflow-hidden shadow-md">
        <form method="POST" action="{{ route('kendaraan.store') }}" class="px-6 py-4" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-2 gap-4"> 
            <div class="col-span-1">
                <div class="mb-4">
                    <label for="Tipe_Kendaraan" class="block text-gray-600 font-semibold mb-2">Tipe Kendaraan:</label>
                    <input type="text" class="text-black bg-gray-300 input input-bordered w-full focus:ring focus:ring-blue-500" name="Tipe_Kendaraan" required>
                </div>
                <div class="mb-4">
                    <label for="Nama_Kendaraan" class="block text-gray-600 font-semibold mb-2">Nama Kendaraan:</label>
                    <input type="text" class="text-black bg-gray-300 input input-bordered w-full focus:ring focus:ring-blue-500" name="Nama_Kendaraan" required>
                </div>
                <div class="mb-4">
                    <label for="Harga_Kendaraan" class="block text-gray-600 font-semibold mb-2">Harga Kendaraan (Rp):</label>
                    <input type="text" class="text-black bg-gray-300 input input-bordered w-full focus:ring focus:ring-blue-500" name="Harga_Kendaraan" required>
                </div>
                <div class="mb-4">
                    <label for="Jumlah_Kendaraan" class="block text-gray-600 font-semibold mr-2">Jumlah Kendaraan:</label>
                    <button type="button" onclick="decrement()" class="btn btn-error px-4 py-3 focus:outline-none">-</button>
                    <input type="number" class=" text-black bg-gray-300 input input-bordered w-20 text-center focus:ring focus:ring-blue-500" name="Jumlah_Kendaraan" id="Jumlah_Kendaraan" value="0" min="0" onkeydown="return false" onkeyup="return false" required style="-moz-appearance: textfield;">
                    <button type="button" onclick="increment()" class=" btn btn-success px-4 py-3 focus:outline-none">+</button>
                </div>
                <div class="mb-4">
                    <label for="Deskripsi_Kendaraan" class="block text-gray-600 font-semibold mb-2">Deskripsi Kendaraan:</label>
                    <textarea type="text" class="text-black bg-gray-300 input input-bordered w-full focus:ring focus:ring-blue-500" name="Deskripsi_Kendaraan" rows="4" style="height: 200px;" required></textarea>
                </div>
            </div>
            <div class="col-span-1 flex flex-col">
                <div class="border p-4 rounded-md mb-4">
                    <div class="mb-4">
                        <label for="images" class="block text-gray-600 font-semibold mb-2">Upload an Image:</label>
                        <input type="file" class="form-control mb-2" name="images[]" accept="image/*" multiple onchange="previewImages(event)" />
                    </div>
                <div id="imagePreview" class="flex flex-wrap"></div>
                <div class="mt-6">
                    <button type="submit" class="btn btn-neutral w-full hover:bg-blue-700 hover:scale-105 transform transition-transform duration-300">Submit</button>
            </div>
        </div>
    </div>
</form>

<script>
    function previewImages(event) {
        var preview = document.querySelector('#imagePreview');
        var files = event.target.files;

        preview.innerHTML = ''; // Membersihkan pratinjau sebelumnya

        if (files) {
            [].forEach.call(files, readAndPreview);
        }

        function readAndPreview(file) {
            var reader = new FileReader();
            reader.onloadend = function () {
                var img = document.createElement('img');
                img.src = reader.result;
                img.style.width = 'auto'; // Ukuran pratinjau gambar
                img.style.height = 'auto';
                img.style.marginRight = '10px'; // Margin antara pratinjau gambar
                preview.appendChild(img);
            }
            if (file) {
                reader.readAsDataURL(file);
            }
        }
    }

    function increment() {
        const input = document.getElementById('Jumlah_Kendaraan');
        const value = parseInt(input.value, 10);
        input.value = value + 1;
    }

    function decrement() {
        const input = document.getElementById('Jumlah_Kendaraan');
        const value = parseInt(input.value, 10);
        if (value > 0) {
            input.value = value - 1;
        }
    }
</script>

<style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type=number] {
    -moz-appearance: textfield;
    }
</style>
@endsection

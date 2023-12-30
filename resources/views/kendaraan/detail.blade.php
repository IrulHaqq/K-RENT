@extends('layouts.app')

@section('content')
<div class="container mx-auto p-5">
    <div class="flex items-center justify-between mb-4">
        <a href="{{ route('kendaraan.index') }}" class="btn btn-circle btn-neutral btn-outline hover:btn-primary transition duration-300 ease-in-out transform hover:-translate-y-1">❮</a>
        <h1 class="text-3xl font-semibold text-gray-700 flex-grow text-center mr-12">Detail Kendaraan</h1>   
    </div>
    
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
        <!-- Carousel Section -->
        <div class="lg:order-first">
            <div class="carousel w-full relative" style="max-width: 800px;">
                @if ($kendaraan->images->count() > 0)
                    @foreach ($kendaraan->images as $index => $image)
                    <div id ="carousel-{{ $kendaraan->id }}-{{ $index }}" class="carousel-item w-full relative">
                        <img src="{{ asset('storage/' . $image->image_path) }}" class="rounded-box w-full h-96 lg:h-120 object-cover" alt="Kendaraan Image">
                                    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                                        <a href="#carousel-{{ $kendaraan->id }}-{{ $index - 1 }}" class="btn btn-circle btn-ghost hover:btn-secondary transition duration-300 ease-in-out transform hover:-translate-y-1">❮</a> 
                                        <a href="#carousel-{{ $kendaraan->id }}-{{ $index + 1}}" class="btn btn-circle btn-ghost hover:btn-secondary transition duration-300 ease-in-out transform hover:-translate-y-1">❯</a>
                                    </div>
                                </div>
                    @endforeach
                @else
                    <div class="carousel-item w-full">
                        <img src="{{ asset('storage/images/defaultimage.jpg') }}" class="rounded-box w-full h-64 object-cover" alt="Default kendaraan Image">
                    </div>
                @endif
            </div>
        </div>
        
        <!-- Kendaraan Details Section -->
        <div class="card bg-gray shadow-xl">
            <div class="card-body">
                <h2 class="card-title text-2xl text-black">{{ $kendaraan->Nama_Kendaraan }}</h2>
                <p class="text-black" style="margin-top: 50px;">{{ $kendaraan->Deskripsi_Kendaraan }}</p>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mt-4">
                    <div>
                        <span class="font-semibold text-black">Tipe Kendaraan:</span>
                        <span class="text-black">{{ $kendaraan->Tipe_Kendaraan }}</span>
                    </div>
                    <div>
                        <span class="font-semibold text-black">Harga Sewa per Hari:</span>
                        <br>
                        <span class="text-red-500">Rp. {{ number_format($kendaraan->Harga_Kendaraan, 0, ',', '.') }}</span>
                    </div>
                    <div>
                        <span class="font-semibold text-black">Jumlah Kendaraan Tersedia:</span>
                        <span class="text-success">{{ $kendaraan->Jumlah_Kendaraan }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- per-button an -->
    <div class="mt-7 flex justify-between items-center">
    <div class="flex items-center">
        <input type="checkbox" id="termsCheck" name="termsCheck" class="form-checkbox h-5 w-5 text-gray-600">
        <label for="termsCheck" class="ml-2 text-gray-700">I agree to the Terms and Conditions</label>
    </div>

    <div class="flex space-x-12">
        <a href="{{ route('rental.create', $kendaraan->id) }}" class="btn btn-success btn-wide hover:btn-success transition duration-300 ease-in-out transform hover:-translate-y-1">Rent Now</a>
        <a href="#" class="btn btn-info btn-wide hover:btn-info transition duration-300 ease-in-out transform hover:-translate-y-1">Contact Us</a>
    </div>
</div>
</div>
@endsection

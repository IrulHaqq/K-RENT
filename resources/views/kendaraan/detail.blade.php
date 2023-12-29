@extends('layouts.app')

@section('content')
<div class="container mx-auto p-5">
    <div class="flex items-center justify-between mb-4">
        <a href="{{ route('kendaraan.index') }}" class="btn btn-circle btn-neutral btn-outline hover:btn-primary transition duration-300 ease-in-out transform hover:-translate-y-1">❮</a>
        <h1 class="text-3xl font-semibold text-gray-700 flex-grow text-center mr-12">Kendaraan Details</h1>   
    </div>
    <!-- Carousel Section -->
    <div class="card card-bordered bg-base-100 shadow-xl mb-4">
        <div class="carousel w-full relative">
            @if ($kendaraan->images->count() > 0)
                @foreach ($kendaraan->images as $index => $image)
                    <div id="carousel-{{ $kendaraan->id }}-{{ $index }}" class="carousel-item w-full relative">
                        <img src="{{ asset('storage/' . $image->image_path) }}" class="rounded-box w-full h-64 object-cover transition duration-300 ease-in-out transform hover:scale-105" alt="kendaraan Image">
                        <div class="absolute flex justify-between items-center transform -translate-y-1/2 left-5 right-5 top-1/2">
                            <a href="#carousel-{{ $kendaraan->id }}-{{ $index - 1 }}" class="btn btn-circle btn-ghost hover:btn-secondary transition duration-300 ease-in-out transform hover:-translate-y-1">❮</a>
                            <a href="#carousel-{{ $kendaraan->id }}-{{ $index + 1 }}" class="btn btn-circle btn-ghost hover:btn-secondary transition duration-300 ease-in-out transform hover:-translate-y-1">❯</a>
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
    <div class="card card-bordered bg-base-100 shadow-xl">
        <div class="card-body">
            <h2 class="card-title text-2xl">{{ $kendaraan->Nama_Kendaraan }}</h2>
            <p class="text-gray-600">{{ $kendaraan->Deskripsi_Kendaraan }}</p>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-center">
                <div>
                    <span class="font-semibold">Type:</span> {{ $kendaraan->Tipe_Kendaraan }}
                </div>
                <div>
                    <span class="font-semibold">Price:</span> Rp. {{ number_format($kendaraan->Harga_Kendaraan, 0, ',', '.') }}
                </div>
                <div>
                    <span class="font-semibold">Quantity Available:</span> {{ $kendaraan->Jumlah_Kendaraan }}
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4 flex justify-center">
        <a href="{{ route('rental.create', ['id'=>$kendaraan->id]) }}" class="btn btn-neutral hover:btn-secondary transition duration-300 ease-in-out transform hover:-translate-y-1">Rent Now</a>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container mx-auto p-5">
        <!-- Search box -->
        <div class="flex items-center justify-center mb-4">
            <div class="flex w-full justify-center">
                <!-- <form action="{{ route('search') }}" method="GET" class="flex w-full justify-center"> -->
                <form action="/search" method="GET" class="flex w-full justify-center">
                @csrf
                <input type="text" name="query" placeholder="Mau rental apa hari ini?" class="p-3 text-black border border-gray-300 rounded-l-md w-full sm:w-2/3 md:w-1/2 lg:w-2/3 xl:w-3/4 shadow-md focus:outline-none">
                <!-- Fungsi untuk search! -->
                <button class="bg-black text-white font-bold py-3 px-4 rounded-r-md hover:bg-gray-900 transition duration-300 ease-in-out">
                    Search
                </button>
            </form>
        </div>
</div>
    <div class="container mx-auto p-5">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($kendaraans as $kendaraan)
                @if(auth()->check() && auth()->user()->id != $kendaraan->user_id)
                    <div class="card card-compact bg-gray-200 shadow-xl">
                        <div id="carousel-{{ $kendaraan->id }}" class="carousel w-full">
                            @if ($kendaraan->images->count() > 0)
                                @foreach ($kendaraan->images as $index => $image)
                                <div id ="carousel-{{ $kendaraan->id }}-{{ $index }}" class="carousel-item w-full relative">
                                        <img src="{{ asset('storage/' . $image->image_path) }}" class="rounded-box w-full h-64 object-cover" alt="Kendaraan Image">
                                        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                                            <a href="#carousel-{{ $kendaraan->id }}-{{ $index - 1 }}" class="btn btn-circle btn-ghost hover:btn-secondary transition duration-300 ease-in-out transform hover:-translate-y-1">❮</a> 
                                            <a href="#carousel-{{ $kendaraan->id }}-{{ $index + 1}}" class="btn btn-circle btn-ghost hover:btn-secondary transition duration-300 ease-in-out transform hover:-translate-y-1">❯</a>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="carousel-item w-full">
                                    <img src="{{ asset('storage/images/defaultimage.jpg') }}" class="rounded-box w-full h-64 object-cover" alt="Default Image">
                                </div>
                            @endif
                        </div>
                        <div class="card-body">
                            <h2 class="card-title text-2xl text-black">{{ $kendaraan->Nama_Kendaraan }}</h2>
                            <p class="text-black">{{ $kendaraan->Deskripsi_Kendaraan }}</p>
                            
                            <div class="mb-2 text-black">
                                <strong>Jumlah Kendaraan Tersedia:</strong> {{ $kendaraan->Jumlah_Kendaraan }}
                            </div>
                            
                            <div class="card-actions justify-end mb-4">
                                <div class="badge badge-outline text-black">{{ $kendaraan->Tipe_Kendaraan }}</div>
                                <div class="badge badge-outline text-red-500">Rp. {{ $kendaraan->Harga_Kendaraan }}</div>
                            </div>
                            <div class="justify-center card-actions">
                                <a href="{{ route('kendaraan.detail', $kendaraan->id) }}" class=" text-black btn btn-primary hover:btn-info transition duration-300 ease-in-out transform hover:-translate-y-1">View</a>
                                <a href="{{ route('rental.create', $kendaraan->id) }}" class="btn btn-success hover:btn-info transition duration-300 ease-in-out transform hover:-translate-y-1">Rent Now</a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection

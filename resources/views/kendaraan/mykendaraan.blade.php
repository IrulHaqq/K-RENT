@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-5">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($kendaraans as $kendaraan)
                <div class="card card-compact bg-gray-100 shadow-xl">
                    <div id="carousel-{{ $kendaraan->id }}" class="carousel w-full relative">
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
                        <h2 class="card-title text-black">{{ $kendaraan->Nama_Kendaraan }}</h2>
                        <p class="text-black">{{ $kendaraan->Deskripsi_Kendaraan }}</p>
                        
                        <div class="mb-2 text-black">
                            <strong>Jumlah Kendaraan:</strong> {{ $kendaraan->Jumlah_Kendaraan }}
                        </div>
                        
                        <div class="card-actions justify-end">
                            <div class="badge badge-outline text-black">{{ $kendaraan->Tipe_Kendaraan }}</div>
                            <div class="badge badge-outline text-red-500">Rp. {{ $kendaraan->Harga_Kendaraan }}</div>
                        </div>
                        <div class="justify-center card-actions">
                            <a href="{{ route('kendaraan.edit', $kendaraan->id) }}" class="btn btn-warning hover:btn-warning transition duration-300 ease-in-out transform hover:-translate-y-1">Edit</a>
                            <form action="{{ route('kendaraan.destroy', $kendaraan->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure you want to delete this Kendaraan?')" class="btn btn-error hover:btn-error transition duration-300 ease-in-out transform hover:-translate-y-1">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
    
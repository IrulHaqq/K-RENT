@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-5">
        <div class="flex items-center justify-between mb-4">
            <!-- Tombol Kembali -->
            <a href="{{ route('kendaraan.index') }}" class="btn btn-circle btn-neutral btn-outline hover:btn-primary transition duration-300 ease-in-out transform hover:-translate-y-1">❮</a>
            <h1 class="text-3xl font-semibold text-gray-700 flex-grow text-center mr-12">Hasil Pencarian</h1>   
        </div>

        @if($results->isEmpty())
            <p>Tidak ditemukan hasil pencarian.</p>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach($results as $result)
                
                    <div class="card card-compact bg-gray-200 shadow-xl">
                        <div class="w-full h-64 overflow-hidden">
                            @if (!is_null($result->images) && $result->images->count() > 0 && !is_null($result->images[0]->image_path))
                                <img src="{{ asset('storage/' . $result->images[0]->image_path) }}" class="w-full h-full object-cover" alt="Kendaraan Image">
                            @else
                                <img src="{{ asset('storage/images/defaultimage.jpg') }}" class="w-full h-full object-cover" alt="Default Image">
                            @endif
                        </div>
                        <div class="card-body p-4">
                            @if (!is_null($result->Nama_Kendaraan))
                                <h2 class="card-title text-2xl text-black">{{ $result->Nama_Kendaraan }}</h2>
                            @endif

                            @if (!is_null($result->Deskripsi_Kendaraan))
                                <p class="text-black">{{ $result->Deskripsi_Kendaraan }}</p>
                            @endif

                            <div class="mb-2 text-black">
                                <strong>Jumlah Kendaraan Tersedia:</strong> {{ $result->Jumlah_Kendaraan }}
                            </div>

                            <div class="card-actions justify-end mb-4">
                                @if (!is_null($result->Tipe_Kendaraan))
                                    <div class="badge badge-outline text-black">{{ $result->Tipe_Kendaraan }}</div>
                                @endif

                                @if (!is_null($result->Harga_Kendaraan))
                                    <div class="badge badge-outline text-red-500">Rp. {{ number_format($result->Harga_Kendaraan, 0, ',', '.') }}</div>
                                @endif
                            </div>

                            <div class="justify-center card-actions">
                                <a href="{{ route('kendaraan.detail', $result->id) }}" class="text-black btn btn-primary hover:btn-info transition duration-300 ease-in-out transform hover:-translate-y-1">View</a>
                                <a href="{{ route('rental.create', $result->id) }}" class="btn btn-success hover:btn-info transition duration-300 ease-in-out transform hover:-translate-y-1">Rent Now</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection

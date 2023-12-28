@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-5">
        @foreach ($rentals as $rental)
        @endforeach
        <div class="bg-white border rounded p-5 w-3/6 mx-auto">
            <h1 class="text-3xl mb-4">Rent a {{ $rental->kendaraan->Tipe_Kendaraan }}</h1>

        <form id="rentalForm" action="{{ route('rental.update', ['id' => $rental->id]) }}" method="POST" enctype="multipart/form-data" class="w-full">
            @csrf
            <h2 class="card-title text-2xl">Vehicle Name: {{ $rental->kendaraan->Nama_Kendaraan }}</h2>
            
            <div class="mb-4 mt-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                <input type="text" name="name" id="name" class="mt-1 p-2 w-full border rounded-md" value="{{ auth()->user()->name }}" disabled>
            </div>
            <div class="mb-4 flex">
            <div class="w-3/6">
                <label for="start_date" class="block text-sm font-medium text-black">Start Date</label>
                <input type="date" name="start_date" id="start_date" value="{{ $rental->start_date }}" class="form-input mt-1 block w-full" required onchange="update()">
            </div>
            <div class="mb-4 w-3/6 pl-4">
                <label for="end_date" class="block text-sm font-medium text-gray-700">End Date</label>
                <input type="date" name="end_date" id="end_date" value="{{ $rental->end_date }}" class="form-input mt-1 block w-full" required onchange="update()">
            </div>
            </div>
            <div class="mb-4">
                <label for="quantity" class="block text-sm font-medium text-gray-700">Quantity</label>
                <input type="number" name="quantity" id="quantity" value="{{ $rental->quantity }}" class="form-input mt-1 block w-full" required onchange="update()">
            </div>

            <div class="mb-4">
                <label for="additional_info" class="block text-sm font-medium text-gray-700">Additional Information</label>
                <textarea name="additional_info" id="additional_info" class="form-textarea mt-1 block w-full" rows="3" required onchange="update()">{{ $rental->additional_info }}</textarea>
            </div>

            <div class="mb-4 mt-4">
                <label for="duration" class="block text-sm font-medium text-gray-700">Duration (in days)</label>
                <input type="number" name="duration" id="duration" value="{{ $rental->duration }}" class="form-input mt-1 block w-full" disabled>
            </div>

            <div class="mb-4">
                <label for="total_cost" class="block text-sm text-2xl text-gray-700">Total Cost:</label>
                <input type="number" name="total_cost" id="total_cost" value="{{ $rental->total_cost, 0, ',', '.'}}" class="form-input text-red-500 text-xl mt-1 block w-full border-0" disabled>
            </div>
        </form>
        <form action="{{ route('payment.index', ['id' => $rental->id]) }}" method="GET">
            @csrf
            <button id="paymentButton" class="btn btn-success" type="submit">Payment</button>
        </form>
        
        <script>
            var status = "{{ $rental->status }}";
            if (status === "") {
                document.getElementById('paymentButton').disabled = true;
            } else if (status === 'waiting for payment') {
                document.getElementById('paymentButton').disabled = false;
            }

            var changeCount = 0;
            function update() {
    
                changeCount++;

                if (changeCount === 4) {
                    document.getElementById('rentalForm').submit();
                }
            }
        </script>
    </div>
@endsection

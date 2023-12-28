@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-5 flex justify-center">
        @foreach ($rentals as $rental)
        @endforeach
        <form action="{{ route('payment.process', ['rentalId' => $rental->id]) }}" method="POST" class="bg-white border rounded p-5 w-4/12">
            @csrf
            <h1 class="text-3xl text-black mb-4 text-center">Payment Details</h1>
            <div class="mb-3">
                <label for="card_number" class="block text-sm font-medium text-gray-700">Card Number</label>
                <input type="text" name="card_number" id="card_number" class="form-input mt-1 block w-full bg-gray-200 border-0 text-black" placeholder="Enter Card Number" required>
            </div>

            <div class="mb-4 flex">
                <div class="w-3/5">
                    <label for="expiration_date" class="block text-sm font-medium text-gray-700">Expiration Date</label>
                    <input type="text" name="expiration_date" id="expiration_date" class="form-input mt-1 block w-full bg-gray-200 border-0 text-black" placeholder="MM/YYYY" required>
                </div>
                <div class="w-2/5 pl-4">
                    <label for="cvv" class="block text-sm font-medium text-gray-700">CVV</label>
                    <input type="text" name="cvv" id="cvv" class="form-input mt-1 block w-full bg-gray-200 border-0 text-black" placeholder="CVV" required>
                </div>
            </div>

            <div class="mb-4">
                <label for="billing_address" class="block text-sm font-medium text-gray-700">Billing Address</label>
                <textarea name="billing_address" id="billing_address" class="form-textarea mt-1 block w-full bg-gray-200 border-0 text-black" placeholder="Enter Billing Address" rows="3" required></textarea>
            </div>

            <button type="submit" class="btn btn-info hover:btn-info transition duration-300 ease-in-out transform hover:-translate-y-1 w-full">Submit Payment</button>
        </form>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-5">
        <h1 class="text-3xl mb-4">Payment Details</h1>
        @foreach ($rentals as $rental)
        @endforeach
        <form action="{{ route('payment.process', ['rentalId' => $rental->id]) }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="card_number" class="block text-sm font-medium text-gray-700">Card Number</label>
                <input type="text" name="card_number" id="card_number" class="form-input mt-1 block w-full" required>
            </div>

            <div class="mb-4">
                <label for="expiration_date" class="block text-sm font-medium text-gray-700">Expiration Date</label>
                <input type="text" name="expiration_date" id="expiration_date" class="form-input mt-1 block w-full" required>
            </div>

            <div class="mb-4">
                <label for="cvv" class="block text-sm font-medium text-gray-700">CVV</label>
                <input type="text" name="cvv" id="cvv" class="form-input mt-1 block w-full" required>
            </div>

            <div class="mb-4">
                <label for="billing_address" class="block text-sm font-medium text-gray-700">Billing Address</label>
                <textarea name="billing_address" id="billing_address" class="form-textarea mt-1 block w-full" rows="3" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit Payment</button>
        </form>
    </div>
@endsection

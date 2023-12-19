@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-5">
        <h1 class="text-3xl mb-4">Rent a Car</h1>

        <form action="{{ route('rental.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label for="duration" class="block font-medium text-gray-700">Duration (in days)</label>
                <input type="number" name="duration" id="duration" class="form-input mt-1 block w-full" required>
            </div>

            <div class="mb-4">
                <label for="start_date" class="block font-medium text-gray-700">Start Date</label>
                <input type="date" name="start_date" id="start_date" class="form-input mt-1 block w-full" required>
            </div>

            <div class="mb-4">
                <label for="end_date" class="block font-medium text-gray-700">End Date</label>
                <input type="date" name="end_date" id="end_date" class="form-input mt-1 block w-full" required>
            </div>

            <div class="mb-4">
                <label for="quantity" class="block font-medium text-gray-700">Quantity</label>
                <input type="number" name="quantity" id="quantity" class="form-input mt-1 block w-full" required>
            </div>

            <div class="mb-4">
                <label for="additional_info" class="block font-medium text-gray-700">Additional Information</label>
                <textarea name="additional_info" id="additional_info" class="form-textarea mt-1 block w-full" rows="3"></textarea>
            </div>

            <div class="mb-4">
                <label for="total_cost" class="block font-medium text-gray-700">Total Cost</label>
                <input type="number" name="total_cost" id="total_cost" class="form-input mt-1 block w-full" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit Rental Request</button>
        </form>
    </div>
@endsection

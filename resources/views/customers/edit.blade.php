@extends('layouts.app')

@section('content')
<div class="form-card">
    <h1>Edit Customer</h1>
    <p>Update the customer account information.</p>

    @if ($errors->any())
        <div class="alert error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('customers.update', $customer) }}">
        @csrf
        @method('PUT')

        <label>Full Name</label>
        <input type="text" name="full_name"
               value="{{ old('full_name', $customer->full_name) }}">

        <label>Email</label>
        <input type="email" name="email"
               value="{{ old('email', $customer->email) }}">

        <label>Phone</label>
        <input type="text" name="phone"
               value="{{ old('phone', $customer->phone) }}">

        <button type="submit">Update Customer</button>
        <a href="{{ route('customers.index') }}" class="cancel-button">Cancel</a>
    </form>
</div>
@endsection
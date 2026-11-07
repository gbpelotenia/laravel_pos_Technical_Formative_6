@extends('layouts.app')

@section('content')
<div class="form-card">
    <h1>Add Customer</h1>
    <p>Create a new customer account.</p>

    @if ($errors->any())
        <div class="alert error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('customers.store') }}">
        @csrf

        <label>Full Name</label>
        <input type="text" name="full_name" value="{{ old('full_name') }}">

        <label>Email</label>
        <input type="email" name="email" value="{{ old('email') }}">

        <label>Phone</label>
        <input type="text" name="phone" value="{{ old('phone') }}">

        <button type="submit">Save Customer</button>
        <a href="{{ route('customers.index') }}" class="cancel-button">Cancel</a>
    </form>
</div>
@endsection
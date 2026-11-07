@extends('layouts.app')

@section('content')
<div class="form-card">
    <h1>Add User</h1>
    <p>Create a new user account.</p>

    @if ($errors->any())
        <div class="alert error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('users.store') }}">
        @csrf

        <label>Username</label>
        <input type="text" name="username" value="{{ old('username') }}">

        <label>Full Name</label>
        <input type="text" name="full_name" value="{{ old('full_name') }}">

        <label>Email</label>
        <input type="email" name="email" value="{{ old('email') }}">

        <button type="submit">Save User</button>
        <a href="{{ route('users.index') }}" class="cancel-button">Cancel</a>
    </form>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="form-card">
    <h1>Edit User</h1>
    <p>Update the user account and profile picture.</p>

    @if ($errors->any())
        <div class="alert error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST"
          action="{{ route('users.update', $user) }}"
          enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label>Username</label>
        <input type="text" name="username"
               value="{{ old('username', $user->username) }}">

        <label>Full Name</label>
        <input type="text" name="full_name"
               value="{{ old('full_name', $user->full_name) }}">

        <label>Email</label>
        <input type="email" name="email"
               value="{{ old('email', $user->email) }}">

        <label>Profile Picture</label>
        <input type="file" name="avatar" accept="image/*">

        @if ($user->avatar)
            <p>Current profile picture:</p>
            <img src="{{ asset('storage/' . $user->avatar) }}"
                 class="preview-avatar">
        @endif

        <button type="submit">Update User</button>
        <a href="{{ route('users.index') }}" class="cancel-button">Cancel</a>
    </form>
</div>
@endsection
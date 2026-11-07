<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
</head>
<body>
    <h1>User List</h1>

    <a href="/customers">View Customers</a>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Full Name</th>
        </tr>
        <a href="{{ route('users.create') }}" class="primary-button">
    + Add User
    <th>Avatar</th>
<th>Action</th>
<td>
    @if ($user->avatar)
        <img src="{{ asset('storage/' . $user->avatar) }}"
             class="table-avatar">
    @else
        <div class="avatar-placeholder">
            {{ strtoupper(substr($user->full_name, 0, 1)) }}
        </div>
    @endif
</td>

<td>
    <a href="{{ route('users.edit', $user) }}"
       class="edit-button">
        Edit
    </a>
</td>
</a>

        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->full_name }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
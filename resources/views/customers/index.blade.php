<!DOCTYPE html>
<html>
<head>
    <title>Customers</title>
</head>
<body>
    <h1>Customer List</h1>

    <a href="/users">View Users</a>

    <a href="{{ route('customers.create') }}" class="primary-button">
    + Add Customer
    <th>Action</th>

    <td>
    <a href="{{ route('customers.edit', $customer) }}"
       class="edit-button">
        Edit
    </a>

    @if (session('success'))
    <div class="alert success">
        {{ session('success') }}
    </div>
@endif
</td>
</a>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>

        @foreach ($customers as $customer)
            <tr>
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->full_name }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->phone }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
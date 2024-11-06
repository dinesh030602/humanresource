@extends('layouts.apps')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Employees</h1>
            <a href="{{ route('employees.create') }}" class="btn btn-primary">Add Employee</a>
            @if (session('success'))
                <div class="alert alert-success mt-3">
                    {{ session('success') }}
                </div>
            @endif
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>salutation</th>
                        <th>Last Name</th>
                        <th>gender</th>
                        <th>dob</th>
                        <th>age</th>
                        <th>address</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Department</th>
                        <th>experience</th>
                        <th>Position</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $employee)
                        <tr>
                            <td>{{ $employee->id }}</td>
                            <td>{{ $employee->first_name }}</td>
                            <td>{{ $employee->salutation }}</td>
                            <td>{{ $employee->last_name }}</td>
                            <td>{{ $employee->gender }}</td>
                            <td>{{ $employee->dob }}</td>
                            <td>{{ $employee->age }}</td>
                            <td>{{ $employee->address}}</td>
                            <td>{{ $employee->email }}</td>
                            <td>{{ $employee->phone }}</td>
                            <td>{{ $employee->department }}</td>
                            <td>{{ $employee->experience }}</td>
                            <td>{{ $employee->position }}</td>
                          
                            <td>
                                <a href="{{ route('employees.show', $employee->id) }}" class="btn btn-info">View</a>
                                <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning">Edit</a>
                               <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

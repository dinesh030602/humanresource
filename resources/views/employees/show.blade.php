                @extends('layouts.apps')

                @section('content')
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Employee Details</h1>
                            <div class="card">
                                @csrf
                                <div class="card-body">
                            <p><strong>Employee ID:</strong> {{ $employee->employee_id }}</p>
                            <p><strong>Frist name:</strong> {{ $employee->first_name }}</p>
                            <p><strong>Salutation:</strong> {{ $employee->select_Salutation }}</p>
                            <p><strong>Last name:</strong> {{ $employee->Last_name }}</p>
                            <p><strong>gender:</strong> {{ $employee->gender}}</p>
                            <p><strong>dob:</strong> {{ $employee->dob }}</p>
                            <p><strong>age:</strong> {{ $employee->age }}</p>
                            <p><strong>address:</strong> {{ $employee->address}}</p>
                            <p><strong>Email:</strong> {{ $employee->email }}</p>
                            <p><strong>phone:</strong> {{ $employee->phone}}</p>
                            <p><strong>Department:</strong> {{ $employee->department }}</p>
                            <p><strong>experience:</strong> {{ $employee->experience }}</p>
                            <p><strong>Position:</strong> {{ $employee->position }}</p>
                                </div>
                            </div>
                            <a href="{{ route('employees.index') }}" class="btn btn-primary mt-3">Back to List</a>
                        </div>
                    </div>
                </div>
                @endsection

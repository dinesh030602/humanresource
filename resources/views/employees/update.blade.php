@extends('layouts.apps')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Edit Employee</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('employees.update', $employee->id) }}" method="POST">
                @csrf
                @method('PUT')
                   <div class="form-group">
                    <label for="first_name">First Name:</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $employee->first_name }}">
                </div>
                <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salutation Dropdown</title>
</head>
<body>

    <label for="salutation">Select Salutation:</label>
    <select id="salutation" name="salutation">
        <option value="mr">Mr.</option>
        <option value="mrs">Mrs.</option>
        <option value="ms">Ms.</option>
        <option value="miss">Miss</option>
        <option value="dr">Dr.</option>
        <option value="none">None</option>
    </select>

</body>
</html>

                <div class="form-group">
                    <label for="last_name">Last Name:</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $employee->last_name }}">
                </div>
                <div>
                    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gender Dropdown</title>
    </head>
    <body>
    
        <label for="gender">Select Gender:</label>
        <select id="gender" name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
    
    </body>
    </html>
                    </div>
                <div class="form-group">
                    <label for="dob">dob:</label>
                    <input type="text" class="form-control" id="dob" name="dob" value="{{ $employee->dob }}">
                </div>
                <div class="form-group">
                    <label for="age">age:</label>
                    <input type="text" class="form-control" id="age" name="age" value="{{$employee->age }}">
                </div>
                <div class="form-group">
                    <label for="address">address:</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{$employee->address }}">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $employee->email }}">
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ $employee->phone }}">
                </div>
                <div class="form-group">
                    <label for="department">Department:</label>
                    <input type="text" class="form-control" id="department" name="department" value="{{ $employee->department }}">
                </div>
                <div class="form-group">
                    <label for="experience">experience:</label>
                    <input type="text" class="form-control" id="experience" name="experience" value="{{ $employee->experience }}">
                </div>
                <div class="form-group">
                    <label for="position">Position:</label>
                    <input type="text" class="form-control" id="position" name="position" value="{{ $employee->position }}">
                </div>                                                                      
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection

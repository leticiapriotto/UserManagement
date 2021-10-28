@extends('layouts.structure')
@section('content')

<table class="table table-borderless">
    <thead class="table-secondary">
        <tr>
            <th scope="col">Name</th>
            <th scope="col">CPF</th>
            <th scope="col">Birth Date</th>
            <th scope="col">Email</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Address</th>
            <th scope="col">City</th>
            <th scope="col">State</th>
            <th scope="col"></th>
        </tr>
    </thead>
    
    <tbody>
        @foreach ( $users as $user )
        <tr class="text-center">
            <td>{{ $user->name }}</td>
            <td>{{ $user->cpf }}</td>
            <td>{{ $user->birth_date }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->phone_number }}</td>
            <td>{{ $user->address }}</td>
            <td>{{ $user->city }}</td>
            <td>{{ $user->state }}</td>
            <td><button class="btn btn-dark">
                <a href="/users/{{ $user->id }}"> Show </a>
            </button></td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
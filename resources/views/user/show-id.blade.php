@extends('layouts.structure')
@section('content')

<div class="container-fx-sb">
    <h2>Showing selected user:</h2> <hr>
    
    <div class="container-fx-buttons">
        <button class="btn btn-dark" ><a href="/users">Return</a></button>
        <button class="btn btn-primary" onclick="EnableInputs()">Edit</button>

        <form action="/users/show/delete/{{ $userId->id }}" method="POST">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </div>
</div> <hr>

@if(session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif

<form action="/users/show/update/{{ $userId->id }}" method="post" class="row">
    @method('PUT')
    @csrf
    <div class="col-md-8">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror @error('name') is-invalid @enderror" name="name" id="name" value="{{ $userId->name }}" disabled >
        @error('name')<div class="invalid-feedback">{{$message}}</div>@enderror
    </div>

    <div class="col-md-4">
        <label for="cpf" class="form-label">CPF</label>
        <input type="text" class="form-control @error('cpf') is-invalid @enderror" name="cpf" id="cpf" value="{{ $userId->cpf }}" disabled >
        @error('cpf')<div class="invalid-feedback">{{$message}}</div>@enderror
    </div>

    <div class="col-md-6">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ $userId->email }}" disabled >
        @error('email')<div class="invalid-feedback">{{$message}}</div>@enderror
        
    </div>

    <div class="col-md-3">
        <label for="birth_date" class="form-label">Birth Date</label>
        <input type="date" class="form-control @error('birth_date') is-invalid @enderror" name="birth_date" id="birth_date" value="{{ $userId->birth_date }}" disabled >
        @error('birth_date')<div class="invalid-feedback">{{$message}}</div>@enderror
    </div>

    <div class="col-md-3">
        <label for="phone_number" class="form-label">Phone Number</label>
        <input type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" id="phone_number" value="{{ $userId->phone_number }}" disabled >
        @error('phone_number')<div class="invalid-feedback">{{$message}}</div>@enderror
    </div>

    <div class="col-md-6">
        <label for="address" class="form-label">Address</label>
        <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" id="address" value="{{ $userId->address }}" disabled >
        @error('address')<div class="invalid-feedback">{{$message}}</div>@enderror
    </div>

    <div class="col-md-3">
        <label for="city" class="form-label">City</label>
        <input type="text" class="form-control @error('city') is-invalid @enderror" name="city" id="city" value="{{ $userId->city }}" disabled >
        @error('city')<div class="invalid-feedback">{{$message}}</div>@enderror
    </div>

    <div class="col-md-3">
        <label for="state" class="form-label">State</label>
        <input type="text" class="form-control @error('state') is-invalid @enderror" name="state" id="state" value="{{ $userId->state }}" disabled >
        @error('state')<div class="invalid-feedback">{{$message}}</div>@enderror
    </div>

    <div class="btn-submit" id="btn-submit" style="display: none;">
        <button type="submit" class="btn btn-dark">Submit</button>
    </div>
</form>

<script>

    function EnableInputs() {
        var btn = document.getElementById("btn-submit");
        btn.style.display = "block";
        
        var inputs = document.getElementsByTagName('input');
        for(var i = 0; i < inputs.length; i++) {
            inputs[i].disabled = false;
        }
    }

</script>

@endsection
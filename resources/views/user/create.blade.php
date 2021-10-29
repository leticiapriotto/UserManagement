@extends('layouts.structure')
@section('content')

<form action="{{ route('storeUser') }}" method="POST" class="row">
@csrf
    <div class="col-md-8">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Name">
        @error('name')<div class="invalid-feedback">{{$message}}</div>@enderror
    </div>

    <div class="col-md-4">
        <label for="cpf" class="form-label">CPF</label>
        <input type="text" class="form-control @error('cpf') is-invalid @enderror" name="cpf" id="cpf" maxlength="14" onkeypress="maskCpf(this, mcpf);" onblur="maskCpf(this, mcpf);" placeholder="000.000.000-00">
        @error('cpf')<div class="invalid-feedback">{{$message}}</div>@enderror
    </div>

    <div class="col-md-6">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="example@email.com">
        @error('email')<div class="invalid-feedback">{{$message}}</div>@enderror
    </div>

    <div class="col-md-3">
        <label for="birth_date" class="form-label">Birth Date</label>
        <input type="date" class="form-control @error('birth_date') is-invalid @enderror" name="birth_date" id="birth_date" placeholder="00/00/0000">
        @error('birth_date')<div class="invalid-feedback">{{$message}}</div>@enderror
    </div>

    <div class="col-md-3">
        <label for="phone_number" class="form-label">Phone Number</label>
        <input type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" id="phone_number" onkeypress="maskPhone(this, mphone);" onblur="maskPhone(this, mphone);" placeholder="(00) 00000-0000">
        @error('phone_number')<div class="invalid-feedback">{{$message}}</div>@enderror
    </div>

    <div class="col-md-6">
        <label for="address" class="form-label">Address</label>
        <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" id="address" placeholder="aaaaaaaaaa">
        @error('address')<div class="invalid-feedback">{{$message}}</div>@enderror
    </div>

    <div class="col-md-3">
        <label for="city" class="form-label">City</label>
        <input type="text" class="form-control @error('city') is-invalid @enderror" name="city" id="city" placeholder="City">
        @error('city')<div class="invalid-feedback">{{$message}}</div>@enderror
    </div>

    <div class="col-md-3">
        <label for="state" class="form-label">State</label>
        <input type="text" class="form-control @error('state') is-invalid @enderror" name="state" id="state" placeholder="State">
        @error('state')<div class="invalid-feedback">{{$message}}</div>@enderror
    </div>

    <div class="btn-submit">
        <button type="submit" class="btn btn-dark">Submit</button>
    </div>
</form>

@endsection
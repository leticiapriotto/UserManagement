@extends('layouts.structure')
@section('content')

<form action="{{ route('storeUser') }}" method="POST" class="row">
@csrf
    <div class="col-md-8">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Name">
    </div>

    <div class="col-md-4">
        <label for="cpf" class="form-label">CPF</label>
        <input type="text" class="form-control" name="cpf" id="cpf" placeholder="000.000.000-00">
    </div>

    <div class="col-md-6">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="example@email.com">
    </div>

    <div class="col-md-3">
        <label for="birth_date" class="form-label">Birth Date</label>
        <input type="date" class="form-control" name="birth_date" id="birth_date" placeholder="00/00/0000">
    </div>

    <div class="col-md-3">
        <label for="phone_number" class="form-label">Phone Number</label>
        <input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="(00) 00000-0000">
    </div>

    <div class="col-md-6">
        <label for="address" class="form-label">Address</label>
        <input type="text" class="form-control" name="address" id="address" placeholder="aaaaaaaaaa">
    </div>

    <div class="col-md-3">
        <label for="city" class="form-label">City</label>
        <input type="text" class="form-control" name="city" id="city" placeholder="City">
    </div>

    <div class="col-md-3">
        <label for="state" class="form-label">State</label>
        <input type="text" class="form-control" name="state" id="state" placeholder="State">
    </div>

    <div class="btn-submit">
        <button type="submit" class="btn btn-dark">Submit</button>
    </div>
</form>

@endsection
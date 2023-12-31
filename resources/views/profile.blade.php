@extends('layouts.layout')

@section('content')
    <form action="/profile" method="post" class="mt-4">
        @method('put')
        @csrf

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> 
        @endif

        <div class="jumbotron text-center py-5 border-bottom mb-5">
            <p class="display-1 text-capitalize" style="font-weight: 400;">My Profile</p>
          </div>

        <div class="mb-5 row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ auth()->user()->name }}" required>
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            </div>
        </div>

        <div class="mb-5 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ auth()->user()->email }}">
            </div>
        </div>

        <div class="mb-5 row">
            <label for="address" class="col-sm-2 col-form-label">Address</label>
            <div class="col-sm-10">
            <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ auth()->user()->address }}">
            @error('address')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            </div>
        </div>

        <div class="mb-5 row">
            <label for="phone_number" class="col-sm-2 col-form-label">Phone Number</label>
            <div class="col-sm-10">
            <input type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ auth()->user()->phone_number }}">
            @error('phone_number')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            </div>
        </div>

        <div class="row justify-content-center">
            <button class="w-25 btn btn-lg mt-5" type="submit" style="background-color: #4ECDC4">Update Changes</button>
        </div>
    </form>
@endsection
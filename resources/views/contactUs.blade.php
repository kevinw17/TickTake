@extends('layouts.layout')

@section('content')
<div class="col mb-5">
    <h2 class="card-title text-center d-block text-capitalize pt-5">Contact Us</h2>
</div>

<div class="container d-flex align-items-center justify-content-center">
    <form action="/contactUs" class="col-md-6">
        @csrf
        <div class="form-floating">
            <input type="name" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" autofocus required value="{{ old('name') }}">
            <label for="name">Your name</label>
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        
        <div class="form-floating my-4">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
            <label for="email">Email address</label>
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group my-4">
            <label for="select">What topic do you want to ask?</label>
            <select class="form-select" id="select" name="select" required>
                <option selected>Select your choice</option>
                <option value="Option 1">Option 1</option>
                <option value="Option 2">Option 2</option>
                <option value="Option 3">Option 3</option>
            </select>
        </div>

        <div class="form-group mt-4">
            <label for="subject">Your Message</label>
            <textarea id="subject" name="subject" class="form-control" placeholder="Write your message" style="height: 200px" required ></textarea>
            @error('subject')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button class="w-100 btn btn-lg mt-4 mb-5" type="submit" style="background-color: #4ECDC4">Send your message</button>     
    </form>
</div>

@endsection
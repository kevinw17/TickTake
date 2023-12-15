@extends('layouts.layout')

@section('content')
<div class="col mt-4 mb-5">
    <h2 class="card-title text-center d-block text-capitalize pt-5">Contact Us</h2>
</div>

<div class="container d-flex align-items-center justify-content-center">
    <form action="/contactUs" class="col-md-6" method="POST">
        @csrf

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> 
        @endif

        <div class="form-group my-4">
            <label for="name">Your name</label>
            <input type="name" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" autofocus required value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        
        <div class="form-group my-4">
            <label for="email">Email address</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group my-4">
            <label for="select">What topic do you want to ask?</label>
            <select class="form-select" id="select" name="topic" required>
                <option selected>Option 1</option>
                <option value="Option 2">Option 2</option>
                <option value="Option 3">Option 3</option>
            </select>
        </div>

        <div class="form-group mt-4">
            <label for="subject">Your Message</label>
            <textarea id="subject" name="subject" class="form-control @error('subject') is-invalid @enderror" placeholder="Write your message" style="height: 200px" required ></textarea>
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
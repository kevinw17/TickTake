@extends('layouts.layout')

@section('content')

<div class="container-fluid py-4">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="card-title text-center d-block text-capitalize" style="margin-top: 16vh;">contact us</h2>
            </div>
        </div>
    </div>
</div>

<div class="container d-flex align-items-center justify-content-center" style="margin-top: 3vh;">
    <form action="#" class="col-md-6">

        <div class="form-group">
            <label for="Name">Full Name:</label>
            <input type="text" class="form-control" id="Name" placeholder="Enter Name" name="Name">
        </div>
        
        <div class="form-group">
            <label for="Email">Email:</label>
            <input type="email" class="form-control" id="Email" placeholder="Enter Email" name="Email">
        </div>

        <div class="form-group">
            <label for="Topic">What topic do you want to ask?</label>
            <select class="form-select" id="Topic" name="Topic">
                <option value="" selected></option>
                <option value="Option 1">Option 1</option>
                <option value="Option 2">Option 2</option>
                <option value="Option 3">Option 3</option>
                <option value="Separated Link">Separated Link</option>
            </select>
        </div>

        <div class="form-group">
            <label for="subject">Your Message:</label>
            <textarea id="subject" name="subject" class="form-control" placeholder="Write something..." style="height: 200px;"></textarea>
        </div>

        <div class="form-group text-center">
            <button class="btn btn-primary w-100" style="background-color: #4ECDC4; margin-top: 3vh;">Send your message</button>
        </div>        

    </form>
</div>

@endsection
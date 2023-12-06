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

<div class="container d-flex align-items-center justify-content-center" style=" margin-top: 4vh;">
       
    <form action="#">

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>

        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
        </div>

        <div class="checkbox">
            <label><input type="checkbox" name="remember"> Remember me</label>
            <p class="card-title text-center mb-4 text-capitalize">Don't have an account? 
                <a href="#">
                    Register here
                </a></p>
        </div>
        <div class="col">
            <button class="btn btn-outline-primary col-md-7 card-title text-center mb-4" style="background-color: #4ECDC4">Sign In</button>
        </div>
        
    </form>
</div>



@endsection
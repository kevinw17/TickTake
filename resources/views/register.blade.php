@extends('layouts.layout')

@section('content')

    <div class="container">
        <h2 class="card-title text-center mb-4 text-capitalize">Register</h2>
        <form action="#">

            <div class="form-group">
                <label for="pwd">Name:</label>
                <input type="name" class="form-control" id="pwd" placeholder="Enter name" name="pwd">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>

            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
            </div>

            <div class="checkbox">
                <p class="card-title text-center mb-4 text-capitalize">Already Have an Account? 
                    <a href="#">
                        Login  here
                    </a></p>
            </div>
            <div class="col">
                <button class="btn btn-outline-primary col-md-7 card-title text-center mb-4" style="background-color: #4ECDC4">Register</button>
            </div>
            
        </form>
    </div>

@endsection


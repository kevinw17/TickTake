@extends('layouts.layout')

@section('content')

    <div class="row">
        <h1 class="jumbotron text-center py-5" style="font-family: Averia Libre">
            Sign In
        </h1>
    </div>

    <div class="row">
        <div class="form-group" style="margin-bottom: 20px;">
            <label for="email" style="display: block; font-weight: bold; margin-bottom: 8px;">
                Email:
            </label>
            <input type="email" id="email" name="email" required style="width: 100%; padding: 8px; box-sizing: border-box;">
        </div>
    </div>

    <div class="row">
        <div class="form-group" style="margin-bottom: 20px;">
            <label for="password" style="display: block; font-weight: bold; margin-bottom: 8px;">
                Password:
            </label>
            <input type="password" id="password" name="password" required style="width: 100%; padding: 8px; box-sizing: border-box;">
        </div>
          
    </div>

    <div class="row">
        <button type="submit" class="btn-login" style="background-color: #4ECDC4; padding: 10px;">
            Sign In
        </button>
    </div>
    <p class="jumbotron text-center py-5" style="font-family: Averia Libre">
        Don't have an account? 
        <a href="#">
            Register here
        </a>
    </p>

@endsection
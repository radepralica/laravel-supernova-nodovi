@extends('layouts.layout')
@section('header-title','Register')

@section('main-content')

<div class="container">
    <div class="row">
        <div class="col-6 offset-3"><br><br>

<form action="/register" method="post">
    @csrf
<input type="text" name="firstName" class="form-control" placeholder="Ime" value="{{old('firstName')}}"> <br>
@error('firstName')
<p class="alert alert-danger container text-center">
    {{$message}}
</p>
@enderror
<input type="text" name="lastName" class="form-control" placeholder="Prezime" value="{{old('lastName')}}"> <br>
@error('lastName')
<p class="alert alert-danger container text-center">
    {{$message}}
</p>
@enderror
<input type="text" name="username" class="form-control" placeholder="Username" value="{{old('username')}}"> <br>
@error('username')
<p class="alert alert-danger container text-center">
    {{$message}}
</p>
@enderror
<input type="email" name="email" class="form-control" placeholder="E-mail" value="{{old('email')}}"> <br>
@error('email')
<p class="alert alert-danger container text-center">
    {{$message}}
</p>
@enderror
<input type="password" name="password" class="form-control" placeholder="Password"> <br>
@error('password')
<p class="alert alert-danger container text-center">
    {{$message}}
</p>
@enderror
<input type="password" name="password_confirmation" class="form-control" placeholder="Potvrdi password"> <br>
@error('password_confirmation')
<p class="alert alert-danger container text-center">
    {{$message}}
</p>
@enderror
<button class="btn btn-info offset-4">Register</button>
</form>

    </div>

</div>
</div>
<br><br>
@endsection

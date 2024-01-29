@extends('layouts.layout')
@section('header-title','Login')

@section('main-content')

 <div class="container">
    <h1 class="text-center text-light">Login</h1>
    <br>
    @if (session()->has('access-error'))
    <div class="container alert alert-danger text-center w-50">
        {{session('access-error')}}
    </div>
        @endif

@if (session()->has('succes-register'))
<p class="container alert alert-danger text-center  w-50">
    {{session('succes-register')}}
</p>
@endif
 </div>
<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
<form action="{{route('user.login')}}" method="post">
@csrf
<br><br><br>
<input type="text" name="loginusername" class="form-control" placeholder="Username" value=""> <br>
@error('loginusername')
<p class="alert alert-danger container text-center">
    {{$message}}
</p>
@enderror

<input type="password" name="loginpassword" class="form-control" placeholder="Password" value=""> <br>
@error('loginpassword')
<p class="alert alert-danger container text-center">
    {{$message}}
</p>
@enderror
<button class="btn btn-success offset-5">Login</button>

        </div>
    </div>
</div>


</form>



@endsection

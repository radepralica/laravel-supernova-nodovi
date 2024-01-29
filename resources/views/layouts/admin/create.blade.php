@extends('layouts.layout')
@section('header-title','Create')
@extends('layouts.layoutNav')

@section('main-content')

<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <br>
            <h1 class="text-center">Create </h1>
        </div>
    </div>
</div>
<br>
<br>
<br>
<form action="{{route('admin.store')}}" method="post">
    @csrf
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <input type="text" class="form-control" name="ime" placeholder="Upišite Ime" value="{{old('ime')}}">
                <br>
                @error('ime')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <input type="text" class="form-control" name="adresa" placeholder="Upišite Adresu"
                    value="{{old('adresa')}}"> <br>
                @error('adresa')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <input type="text" class="form-control" name="naselje" placeholder="Upišite Naselje "
                    value="{{old('naselje')}}"><br>
                @error('birthYear')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror<br>
                <textarea name="ulice" id="" cols="30" rows="10" class="form-control"
                    placeholder="Upišite ulice odvojene zarezom"></textarea> <br>
                @error('ulice')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <button class="btn btn-success offset-4 w-25">Create</button>
            </div>
        </div>
    </div>
</form>
<div>

    @endsection

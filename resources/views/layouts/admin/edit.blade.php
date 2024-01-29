@extends('layouts.layout')
@section('header-title','Edit')

@extends('layouts.layoutNav')
@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <br>
            <h1 class="text-center">Edit </h1>

        </div>
    </div>
</div>

<br>
<br>
<br>
<form action="{{route('admin.update',['nod'=>$nod])}}" method="post">
    @csrf
    @method('PUT')
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <input type="text" class="form-control" name="ime" placeholder="Upišite Ime" value="{{$nod->ime}}">
                <br>
                @error('ime')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <input type="text" class="form-control" name="adresa" placeholder="Upišite Adresu"
                value="{{$nod->adresa}}" > <br>
                @error('adresa')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <input type="text" class="form-control" name="naselje" placeholder="Upišite Naselje "
                value="{{$nod->naselje}}"><br>
                @error('birthYear')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror<br>
                <textarea name="ulice" id="" cols="30" rows="10" class="form-control"
                    placeholder="Upišite ulice odvojene zarezom"> {{$nod->ulice}}</textarea> <br>
                @error('ulice')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <button class="btn btn-success offset-4 w-25">Update</button>
            </div>
        </div>
    </div>

</form>




@endsection

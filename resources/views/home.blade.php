@extends('layouts.layout')
@section('header-title','Home')
@section('header-title')
@extends('layouts.layoutNav')
@section('main-content')
<div class="container-fluid mt-3">

    <div class="mt-4 p-2 bg-info text-white shadow-lg p-2 mb-5  rounded container">
        <h1 style="text-align: center;">Nodovi i Ulice</h1>

    </div>
</div>
<br><br>
<div class="container">
    <div class="row">
        <div class="col-6 offset-3 ">

            <input type="text" class="form-control  ms-2" style="width:97%" placeholder="pretraži nod" id="searchInput">
            <br><br>
            <div id="searchResults">
            </div>
        </div>

<div class="col-6 offset-3">
    <form action="/" method="post">
        @csrf
        <div class="container" id="divSelect">
            <select class="form-select text-dark bg-light" id="selBlic" name='ime' onchange="this.form.submit()">
                @foreach ($blicNod as $nod)
                <option value=" {{ $nod->id }}" {{ (isset($selectedNod) && $selectedNod->id == $nod->id) ?
                    'selected' : ''
                    }}>{{ $nod->ime }}- {{$nod->adresa}}</option>
                @endforeach
            </select>
            <br>
        </div>
        <div class="container">
        </div>
        <br><br>
        <div id="blicNod" class="container-fluid ">
            @if (isset($selectedNod))
            <h3 class="text-center text-dark fw-bold shd bg-light"><strong>NOD: {{$selectedNod->adresa}} </strong>
            </h3>
            <br>
            <div class="container-fluid">
                <ul class="list-group  shd rounded">
                    <li class="list-group-item"><strong>Adresa: </strong>{{$selectedNod->adresa}}</li>
                    <li class="list-group-item"><strong>Naselje: </strong>{{$selectedNod->naselje}}</li>
                    <li class="list-group-item"><strong>Ulice: </strong>{{$selectedNod->ulice}}</li>
                </ul>
                @endif
                <br>
            </div>
        </div>

</form>

</div>

    </div>
</div>

    <br>

@endsection

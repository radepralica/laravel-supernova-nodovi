<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">


        <title>Nodovi i Ulice</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->

    </head>
    <body >



                    <nav class="navbar navbar-expand navbar-light bg-info ">
                        <ul class="nav navbar-nav ms-auto">
                            <li class="nav-item h4">
 <a href="{{ route('user.login') }}" class="nav-link text-light" >Log in</a>
                            </li>



                        <li class="nav-item h4">
  <a href="{{ route('user.register') }}" class="nav-link text-light">Register</a>

                        </li>
                        </ul>
                                   </nav>







        <div class="container-fluid mt-3">

            <div class="mt-4 p-3 bg-info text-white shadow-lg p-2 mb-5  rounded">
                <h1 style="text-align: center;">Nodovi i Ulice</h1>

            </div>
        </div>
        <br><br>
            <div class="container">
                <div class="row">
                    <div class="col-8 ">
                        <input  type="text" class="form-control offset-2" placeholder="pretraži nod" id="searchInput">
                        <div id="searchResults">

                        </div>

                    </div>

                </div>
            </div>


        <div class="container">
            <br>
            <form action="/" method="post">
                @csrf
                <div class="container-fluid" id="divSelect">
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

                    <h2 id="txtCount" class="text-center ">Ukupno Nodova: {{$nod->count()}} <span
                            class=" text-light"></span></h2>


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

        </div>

        </form>
        {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
        @vite(['resources/js/app.js'])
        @vite(['resources/css/app.css'])



    </body>
</html>

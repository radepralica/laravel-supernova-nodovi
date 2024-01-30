@extends('layouts.layout')
@section('header-title','Admin')
@extends('layouts.layoutNav')
@section('main-content')
<div class="mt-4 p-3 bodytitle text-white shadow-lg p-2 mb-5  rounded container">
    <h1 style="text-align: center;">Nodovi i Ulice</h1>



</div>
<?php $count=1;?>
<br>
@if (session()->has('delete-success'))

    <p class="alert alert-success container text-center w-75 fw-bold h3" >

        {{session('delete-success')}}
    </p>

    @endif

<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table table-striped" style="font-size: larger;text-align: center;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Ime</th>
                        <th>Adresa</th>
                        <th>Naselje</th>
                        <th>Ulice</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="tBody">

                    @foreach ($blicNod as $nod )


                    <tr>
                        <td class="text-light pt-4">
                            <?php echo $count++;?>
                        </td>
                        <td>{{$nod->ime}}</td>
                        <td>{{$nod->adresa}}</td>
                        <td>{{$nod->naselje}}</td>
                        <td>{{$nod->ulice}}</td>
                        <td>
                            <div class="container">
                                <div class="row mt-3">
                                    <div class="col-5">
                                        <button  class="btn btn-warning"><a style="text-decoration: none" class="text-white " href="{{route('admin.edit',['nod'=>$nod])}}">Edit</a></button>

                                    </div>
                                    <div class="col-5">
     <form action="{{route('admin.delete',['nod'=>$nod])}}" method="post">
@csrf
<button class="btn btn-danger ms-3 ">Delete</button>
     </form>

                                    </div>


                                </div>
                            </div>


                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>
            <br>
@if ($nod->count())
      <div class="container offset-5">
          @endif
{{$blicNod->links()}}
   </div>

            <div class="container">
                <div class="row">
                    <div class="col-6 offset-5">
                        <br>
                        <a href="{{route('admin.create')}}" class="btn btn-success">Dodaj Novi Nod</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection


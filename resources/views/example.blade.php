@extends('layouts.app')
@section('content')
<body background="https://curmat.000webhostapp.com/img/snacks.jpg">
<div class="container">

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-8">
                    <h4> Snacks </h4>
                </div>
                <div class="col-4" style="text-align:right;padding-right:35px">
                    <a href="{{ url('/') }}" class="btn btn-primary"><svg width="4em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M5.854 4.646a.5.5 0 0 1 0 .708L3.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0z"/>
  <path fill-rule="evenodd" d="M2.5 8a.5.5 0 0 1 .5-.5h10.5a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/></svg></a>
                </div>
            </div>
        </>
        <br>
    <div class="card-body" style="border: 1px solid">

    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Bar</th>

                <th>Nombre</th>

                <th>Precio</th>

                <th>Disponible</th>
            </tr>

        </thead>

        <tbody>
            @foreach($snacks as $snack)
                <tr>
                    <td>{{$snack->bar->nombre}}</td>

                    <td>{{$snack->nombre}}</td>

                    <td>{{$snack->precio}}$ </td>

                    <td>
                        @if ($snack->disponible==1)
                            {{'Si'}}
                        @endif
                        @if($snack->disponible==0)
                            {{'No'}}
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    </div>
    </div>

</div>
@endsection



@extends('layouts.app')
@section('content')
<body background="https://curmat.000webhostapp.com/img/fondo.jpg">
<div class="container">
    <div class="card mb-4">
        <div class="card-header">
            <div class="row">
                <div class="col-8">
                    <h4>Ver Campus</h4>
                </div>
                <div class="col-4" style="text-align:right;padding-right:15px"> 
                    <a href="{{route('campuses.index')}}" class="btn btn-primary"><svg width="3em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M5.854 4.646a.5.5 0 0 1 0 .708L3.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0z"/>
  <path fill-rule="evenodd" d="M2.5 8a.5.5 0 0 1 .5-.5h10.5a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
</svg></a>
                </div>
            </div>
        </div>

    <div class="card-body">
                                        <div class="form-group">
            <label class="col-form-label" for="value">Nombre</label>
            <input type="text" readonly class="form-control" id="staticEmail" value="{{$campus->nombre}}">
        </div>
                                <div class="form-group">
            <label class="col-form-label" for="value">Direccion</label>
            <input type="text" readonly class="form-control" id="staticEmail" value="{{$campus->direccion}}">
        </div>
                                                                    </div>

    </div>
</div>
@endsection
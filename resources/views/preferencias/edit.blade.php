@extends('layouts.app')
@section('content')
<body background="https://curmat.000webhostapp.com/img/preferencias.jpg">
<div class="container">
    <div class="card">

        <div class="card-header">
            <h3>Editar Preferencia </h3>
        </div>
        <div class="card-body">

    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
        <li class="text-danger">{{ $error }}</li>
        @endforeach
    </ul>

    @endif

    <form action="{{route('preferencias.update',['preferencia'=>$preferencia->id])}}" method="POST" novalidate>
        @csrf
        @method('PUT')
                        <div class="form-group">
            <label for="menu_id">Menu</label>
            <select class="form-control" name="menu_id" id="menu_id">
                @foreach((\App\Menu::all() ?? [] ) as $menu)
                <option value="{{$menu->id}}"
                    @if($preferencia->menu_id == old('menu_id', $menu->id))
                    selected="selected"
                    @endif
                >{{$menu->nombre}}</option>

                @endforeach
            </select>
        </div>
                

                                                        <div class="form-group">
            <label for="fecha">Fecha</label>
                    <input class="form-control Date"  type="date"  name="fecha" id="fecha" value="{{old('fecha',$preferencia->fecha)}}"
                                    required="required"
                        >
                    @if($errors->has('fecha'))
            <p class="text-danger">{{$errors->first('fecha')}}</p>
            @endif
        </div>
                                <div class="form-group">
            <label for="observacion">Observacion</label>
                    <textarea class="form-control Text"  name="observacion" id="observacion" cols="30" rows="10">{{old('observacion',$preferencia->observacion)}}</textarea>
                    @if($errors->has('observacion'))
            <p class="text-danger">{{$errors->first('observacion')}}</p>
            @endif
        </div>
                                                                        <div>
            <button class="btn btn-success" type="submit"><svg width="4em" height="2em" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
</svg></button>
            <a href="{{route('preferencias.index')}}" class="btn btn-primary"><svg width="4em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M5.854 4.646a.5.5 0 0 1 0 .708L3.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0z"/>
  <path fill-rule="evenodd" d="M2.5 8a.5.5 0 0 1 .5-.5h10.5a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/></a>
        </div>
    </form>
    </div>
        </div>

</div>
@endsection
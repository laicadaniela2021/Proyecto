@extends('layouts.app')
@section('content')
<body background="https://curmat.000webhostapp.com/img/menus.jpg">
<div class="container">
    <div class="card">

        <div class="card-header">
            <h3>Editar Menu </h3>
        </div>
        <div class="card-body">

    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
        <li class="text-danger">{{ $error }}</li>
        @endforeach
    </ul>

    @endif

    <form action="{{route('menus.update',['menu'=>$menu->id])}}" method="POST" novalidate>
        @csrf
        @method('PUT')
                        <div class="form-group">
            <label for="bar_id">Bar</label>
            <select class="form-control" name="bar_id" id="bar_id">
                @foreach((\App\Bar::all() ?? [] ) as $bar)
                <option value="{{$bar->id}}"
                    @if($menu->bar_id == old('bar_id', $bar->id))
                    selected="selected"
                    @endif
                >{{$bar->nombre}}</option>

                @endforeach
            </select>
        </div>
                                

                                                        <div class="form-group">
            <label for="nombre">Nombre</label>
                    <input class="form-control String"  type="text"  name="nombre" id="nombre" value="{{old('nombre',$menu->nombre)}}"
                                    required="required"
                        >
                    @if($errors->has('nombre'))
            <p class="text-danger">{{$errors->first('nombre')}}</p>
            @endif
        </div>
                                <div class="form-group">
            <label for="precio">Precio</label>
                    <input class="form-control Float"  type="text"  name="precio" id="precio" value="{{old('precio',$menu->precio)}}"
                                    required="required"
                        >
                    @if($errors->has('precio'))
            <p class="text-danger">{{$errors->first('precio')}}</p>
            @endif
        </div>
                                <div class="form-group">
            <label for="disponible">Disponible</label>
                    <input class="form-control Boolean"  type="text"  name="disponible" id="disponible" value="{{old('disponible',$menu->disponible)}}"
                                    required="required"
                        >
                    @if($errors->has('disponible'))
            <p class="text-danger">{{$errors->first('disponible')}}</p>
            @endif
        </div>
                                <div class="form-group">
            <label for="descripcion">Descripcion</label>
                    <textarea class="form-control Text"  name="descripcion" id="descripcion" cols="30" rows="10">{{old('descripcion',$menu->descripcion)}}</textarea>
                    @if($errors->has('descripcion'))
            <p class="text-danger">{{$errors->first('descripcion')}}</p>
            @endif
        </div>
                                                                        <div>
            <button class="btn btn-success" type="submit"><svg width="4em" height="2em" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
</svg></button>
            <a href="{{route('menus.index')}}" class="btn btn-primary"><svg width="4em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M5.854 4.646a.5.5 0 0 1 0 .708L3.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0z"/>
  <path fill-rule="evenodd" d="M2.5 8a.5.5 0 0 1 .5-.5h10.5a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/></a>
        </div>
    </form>
    </div>
        </div>

</div>
@endsection
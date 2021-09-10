@extends('layouts.app')
@section('content')

<body background="https://queber.com/wp-content/uploads/2016/08/picjumbo.jpg">
<div class="container">
    <div class="card">
        <div class="card-header">
  <h2>REPORTES UNIVERSIDAD DE LAS FUERZAS ARMADAS ESPE-L</h2>
  <div class="card-group">
    <div class="card card-primary text-center">
      <img class="card-img-top" src="https://curmat.000webhostapp.com/img/menubares.jpg" alt="Card image cap">
      <div class="card-body">
        <div class="badge badge-primary badge-sm">REPORTES PREFERENCIAS</div>
        <div class="card-title">Datos que muestran reportes de las preferencias de los usuarios por Bar</div>
      </div>
      <div class="card-footer">
        <a href="{{ url('/reportes/barpreferencias') }}" class="btn btn-outline-secondary btn-icon-right">
          <span>GENERAR REPORTE PREFERENCIAS
            <img src="https://static3.avast.com/1/web/i/v2/components/arrow-m-right-orange.png" height="24">
          </span>
        </a>
      </div>
    </div>
    <div class="card card-primary text-center circle">
      <img class="card-img-top" src="https://curmat.000webhostapp.com/img/menusugerencia.jpg" alt="Card image cap">
      <div class="card-body">
        <div class="badge badge-primary badge-sm">GRAFICO ESTADISTICO MENU</div>
        <div class="card-title">Grafico estadistico que muesra el numero de platos por Bar</div>

      </div>
      <div class="card-footer">
        <a href="{{ url('/reportes/graficasbarmenus') }}" class="btn btn-outline-secondary btn-icon-right">
          <span>GENERAR GRAFICO MENU
            <img src="https://static3.avast.com/1/web/i/v2/components/arrow-m-right-orange.png" height="24">
          </span>
        </a>
      </div>
    </div>
    <div class="card card-primary text-center">
      <img class="card-img-top" src="https://curmat.000webhostapp.com/img/barbuzon.jpg" alt="Card image cap">
      <div class="card-body">
        <div class="badge badge-primary badge-sm">LISTA DE SUGERENCIAS DEL BUZON</div>
        <div class="card-title">Lista que muestra las sugerencias de los usuarios que dejan en el buzon</div>

      </div>
      <div class="card-footer">
        <a href="{{ url('/reportes/buzonbar') }}" class="btn btn-outline-secondary btn-icon-right">
          <span>LISTA DE SUGERENCIAS POR BAR
            <img src="https://static3.avast.com/1/web/i/v2/components/arrow-m-right-orange.png" height="24">
          </span>
        </a>
      </div>
    </div>
    </div>
    </div>
  </div >
  </div >



@endsection



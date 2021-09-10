@extends('layouts.app')

@section('content')
<body background="https://curmat.000webhostapp.com/img/home.jpg">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Estado') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Estas logueado!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

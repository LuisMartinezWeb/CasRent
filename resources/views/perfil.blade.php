@extends('layouts.app')
@section('content')
<br>
<br>
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar Imagen del Perfil de Usuario') }}</div>
                    <div class="card-body">
                        <form enctype="multipart/form-data" action="{{ url('/perfil') }}" method="POST">
                            @csrf
                            <img src="dist/img/{{ $user->avatar }}"style="width: 150px; height: 150px; float: left; border-radius: 50%;margin-right: 25px;">
                            <h2> Bienvenido a tu Perfil: {{ $user->name }}</h2>
                            <br>
                            <br>
                            <input type="file"  name="avatar">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" class="btn btn-primary" role="button" aria-pressed="true">
                            <a href="{{ url('/dashboard') }}" class="btn btn-primary" role="button" aria-pressed="true">Menu</a>
                        </form>
                    </div>
                </div>
            </div>   
        </div>
    </div>
</div>
 <br>
 <br>
<footer class="text-center text-white-50 py-3 shadow">
    CASRENT | Copyright {{ date('Y') }}
</footer>
@endsection
        
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detalle de usuario</div>

                <div class="card-body">
                    <p><strong>Nombre:</strong> {{$user->name}}</p>
                    <p><strong>nickName:</strong> {{$user->nickName}}</p>
                    <p><strong>Email:</strong> {{$user->email}}</p>
                    <p><strong>Rol:</strong> {{$user->rol->key}}</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

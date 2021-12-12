@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar usuario</div>

                <div class="card-body">
                    @include('partials.validation-errors')
                    <form action="{{route('users.update',$user->id)}}" method="post">
                        @csrf
                        @method('PATCH')
                        @include('users._form',['pasw'=>false])

                        <div class="form-group  text-center">
                            <button type="submit" class="btn btn-warning btn-block mt-5">Editar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

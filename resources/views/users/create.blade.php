@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear usuarios</div>

                <div class="card-body">
                    @include('partials.validation-errors')
                    <form action="{{route('users.store')}}" method="post">
                        @csrf
                        @include('users._form',['pasw'=>true])
                        <div class="form-group  text-center">
                            <button type="submit" class="btn btn-primary btn-block mt-5">Crear</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

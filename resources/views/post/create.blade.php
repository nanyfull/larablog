@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear Publicación</div>

                <div class="card-body">
                    @include('partials.validation-errors')
                    <form action="{{route('posts.store')}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                        @csrf
                        @include('post._form',['created'=>true])
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

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Publicación</div>

                <div class="card-body">
                    @include('partials.validation-errors')
                    <form action="{{route('posts.update',$post->id)}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        @include('post._form',['created'=>false])
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

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Categoria</div>

                <div class="card-body">
                    <form action="{{route('categories.update',$category->id)}}" method="post">
                        @csrf
                        @method('PATCH')
                        @include('category._form')
                        <div class="form-group  text-center">
                            <button class="btn btn-warning btn-block mt-5" type="submit"
                                class="btn btn-primary">Editar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

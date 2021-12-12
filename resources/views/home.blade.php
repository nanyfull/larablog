@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body d-flex d-flex-">
                    <div class="card mx-1" style="width: 18rem;">
                        <img class="card-img-top" src="http://via.placeholder.com/640x360" alt="">
                        <div class="card-body">
                          <h5 class="card-title">Categorias</h5>
                          <a href="{{route('categories.index')}}" class="btn btn-primary text-center">Ir a Cateogorias</a>
                        </div>
                      </div>
                      <div class="card mx-1" style="width: 18rem;">
                        <img class="card-img-top" src="http://via.placeholder.com/640x360" alt="">
                        <div class="card-body">
                          <h5 class="card-title">Usuarios</h5>
                          <a href="{{route('users.index')}}" class="btn btn-primary text-center">Ir a usuarios</a>
                        </div>
                      </div>

                      <div class="card mx-1" style="width: 18rem;">
                        <img class="card-img-top" src="http://via.placeholder.com/640x360" alt="">
                        <div class="card-body">
                          <h5 class="card-title">Publicaciones</h5>
                          <a href="{{route('posts.index')}}" class="btn btn-primary text-center">Ir a Publicaciones</a>
                        </div>
                      </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

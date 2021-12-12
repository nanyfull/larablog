@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Publicación</div>

                <div class="card-body row">
                    <div class="col-12">
                        <a href="{{route('posts.create')}}" class="btn btn-success">Crear</a>
                    </div>
                    <div class="col-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th  scope="col">ID</th>
                                    <th  scope="col">Titulo</th>
                                    <th  scope="col">Categoría</th>
                                    <th  scope="col">Creación</th>
                                    <th  scope="col">Actualización</th>
                                    <th  scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post )
                                <tr>
                                    <td>{{$post->id}}</td>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->category->name}}</td>
                                    <td>{{$post->created_at}}</td>
                                    <td>{{$post->updated_at}}</td>
                                    <td class="d-flex flex-row justify-content-around">
                                        <a href="{{route('posts.show',$post->id)}}" class="btn btn-outline-primary">Ver</a>
                                        <a href="{{route('posts.edit',$post->id)}}" class="btn btn-outline-primary">Actualizar</a>
                                        <div>
                                            <form :id="'delete-form'.$post['id']" method="POST" action="{{route('posts.destroy',$post['id'])}}" >
                                                @csrf
                                                @method('DELETE')
                                                  <input type="submit" class="btn btn-outline-danger" value="Eliminar">
                                              </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">
                            {!! $posts->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

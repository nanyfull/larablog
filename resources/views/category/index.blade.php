@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categorias</div>

                <div class="card-body row">
                    <div class="col-12">
                        <a href="{{route('categories.create')}}" class="btn btn-success">Crear</a>
                    </div>
                    <div class="col-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th  scope="col">ID</th>
                                    <th  scope="col">Categoria</th>
                                    <th  scope="col">Creación</th>
                                    <th  scope="col">Actualización</th>
                                    <th  scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category )
                                <tr>
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->created_at}}</td>
                                    <td>{{$category->updated_at}}</td>
                                    <td class="d-flex flex-row justify-content-around">
                                        <a href="{{route('categories.show',$category->id)}}" class="btn btn-outline-primary">Ver</a>
                                        <a href="{{route('categories.edit',$category->id)}}" class="btn btn-outline-primary">Actualizar</a>
                                        <div>
                                            <form :id="'delete-form'.$category['id']" method="POST" action="{{route('categories.destroy',$category['id'])}}" >
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

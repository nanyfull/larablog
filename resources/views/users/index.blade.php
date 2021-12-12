@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Usuarios</div>

                <div class="card-body row">
                    <div class="col-12">
                        <a href="{{route('users.create')}}" class="btn btn-success">Crear</a>
                    </div>
                    <div class="col-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th  scope="col">ID</th>
                                    <th  scope="col">Nombre</th>
                                    <th  scope="col">Rol</th>
                                    <th  scope="col">Creación</th>
                                    <th  scope="col">Actualización</th>
                                    <th  scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user )
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->rol->key}}</td>

                                    <td>{{$user->created_at}}</td>
                                    <td>{{$user->updated_at}}</td>
                                    <td class="d-flex flex-row justify-content-around">
                                        <a href="{{route('users.show',$user->id)}}" class="btn btn-outline-primary">Ver</a>
                                        <a href="{{route('users.edit',$user->id)}}" class="btn btn-outline-primary">Actualizar</a>
                                        <div>
                                            <form :id="'delete-form'.$user['id']" method="POST" action="{{route('users.destroy',$user['id'])}}" >
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
                            {!! $users->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

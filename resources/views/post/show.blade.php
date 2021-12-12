@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detalle de la publicación</div>

                <div class="card-body">
                    <p><strong>Titulo:</strong> {{$post->title}}</p>
                    <p><strong>Slug:</strong> {{$post->url_clean}}</p>
                    <p><strong>Publicado:</strong>
                        @if ($post->posted == 'yes')
                        Si
                        @elseif ($post->posted == 'not')
                        No
                        @endif
                    </p>
                    <p><strong>Categoria:</strong> {{$post->category->name}}</p>
                    <p><strong>Contenido:</strong> <br></p>
                    <p> {{$post->content}}</p>
                    <p>@if ($post->image)
                        <img src="/storage/{{$post->image->image}}" alt="image" width="50" height="50">
                        @endif</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

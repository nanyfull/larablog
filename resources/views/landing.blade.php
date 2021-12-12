@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body d-flex d-flex-">
                    {{$posts}}
                    @foreach ($posts as $post )
                    <div class="card mx-1" style="width: 18rem;">
                        <img class="card-img-top" src="/storage/{{$post->image->image}}" alt="{{$post->title}}" width="100%" height="200">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->title}}</h5>
                            <a href="{{route('post-slug',$post->url_clean)}}" class="btn btn-primary text-center">Visitar</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

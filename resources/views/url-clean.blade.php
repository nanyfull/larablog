@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    <h2 class="text-center">{{$post->title}}</h2>
                    @if ($post->image)
                    <img src="/storage/{{$post->image->image}}" alt="image" width="250" height="250">
                    @endif

                    <p> {{$post->content}}</p>
                    <p>
                        <span class="badge bg-secondary">{{$post->category->name}}</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

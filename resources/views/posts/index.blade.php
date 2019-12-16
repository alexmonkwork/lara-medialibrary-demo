@extends('layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="container">
            <div class="col-md-auto mt-5">
                <a href="{{ route('posts.create') }}" class="btn btn-success" >Add post</a>
                <div class="col-md-12">
                 @foreach($posts as $post)
                        <div class="card mt-5" >
                            <img src="{{$post->getFirstMediaUrl('images')}}" />
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text"> {{ $post->content }}</p>
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn  btn-info" >Edit post</a>
                            </div>
                        </div>
                 @endforeach
                </div>
            </div>
        </div>
@endsection

@extends('layouts.dashboard')

@section('content')
    <section>
        <div class="container">
            <h1>{{$post->title}}</h1>

            <div class="mb-2"><strong>Slug:</strong> {{$post->slug}}</div>

            <p>{{$post->content}}</p>
            
            <a href="{{ route('admin.posts.edit', ['post'=>$post->id]) }}">Modifica Post</a>
        
            <form action="{{route('admin.posts.destroy',['post'=>$post->id])}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Cancella post</button>
            </form>

        </div>
    </section>
@endsection
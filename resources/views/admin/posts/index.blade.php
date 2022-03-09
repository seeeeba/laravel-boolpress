@extends('layouts.dashboard')

@section('content')
    <section>
        <div class="container">
            <h1>Sono un post</h1>
            
            <div class="row row-cols-3">
                @foreach ($posts as $post)
                    <div class="card mt-2">
                        {{-- <img src="..." class="card-img-top" alt="..."> --}}
                        <div class="card-body">
                            <h5 class="card-title">{{$post->title}}</h5>
                            <p class="card-text">{{Str::substr($post->content, 0, 50)}}...</p>
                            <a href="{{route('admin.posts.show', ['post'=>$post->id])}}" class="btn btn-primary">Leggi il post</a>
                        </div>
                    </div>
                @endforeach
                {{-- Single Post --}}
                

            </div>
        </div>
    </section>
@endsection
@extends('layouts.dashboard')

@section('content')
    <section>
        <div class="container">
            <h1>{{$post->title}}</h1>

            <div class="mb-2"><strong>Slug:</strong> {{$post->slug}}</div>

            <p>{{$post->content}}</p>
        </div>
    </section>
@endsection
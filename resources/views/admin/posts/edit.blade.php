@extends('layouts.dashboard')

@section('content')
    <section>
        <h2>Modifica post</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            
        @endif

        <form action="{{route('admin.posts.update', ['post'=>$post->id])}}" method="post">
            @csrf
            @method('PUT')


            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control" id="title" name="title" value="{{old('title',$post->title)}}">
            </div>
            
            <div class="mb3">
                <label for="content" class="form-label">Content</label>   
                <textarea class="form-control" name="content" id="content" cols="30" rows="10">{{old('content',$post->content)}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </section>
@endsection
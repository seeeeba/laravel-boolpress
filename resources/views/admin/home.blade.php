@extends('layouts.dashboard')

@section('content')
    <section>
        <div class="container">
            <h1>Benvenuto {{$user->name}} nell'area riservata</h1>
        </div>
    </section>
@endsection
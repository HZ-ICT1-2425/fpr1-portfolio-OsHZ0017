@extends('layouts.main')

@section('title', '500')

@section('css')
    @vite('resources/css/index.css')
@endsection

@section('content')
    <section>
        <div class="articles">
            <div class="box">
                <h1 class="title">500</h1>
                <h2 class="subtitle">Server Error</h2>
            </div>
            <p class="text-xl">The server can't reach the page you are looking for...</p>
            <a href="{{route('welcome')}}">Go back home?</a>
        </div>
    </section>
@endsection

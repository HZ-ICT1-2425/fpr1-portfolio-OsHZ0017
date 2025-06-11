@extends('layouts.main')

@section('title', '404')

@section('css')
    @vite('resources/css/index.css')
@endsection

@section('content')
    <section>
        <div class="articles">
            <div class="box">
                <h1 class="title">404</h1>
                <h2 class="subtitle">Page not found</h2>
            </div>
            <p class="text-xl">The page you are looking for does not exist!</p>
            <a href="{{route('welcome')}}">Go back home?</a>
        </div>
    </section>
@endsection

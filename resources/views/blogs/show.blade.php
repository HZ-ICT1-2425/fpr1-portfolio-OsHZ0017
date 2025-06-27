@extends('layouts.blogs')

@section('title', $blog->title)

@section('content')
    <section>
        <div class="box">
    <h1>{{ $blog->title }}</h1>
    <h4>
        {!! $blog->excerpt !!}
    </h4>

    <div>
    {!! $blog->body !!}
    </div>
        </div>
    </section>
    @endsection

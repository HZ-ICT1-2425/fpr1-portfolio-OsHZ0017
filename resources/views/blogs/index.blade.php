@extends('layouts.blogs')

@section('title', 'Blog Feed')

@section('content')
    <section>
        <aside class="blog-menu blog-menu-div">
           @foreach($blogs as $blog)
                <a class="m-2" href="{{ route('blogs.show', ['blog' => $blog]) }}">
                    <h4>{{ $blog->title }}</h4>
                </a>
               @endforeach
        </aside>
        <div class="container">
            @foreach ($blogs as $blog)
                <x-card.blog :blog="$blog"/>
              @endforeach
        </div>
    </section>
    @endsection

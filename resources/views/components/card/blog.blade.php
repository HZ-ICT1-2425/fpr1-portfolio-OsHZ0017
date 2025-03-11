<a href="{{ route('blogs.show', ['blog' => $blog]) }}">
<article>
    <div>
        <h3>{{ $blog->title }}</h3>
        <p>{!! $blog->excerpt !!}</p>
        <h6>{{ $blog->created_at->toFormattedDateString() }}</h6>
    </div>
</article></a>
<br>

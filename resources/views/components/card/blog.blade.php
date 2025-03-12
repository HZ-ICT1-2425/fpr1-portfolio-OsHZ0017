<a href="{{ route('blogs.show', ['blog' => $blog]) }}">
    <div class="box">
        <h3>{{ $blog->title }}</h3>
        <p>{!! $blog->excerpt !!}</p>
        <h6>{{ $blog->created_at->toFormattedDateString() }}</h6>
    </div>
</a>
<br>

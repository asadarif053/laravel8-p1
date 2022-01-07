@extends ('layout2')

@section('content')
<article>
    <p><a href="">{{$post->title}}</a></p>
    <a href="/users/{{ $post->user->id }}"> {{ $post->user->name }}</a>
    <a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }}</a>
    <div>{!! $post->body !!}</div>
</article>
<a href="/">Back</a>
@endsection
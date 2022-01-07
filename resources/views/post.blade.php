@extends ('layout2')

@section('content')
<article>
    <a href="">{{$post->title}}</a>
    <div>{!! $post->body !!}</div>
</article>
<a href="/">Back</a>
@endsection
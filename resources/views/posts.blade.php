<x-layout>

<x-slot name="banner"> 
 <a href="/">Home</a>
</x-slot>
    <x-slot name="content"> 
    @foreach( $posts as $post)
    <article class="{{$loop->even?'even':'odd'}} {{$loop->first?' first':' '}} {{$loop->last?' last':'' }}">
       <p> <a href="/post/{{$post->slug}}">{{$post->title}}</a></p>
        By <a href="/author/{{ $post->author->username }}"> {{ $post->author->name }}</a> |
        <a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }}</a>
        <div>{!! $post->excerpt !!}</div>
    </article>
    @endforeach
    </x-slot>
</x-layout>
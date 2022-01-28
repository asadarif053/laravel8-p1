<x-layout>

    <!-- <x-slot name="content"> 
    @foreach( $posts as $post)
    <article class="{{$loop->even?'even':'odd'}} {{$loop->first?' first':' '}} {{$loop->last?' last':'' }}">
       <p> <a href="/post/{{$post->slug}}">{{$post->title}}</a></p>
        By <a href="/author/{{ $post->author->username }}"> {{ $post->author->name }}</a> |
        <a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }}</a>
        <div>{!! $post->excerpt !!}</div>
    </article>
    @endforeach
    </x-slot> -->
 
    @include ('posts._header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

    @if($posts->count())
    <x-post-grid :posts="$posts" />

    {{ $posts->links()}}

    @else
        <p> No posts available </p>
    
    @endif

           
        </main>
</x-layout>
<x-layout>

<x-slot name="banner"> 
 banner
</x-slot>
    <x-slot name="content"> 
    @foreach( $posts as $post)
    <article class="{{$loop->even?'even':'odd'}} {{$loop->first?' first':' '}} {{$loop->last?' last':'' }}">
        <a href="/post/{{$post->id}}">{{$post->title}}</a>
        <div>{!! $post->excerpt !!}</div>
    </article>
    @endforeach
    </x-slot>
</x-layout>
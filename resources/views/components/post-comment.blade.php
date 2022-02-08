@props(['comment'])

<x-panel>
                    <article class="flex bg-gray-100 p-6 rounded-xl space-x-4">
                            <div class="image-shrink-0">
                                <img src="https://i.pravatar.cc/100?u={{$comment->author->id}}" alt="" width="60" height="60" />
                            </div>

                            <div>
                                <header>
                                    <h3>{{ $comment->author->username }} </h3>
                                    <p class="text-xs">Posted <time>{{ $comment->created_at->diffForHumans()}}</time></time></p>
                                </header>

                                <p> {{ $comment->body}} </p>
                            </div>
                    </article>
</x-panel>


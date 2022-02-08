<x-panel>
    @auth
                <form method="POST" action="/posts/{{ $post->slug}}/comments">
                    @csrf
                    <header class="flex items-center">
                   
                                <img src="https://i.pravatar.cc/100?u={{ auth()->id() }}" alt="" width="40" height="40" />
                            <h2> Write to prticipate</h2>
                    </header>


                    <div class="mt-6">
                        <textarea name="body" class="w-full text-sm focus:outline-none focus:ring" cols="30" rows="10" placeholder="write your comment"></textarea>
                    </div>
                    <div class="flex justified-end mt-10"> 
                        <button type="submit" value="Submit" class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-2 rounded-xl">Post</button>
                    </div>
                   
                </form>
    @else 
        <p> <a href="/register"> Register </a> or <a href="/login">Login</a> to post a commnet!</p>            
     @endauth           
                </x-panel>
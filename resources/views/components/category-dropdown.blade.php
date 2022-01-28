
<select class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold" id="categoryFilter">
        <option value="{{ http_build_query(request()->except(['category','page'])) }}"  >All</option>                      

        @foreach($categories as $category)
            <option value="category={{$category->slug}}& {{ http_build_query(request()->except(['category','page'])) }}" <?=(isset($currentCategory->slug)&&$category->slug==$currentCategory->slug)? "selected":""?> > {{ $category->name }}</option> 
        @endforeach
</select>
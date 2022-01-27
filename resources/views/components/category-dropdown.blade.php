
<select class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold" id="categoryFilter">
        <option value="category" disabled selected >Category</option>                      

        @foreach($categories as $category)
            <option value="{{$category->slug}}" <?=(isset($currentCategory->slug)&&$category->slug==$currentCategory->slug)? "selected":""?> > {{ $category->name }}</option> 
        @endforeach
</select>
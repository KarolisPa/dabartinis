<div class="w-full bg-gray-100 p-2 mt-12 border border-gray-300 rounded">
    <h2 class="text-center my-2 text-2xl">Produktų filtras</h2>
    <div class="text-center">
            @foreach( $cats as $cat)
            <label class="inline-flex items-center mx-1">
            <input wire:model="catFilter.{{$cat->name}}" type="checkbox" value="{{$cat->name}}" class="form-checkbox">
            <span class="ml-2">{{$cat->name}}</span>
            </label>
            @endforeach
    </div>

    @foreach($catFilter as $filts)
        {{$filts}}
    @endforeach
</div>

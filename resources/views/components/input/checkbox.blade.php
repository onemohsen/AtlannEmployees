@props([
'label'=>'',
'checked'=>0,
'for'=>''
])

<div>
    <div class="flex justify-start items-start">
        <div class="flex items-center">
            <input
                {{$attributes}}
                type="checkbox" id="{{$for}}"
                class="h-4 w-4 text-gray-700 border rounded mr-2 cursor-pointer"
                @if($checked) checked @endif
            >
            @if(!empty($label))
                <label for="{{$for}}" class="pr-2 text-sm">{{$label}}</label>
            @endif
        </div>
    </div>
</div>

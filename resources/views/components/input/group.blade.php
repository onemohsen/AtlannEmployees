@props([
'for',
'label',
'error',
'required'=>false
])

<div class="mb-8">
    <label for="{{$for}}" class="font-iransans block text-gray-700 text-sm font-bold mb-2">
        @if($required)
            <span class="text-red-500">&nbsp;*</span>
        @endif
        {{$label}}
    </label>
    <div class="mt-1 relative rounded-md shadow-sm">

        {{$slot}}
    </div>
    @if($error)
        <strong class="text-red-500 text-xs italic">{{$error}}</strong>
    @endif
</div>

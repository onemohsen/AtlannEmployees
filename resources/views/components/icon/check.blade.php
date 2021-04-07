@props(['svgClass'])

<div
    {{ $attributes->only('class')->merge(['class'=>'inset-y-0 right-0 pr-3 flex items-center']) }}
>
    <svg
        class="{{$svgClass??''}}  text-gray-400 cursor-pointer"
        fill="none" stroke-linecap="round"
        stroke-linejoin="round"
        stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"
    >
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
    </svg>

</div>

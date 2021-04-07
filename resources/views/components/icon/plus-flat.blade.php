@props([
    'tooltip'=>null
])

<div
    {{$attributes}}
    x-data="{ tooltip: false }"
    class="inline-flex inset-y-0 right-0 pr-3 flex items-center "
>
    <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false">
        <svg class="z-10 h-5 w-5 text-gray-400 hover:text-indigo-500 cursor-pointer" fill="none" stroke-linecap="round"
             stroke-linejoin="round"
             stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">

            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>

        </svg>
    </div>
    @if($tooltip)
        <div
            x-show="tooltip"
            class="absolute z-20 top-12  p-2 text-center w-28 text-xs leading-tight text-white transform bg-indigo-500 rounded-lg shadow-lg cursor-default"
        >
            {{$tooltip}}
        </div>
    @endif
</div>

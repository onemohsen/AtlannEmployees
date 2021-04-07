@props([
'tooltip'=>null
])

<div
    {{$attributes}}
    class="inline-flex inset-y-0 right-0 pr-3 flex items-center "
    x-data="{ tooltip: false }"
>
    <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false">
        <svg class="h-5 w-5 text-gray-400 hover:text-yellow-300 cursor-pointer" fill="none" stroke-linecap="round"
             stroke-linejoin="round"
             stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"/>
        </svg>
    </div>
    @if($tooltip)
        <div
            x-show="tooltip"
            class="absolute z-20 top-12  p-2 text-center w-28 text-xs leading-tight text-white transform bg-yellow-500 rounded-lg shadow-lg cursor-default"
        >
            {{$tooltip}}
        </div>
    @endif

</div>

@props([
'tooltip'=>null
])


<div
    {{$attributes}}
    class="inline-flex inset-y-0 right-0 pr-3 items-center "
    x-data="{ showToolTip: false , tooltip:{{ !is_null($tooltip) ? 1 : 0 }} }"
>
    <div x-on:mouseleave="showToolTip = false" x-on:mouseover="showToolTip = true">
        <svg class="z-10 h-5 w-5 text-gray-400 hover:text-purple-500 cursor-pointer" fill="none" stroke-linecap="round"
             stroke-linejoin="round"
             stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
        </svg>
    </div>
    <template x-if="tooltip">
        <div
            x-show="showToolTip"
            class="absolute z-20 top-12  p-2 text-center w-28 text-xs leading-tight text-white transform  bg-purple-500 rounded-lg shadow-lg cursor-default"
        >
            {{$tooltip}}
        </div>
    </template>
</div>

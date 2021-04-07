@props([
'tooltip'=>null
])


<div
    {{$attributes}}
    class="inline-flex inset-y-0 right-0 pr-3 flex items-center"
    x-data="{ showToolTip: false , tooltip:{{ !is_null($tooltip) ? 1 : 0 }} }"
>
    <div x-on:mouseover="showToolTip = true" x-on:mouseleave="showToolTip = false">
        <svg class="z-10 h-5 w-5 text-gray-400 hover:text-red-400 cursor-pointer" fill="none" stroke-linecap="round"
             stroke-linejoin="round"
             stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
        </svg>
    </div>
    <template x-if="tooltip">
        <div
            x-show="showToolTip"
            class="absolute z-20 top-12  p-2 text-center w-28 text-xs leading-tight text-white transform  bg-red-500 rounded-lg shadow-lg cursor-default"
        >
            {{$tooltip}}
        </div>
    </template>
</div>

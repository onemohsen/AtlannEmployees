@props([
'tooltip'=>null
])


<div
    {{$attributes}}
    class="inline-flex inset-y-0 right-0 pr-3 items-center "
    x-data="{showToolTip:false , tooltip:{{ !is_null($tooltip) ? 1 : 0 }} }"
>
    <div x-on:mouseover="showToolTip = true" x-on:mouseleave="showToolTip = false">
        <svg class="z-10 h-5 w-5 text-gray-400 hover:text-orange-400 cursor-pointer" fill="none" stroke-linecap="round"
             stroke-linejoin="round"
             stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
        </svg>
    </div>

    <template x-if="tooltip">
        <div
            x-show="showToolTip"
            class="absolute z-20 top-12  p-2 text-center w-28 text-xs leading-tight text-white transform bg-orange-500 rounded-lg shadow-lg cursor-default"
        >
            {{$tooltip}}
        </div>
    </template>
</div>

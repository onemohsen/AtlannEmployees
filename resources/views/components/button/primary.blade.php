@props ([
    'label'=>'',
])

<div {{ $attributes->only('class')->merge(['class'=>'mb-4']) }}>
    <button
        {{$attributes->except('class')}}
        class="py-2 px-6 font-normal text-white bg-indigo-500
         rounded transition duration-500 hover:bg-indigo-700
          focus:outline-none focus:shadow-outline"
        type="submit">
        {{$label}}
    </button>
</div>

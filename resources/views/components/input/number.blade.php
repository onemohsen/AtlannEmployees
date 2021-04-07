<input
    {{$attributes}}
    type="number"
    class="block pr-10 shadow appearance-none border-2
    @if($errors->has($attributes['id'])) border-red-300 @else border-green-100 @endif
        rounded w-full py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white
         focus:border-green-300 transition duration-500 ease-in-out"
/>

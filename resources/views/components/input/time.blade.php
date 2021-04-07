@props(['startDate'=>null,'endDate'=>null,])

<div
    x-data=""
    x-init="$('#{{$attributes["id"]}}').flatpickr({
        enableTime: true,
        enableSeconds: true,
        noCalendar : true,
        time_24hr : true
    });"
>
    <input
        {{$attributes}}
        type="text"
        id="{{$attributes['id']}}"
        class="@if($errors->has($attributes['id'])) border-red-300 @else border-green-100 @endif
            block pr-10 shadow appearance-none border-2
            rounded w-full py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white
            focus:border-green-300 transition duration-500 ease-in-out"
        readonly
    >
</div>

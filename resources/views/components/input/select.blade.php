@props([
    'defultSelect'=>'انتخاب کنید',
    'options',
    'optionName'
])



<div>
    <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg"
         viewBox="0 0 412 232">
        <path
            d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z"
            fill="#648299" fill-rule="nonzero"/>
    </svg>
    <select
        {{$attributes}}
        class="block pr-10 shadow appearance-none border-2
            @if($errors->has($attributes['id'])) border-red-300 @else border-green-100 @endif
            rounded w-full py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white
            focus:border-green-300 transition duration-500 ease-in-out"
    >
        <option value="0">{{$defultSelect}}</option>
        @foreach($options as $option)
            <option value="{{$option['id']}}">
                {{$option[$optionName] ?? ""}}
            </option>
        @endforeach
    </select>



</div>

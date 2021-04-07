@props([
'startDate'=>null,
'endDate'=>null,
])

<div
    x-data
    x-init="$('#{{$attributes["id"]}}').pDatepicker({
            initialValue: false,
            autoClose: true,
            format: new persianDate().format('dddd, MMMM DD YYYY, h:mm:ss a'),
            toolbox:{
                calendarSwitch:{
                    enabled : false
                }
            },
            initialValueType: 'persian',
            onSelect(date){
                console.log(moment(date).format('YYYY-MM-DD'));
                //$('#{{$attributes["id"]}}').val(moment(date).format('YYYY-MM-DD'));
                @this.set('{{$attributes->wire('model')->value}}', moment(date).format('YYYY-MM-DD'));
                @if($startDate)
        @this.set('startDate', moment(date).format('YYYY-MM-DD'));
@elseif($endDate)
        @this.set('endDate', moment(date).format('YYYY-MM-DD'));
@endif
        $('#{{$attributes["id"]}}').val(moment(date).format('jYYYY-jMM-jDD'));
            }
        })
        "
>
    <input
        wire:ignore
        x-data
        @if($startDate)
        x-init="$('#{{$attributes["id"]}}').val(moment($wire.startDate).format('jYYYY-jMM-jDD'))"
        @elseif($endDate)
        x-init="$('#{{$attributes["id"]}}').val(moment($wire.endDate).format('jYYYY-jMM-jDD'))"
        @endif
        id="{{$attributes['id']??''}}"
        readonly
        x-ref="input"
        class="@if($errors->has($attributes['id'])) border-red-300 @else border-green-100 @endif
            block pr-10 shadow appearance-none border-2
            rounded w-full py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white
            focus:border-green-300 transition duration-500 ease-in-out"

    />
    <input type="date" hidden
           id="{{$attributes['id'].'_hidden'??''}}"
           {{$attributes->wire('model')}}
           @if($startDate)
           value="{{$startDate}}"
           @elseif($endDate)
           value="{{$endDate}}"
           @endif
           x-ref="inputh"
    >
</div>

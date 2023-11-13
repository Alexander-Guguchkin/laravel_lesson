<x-layout>
    <x-slot:title>ifElse</x-slot>
    {{$isTrue}}
    @if ($isTrue > 18)
        вы старше 18
    @elseif ($isTrue == 18)
        вам 18 лет
    @else
        вы младше 18
    @endif
    @unless ($isTrue>18)
        вы несовершеннолетний
    @endunless
    {{-- {{dump($isArs)}} --}}
   <p>
    @if (count($isArs)>0)
        {{array_sum($isArs)}}
    @else
        в массиве нет элементов
    @endif

   </p>
   <ul>
        @foreach ( $isArs as $elem )
            <li>{{$elem}}</li>
        @endforeach
    </ul>
   <ul>
        @foreach ( $isArs as $elem )
            <li>{{$elem**2}}</li>
        @endforeach
   </ul>
   <ul>
        @foreach ( $isArs as $elem )
            <li>{{sqrt($elem)}}</li>
        @endforeach
    </ul>
    <ul>
        @foreach ($strarg as $key => $elem)
         <li>{{$key}}=>{{$elem}}</li>
        @endforeach
    </ul>
    <ul>
        @foreach ($strarg as $key => $elem)
         <li>{{$key + 1}}=>{{$elem}}</li>
        @endforeach
    </ul>
    <ul>
        @foreach ($arr as $elem)
            @if ($elem%2 == 0)
                <li>{{$elem}}</li>
            @endif
        @endforeach
    </ul>
    <ul>
        @if(is_numeric($res))
            <li>{{$res}} число</li>
        @elseif (is_array($res))
            @foreach ($res as $elem)
                <li>{{$elem}} массив</li>
            @endforeach
        @else
            Ошибка
        @endif

    </ul>
   {!!dd($isArs)!!}
</x-layout>

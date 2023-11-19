<x-layout>
    <x-slot:title>
        getAllInfo
    </x-slot>
    {{$query}}
    @foreach ($query as $item )
        @foreach ($item->getAttributes() as $v => $value)
            <h2>{{$v}}: {{$value}}</h2>
        @endforeach
        @foreach ($item->profile->getAttributes() as $v => $value)
            <h2>{{$v}}: {{$value}}</h2>
        @endforeach
        <h2>{{$item->city}}</h2>
        @foreach ($item->roles as $v)
            @foreach ($v->getAttributes() as $v1 => $value)
                <h2>{{$v1}}: {{$value}}</h2>
            @endforeach
        @endforeach
    @endforeach
</x-layout>

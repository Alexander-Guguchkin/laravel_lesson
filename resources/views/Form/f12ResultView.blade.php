<x-layout>
    <x-slot:title>
        f12Result
    </x-slot>
    {{$id}}
    {{$login}}
    @foreach ($alldata as $item => $value)
        <h2>{{$item}}: {{$value}}</h2>
    @endforeach
</x-layout>

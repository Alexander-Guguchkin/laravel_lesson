<x-layout>
    <x-slot:title>
        resultPost
    </x-slot>
    @foreach ($user as $item)
        <h2>{{$item}}</h2>
    @endforeach
</x-layout>

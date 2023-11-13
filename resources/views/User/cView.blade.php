<x-layout>
    <x-slot:title>
        Citys
    </x-slot>
    <p>{{$location['city'] ? $location['city'] : 'Москва'}}</p>
    <p>{{$location['country'] ? $location['country'] : 'Москва'}}</p>

    <p></p>
</x-layout>


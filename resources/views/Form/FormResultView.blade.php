<x-layout>
    <x-slot:title>
        FormResult
    </x-slot>
    <ul>
        @foreach ($alldata as $item)
            <li>{{$item}}</li>
        @endforeach
    </ul>
</x-layout>
